<?php

class SlotSlot{
	/**
	 * @var SlotGamefield
	 */
	private $_gamefield;
	/**
	 * @var SlotSymbols_Collection
	 */
	private $_symbols;
	private $_id;
	private $_shuffled;
	private $_wins;
	private $_screen;
	private $_user;
	private $_lines_count = 0;
	
	/* Bonus games */
	private $_bonus_game = false;
	private $_bonus_symbol = null;
	private $_bonus_comb = 0;
	private $_bonus_lines = array();
	private $_bonus_count = 0;
	private $_bonus_wins;
	
	/**
	 * @var SlotParams
	 */
	private $_params;
	
	public function __construct($id, SlotGamefield $gamefield, SlotSymbols_Collection $symbols)
	{
		$this->_id = $id;
		$this->_gamefield = $gamefield;
		$this->_symbols = $symbols;
		$this->_params = new SlotParams($this);
	}
	
	/**
	 * @return SlotParams
	 */
	public function getParams()
	{
		return $this->_params;
	}
	
	public function getId()
	{
		return $this->_id;
	}
	/**
	 * @return SlotResults
	 */
	public function spin($lines_count)
	{
		if($this->getBonusCount() <= 0)
			$this->stopBonusGame();
		$res = new SlotResults($this);
		do{
			$this->shuffle();
			$this->checkWin($lines_count);
		}while (!$res->check());
		
		if ($res->getIsBonus())
		{
			$this->startBonusGame();
		}
		
		return $res;
	}
	
	private function startBonusGame()
	{
		if($this->_bonus_game)
		{
			$this->_bonus_count += 10;
		}else{
			$this->_bonus_count = 10;
			$this->_bonus_game =true;
			$this->_bonus_symbol = $this->randSymbol();
		}
		echo 'Congratulations! You can play in bonus-game.';
		echo '<br>Bonus symbol: '.$this->_bonus_symbol->getId().'<br>';
	}
	private function stopBonusGame()
	{
		$this->_bonus_count = 0;
		$this->_bonus_game =false;
		$this->_bonus_symbol = null;
	}
	
	/**
	 * @return bool
	 */
	public function checkBet($bet, $denomination, $lines)
	{
		if (($bet <= $this->_params->getMaxBet()) && ($lines <= $this->_gamefield->getCountLines()) && isset($denomination))
			return true;
		return false;
	}
	
	public function randSymbol()
	{
		$a = $this->_shuffled;
		shuffle($a);
		return $a[0][0];
	}
	
	private  function shuffle()
	{
		$this->_shuffled = array();
		$columns = array();
		$row = $this->_gamefield->getRowsCount();
		$column = $this->_gamefield->getColumnsCount();

		
		for($i = 0; $i < $column; $i++)
			$columns[] = $this->_symbols->getShuffledIds();
		$offset_top = rand(0, $this->_symbols->getCount() - 1);
		$i = $offset_top;
		$a = 0;
		
		while (count($shuffled) < $row)
		{
			if ($i > ($this->_symbols->getCount()-1))
				$i = 0;
			for ($k = 0; $k < $column; $k++)
				$shuffled[$a][] = clone $this->_symbols->getSymbol($columns[$k][$i]);
			$a++;
			$i++;
		}
		$this->_shuffled = $shuffled;
	}
	
	/*private function hasWins()
	{
		return true;
	}*/
	
//	Получаем ID символа в перемешаном поле $shuffled по координатам $top, $left

/**
 *
 * @param int $top
 * @param int $left
 * @return SlotSymbol
 */
	public function getSymbol($top, $left)
	{
		return  $this->_shuffled[$top][$left];
	}
	
