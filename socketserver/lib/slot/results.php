<?php

class SlotResults{
	
	/**
	 * @var SlotSlot
	 */
	private $_game;
	public $tries = 0;
	private $_total_count = null;
	private $_success_count = null;
	private $_bonus_game = false;
	
	public function __construct(SlotSlot $item)
	{
		$this->_game = $item;
	}
	
	/**
	 * @param SlotCombination $combination
	 */
	private function setResult(SlotCombination $combination)
	{
		$symbol_id = $combination->symbol_id;
		$comb = $combination->count;
		$game_id = $this->_game->getId();
		list($sel) = MySQLDBase::$instance->Select(' `count` FROM `'.TBL_SUCCESS_COUNT.'` 
												WHERE `symbol_id` = \''.mysql_real_escape_string($symbol_id).'\'
												AND `game_id` = \''.$game_id.'\'
												AND `combination` = \''.$comb.'\'');
		if($sel)
			MySQLDBase::$instance->Update(array('table'=>TBL_SUCCESS_COUNT, 'safe_vals'=>0,
									'fields'=>array('count'=>'`count` + 1'), 
									'match'=>array('symbol_id'=>$symbol_id, 'game_id'=>$game_id, 'combination'=>$comb)));
		else 
			MySQLDBase::$instance->Query('INSERT INTO `'.TBL_SUCCESS_COUNT.'` (`game_id`, `symbol_id`, `combination`, `count`) 
										VALUES (\''.$game_id.'\', \''.mysql_real_escape_string($symbol_id).'\', \''
										.$comb.'\', \'1\')');
	}
	
	/**
	 * @param SlotCombination $combination
	 * @return array
	 */
	private function getSuccessCount(SlotCombination $combination)
	{
		if($this->_success_count === null)
		{
			$this->_success_count = array();
			$res = MySQLDBase::$instance->Select(' `count`, `combination`, `symbol_id` FROM `'.TBL_SUCCESS_COUNT.'` WHERE `game_id` = \''.MySQLDBase::$instance->Escape($this->_game->getId()).'\'');
			if(is_array($res))
				foreach ($res as $_row)
				{
					$this->_success_count[$_row['symbol_id']][$_row['combination']] = $_row['count'];
				}
		}
		
		$symbol_id = $combination->symbol_id;
		$comb = $combination->count;
		
		return intval($this->_success_count[$symbol_id][$comb]);
	}
	
	/**
	 * @return int
	 */
	private  function getTotalCount()
	{
		if($this->_total_count === null)
		{
			list($tries) = MySQLDBase::$instance->Select(' `count` FROM `'.TBL_GAME_COUNT.'` 
																WHERE `game_id` = \''.$this->_game->getId().'\'');
			$this->_total_count = intval($tries['count']);
		}
		return intval($this->_total_count);
	}
	
	private function availCombination(SlotCombination $combination)
	{
		$success_count = $this->getSuccessCount($combination);
		$spins = $this->getTotalCount();

		$div = 0;
		if (($spins > 0) && isset($success_count))
			$div = $success_count / $spins;

		return $div <= $combination->expectation;
	}
	
	public function check()
	{
		$this->tries++;
		$game_id = $this->_game->getId();
		$wins = $this->_game->getWins();
		$count_combination = 0;
		$success_combinations = array();
		$this->_bonus_game = false;
		foreach ($wins as $line=>$combination)
		{
			foreach ($combination as $success_count) 
			{
				echo '<pre>';
				echo '!!!!!!:';
				var_dump($success_count, $this->_game->getSymbols()->getSpecialSymbol()->getId());
				var_dump($success_count->symbol_id);
				var_dump($success_count->symbol_id == $this->_game->getSymbols()->getSpecialSymbol()->getId());
				echo '</pre>';
				$count_combination++;
				
				if ($success_count->symbol_id == $this->_game->getSymbols()->getSpecialSymbol()->getId())
					$this->_bonus_game = true;

				if (!$this->availCombination($success_count))
				{
					return false;
				}else{
					$success_combinations[] = $success_count;
				}
			}
		}
		if ($this->_game->getIsBonus())
		{
			$this->_game->decBonusCount();
		}
		
		//save results
		foreach ($success_combinations as $comb)
			$this->setResult($comb);
			
		list($sel) = MySQLDBase::$instance->Select(' `count` FROM `'.TBL_GAME_COUNT.'` 
												WHERE `game_id` = \''.$game_id.'\'');
		if($sel)
			MySQLDBase::$instance->Update(array('table'=>TBL_GAME_COUNT, 'safe_vals'=>0,
									'fields'=>array('count'=>'`count` + 1'), 
									'match'=>array('game_id'=>$game_id)));
		else 
			MySQLDBase::$instance->Query('INSERT INTO `'.TBL_GAME_COUNT.'` (`game_id`, `count`) 
										VALUES (\''.$game_id.'\', \'1\')');

		
		return true;
	}
	
	public function getIsBonus()
	{
		return $this->_bonus_game;
	}
}