	/**
	 * @param int $lines_count
	 * @return array of SlotWinning
	 */
	private function checkWin($lines_count)
	{
		$lines = $this->_gamefield->getLines();
		$wins = array();
		$bonus_wins = array();
		$bonus_count = $this->getBonusCount();
		if ($bonus_count < 1)
			$this->_bonus_game = false;
		if ($this->getIsBonus())
		{
			if ($bonus_count > 0)
			{
				$var = $this->getIsBonusComb();
				
				/*echo '<pre>IsBonusComb: ';
				var_dump($var);
				echo 'BonusCount: ';
				var_dump($bonus_count);
				echo 'BonusCombination: ';
				var_dump($this->_bonus_comb);
				echo '</pre>';*/
			}
		}
		
		foreach ($lines as $line)
		{
			if($lines_count == 0)
				break;
			$count = 0;	//количество одинаковых символов, идущих по-порядку
			$combination_end = false; //последовательность подряд идущих символов окончена
			$to_highlight = array();
			$spec_symb = array();
			$win = new SlotWinning($line);
			$bonus_win = new SlotWinning($line);
			if($this->getIsBonus() && $this->_bonus_comb != null)
				$bonus_win->push($this->_bonus_comb);
			
			foreach ($line as $position)
			{
				$top = $position->getTop();
				$left = $position->getLeft();
				$symbol = $this->getSymbol($top, $left);
				
				if ($symbol->isspecial())
				{
					echo '$symbol->isspecial():<pre>';
					echo 'Line: '.$line->getId().'<br>';
					//var_dump($symbol);
					echo 'Pos: '.$top.':'.$left.'<br>';
					echo 'End $symbol->isspecial()</pre>';
					$spec_symb[] = $symbol;
				}
				
				if($left > 0)
				{
					if(!$combination_end)
					{
						if($prev_symbol->getId() != $symbol->getId() && !$prev_symbol->isspecial() && !$symbol->isspecial())
							$combination_end = true;
							/*if(!$symbol->isspecial())
								$prev_symbol = $symbol;*/
					}
				}else{
					$prev_symbol = $symbol;
				}
				
				if(!$combination_end)
				{
					if(!$symbol->isspecial())
						$prev_symbol = $symbol;
					$to_highlight[] = $symbol;
					$count++;
				}
			}
			
			if (!$this->getIsBonus() && isset($spec_symb[0]) && $spec_symb[0]->getCombination(count($spec_symb))->multy > 0)
			{
//				echo 'Congratulations! You can play in bonus-game.	';
//				$this->_bonus_game = true;
//				$this->_bonus_symbol = $this->randSymbol();
//				$this->setBonusCount($this->getParams()->getFreeGamesCount() + 1);
//				echo '<br>Bonus symbol: '.$this->_bonus_symbol->getId().'<br>';
//				$count = count($spec_symb);
//				echo 'Line: '.$line->getId().'<br>';
//				/*echo 'Spec Symbol:<pre>';
//				var_dump($spec_symb);*/
//				echo 'Spec Symbol Count:';
//				var_dump($count);
//				var_dump($spec_symb[0]->getCombination(count($spec_symb)));
//				echo 'End Spec</pre>';
				$prev_symbol = $spec_symb[0];
				$to_highlight = array();
				foreach ($spec_symb as $s_symb)
					$to_highlight[] = $s_symb;
			}
			
			$comb = $prev_symbol->getCombination($count);
			if($comb->multy > 0)
			{
				$win->push($comb);
				foreach ($to_highlight as $_symb)
					$_symb->highlight($line->getId());
			}
			$wins[] = $win->getWin();
			$bonus_wins[] = $bonus_win->getWin();
			$lines_count--;
		}
		$this->_wins = $wins;
		/*if ($this->_bonus_game)
		{
			echo 'Spec Symbol Wins:<pre>';
			var_dump($this->_wins);
			echo 'End Spec</pre>';
		}*/
		$this->_bonus_wins = $bonus_wins;
		
		return $wins;
	}
	
	public function getWins()
	{
		return $this->_wins;
	}
	
	public function getBonusWins()
	{
		return $this->_bonus_wins;
	}
	
	public function getShuffled()
	{
		return $this->_shuffled;
	}
	/**
	 * @return bool
	 */
	public function getIsBonus()
	{
		return /*$this->getBonusCount() && */$this->_bonus_game;
	}
	
	/**
	 *@param bool
	 */
	public function setBonusGame($bonus_game = true)
	{
		$this->_bonus_game = $bonus_game;
	}
	
	/**
	 * @return bool
	 */
	public function getIsBonusComb()
	{
		$count = 0;
		$this->_bonus_comb = null;
		for ($leftkey = 0; $leftkey < $this->_gamefield->getColumnsCount(); $leftkey++)
		{
			if ($this->columnHasBonusSymbol($leftkey))
			{
				$count++;
				/*echo '<br>$this->columnHasBonusSymbol<br>Count:';
				var_dump($count);*/
				for ($topkey = 0; $topkey < $this->_gamefield->getRowsCount(); $topkey++)
				{
					
						$pos_no = $topkey * $this->_gamefield->getColumnsCount() + $leftkey + 1;
						$line_pos_exist = $this->_gamefield->getLinesId($topkey, $leftkey);
				
			//	Подсвечивает бонус-символ в каждой линии, где он находится
						foreach ((array)$line_pos_exist as $line_id)
							$win_bonus_lines[$line_id][] = $pos_no;
				}
			}
		}
/*		echo 'Count result: ';
		var_dump($count);*/
		if ($this->_bonus_symbol->getCombination($count)->multy > 0)
			$this->_bonus_comb = $this->_bonus_symbol->getCombination($count);
		else $win_bonus_lines = array();
		$this->_bonus_lines = $win_bonus_lines;
		
		return $this->_bonus_comb === null;
	}
	
	public function getBonusLines()
	{
		return $this->_bonus_lines;
	}
	
	public function setBonusCount($bonus_count)
	{
		$this->_bonus_count = $bonus_count;
	}
	
	public function decBonusCount()
	{
		$this->_bonus_count--;
	}
	
	public function getBonusCount()
	{
		return $this->_bonus_count;
	}
	
	/**
	 * Combine array with screen state ready to send to socket
	 *
	 * @return array
	 */
	public function getScreenArray()
	{
		$screen = array();
		$win_lines = array();
		for ($leftkey = 0; $leftkey < $this->_gamefield->getColumnsCount(); $leftkey++)
			for ($topkey = 0; $topkey < $this->_gamefield->getRowsCount(); $topkey++)
			{
				$_symbol_id = $this->getSymbol($topkey, $leftkey)->getId();
				$pos_no = $topkey * $this->_gamefield->getColumnsCount() + $leftkey + 1;
				$screen[$pos_no] = $_symbol_id;
				$highlights = $this->getSymbol($topkey, $leftkey)->getHighlight();
				foreach ((array)$highlights as $_line_id)
					$win_lines[$_line_id][] = $pos_no;
			}
		$result = array('screen' => $screen, 'lines' => $win_lines);
		if($this->getIsBonus())
		{
//			$this->getIsBonusComb();
			$result['bonus'] 		= $this->getIsBonus();
			$result['bonus_count'] 	= $this->getBonusCount();
			$result['bonus_lines'] 	= $this->getBonusLines(); 
			$result['bonus_symbol'] = $this->_bonus_symbol->getId();
		}
		return $result;
	}
	
	/**
	 * Get array with lines positions
	 *
	 * @return array
	 */
	public function getLinesArray()
	{
		$res = array();
		$lines = $this->_gamefield->getLines();
		foreach ((array)$lines as $_line)
			foreach ($_line as $_position)
				$res[$_line->getId()][] = $_position->getTop() * $this->_gamefield->getColumnsCount() + $_position->getLeft() + 1;
			
		return $res;
	}
	
	/**
	 * @param int $left
	 * @return bool
	 */
	private function columnHasBonusSymbol($left)
	{
		for ($i = 0; $i < $this->_gamefield->getRowsCount(); $i++)
		{
			if ($this->getSymbol($i, $left)->getId() == $this->_bonus_symbol->getId())
				return true;
		}
		return false;
	}
	
	/**
	 * @return SlotSymbols_Collection
	 */
	public function getSymbols()
	{
		return $this->_symbols;
	}
}