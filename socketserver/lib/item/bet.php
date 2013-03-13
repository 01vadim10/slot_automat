<?php

class ItemBet extends Errors{
	
	private $_id = false;
	/**
	 * @var ItemUser
	 */
	private $_user;
	/**
	 * @var int
	 */
	private $_bet;
	/**
	 * @var float
	 */
	private $_denomination;
	/**
	 * @var int
	 */
	private $_lines_count;
	/**
	 * @var SlotSlot
	 */
	private $_game;
	/**
	 * @var float
	 */
	private $_won;
	/**
	 * @var float
	 */
	private $_bonus_won;
	
	
	public function __construct(ItemUser $user, SlotSlot $game, $denomination, $bet, $lines_count)
	{
		$this->_user = $user;
		$this->_denomination = number_format($denomination, 2, '.', '');
		$this->_bet = intval($bet);
		$this->_lines_count = intval($lines_count);
		$this->_game = $game;
	}
	
	public function save()
	{
		if($this->_game->getIsBonus() || $this->_user->pay(-($this->_bet *$this->_denomination * $this->_lines_count)))
		{
			$this->_id = MySQLDBase::$instance->Insert(array('table'=>TBL_BETS,
												'fields'=>array(
																'user_id'=>$this->_user->get_id(),
																'game_id'=>$this->_game->getId(),
																'denomination'=>mysql_real_escape_string($this->_denomination),
																'bet'=>mysql_real_escape_string($this->_bet),
																'lines_count'=>mysql_real_escape_string($this->_lines_count),
																'free'=>($this->_game->getIsBonus() ? '1' : '0')
																),
												)
										);
		}else{
			$this->pushError($this->_user);
		}
		return $this->_id;
	}
	
	public function won($win_lines, $bonus = false)
	{
		$won = 0;
		if (!$bonus)
			$this->_won = 0;
		$this->_bonus_won = 0;
		foreach ($win_lines as $line)
		{
			foreach ($line as $combination)
			{
				$won += $this->_bet * $this->_denomination * $combination->multy;
			}
		}
		
		if ($this->_game->getIsBonus())
			echo '<br>Bonus_WON<br>';
		echo '<pre>';
		echo 'WON:';
		var_dump($won);
		echo '</pre>';
		
		if(!MySQLDBase::$instance->Update(array('table'=>TBL_BETS,
											'fields'=>array('won'=>$won),
											'match'=>array('id'=>$this->_id))))
			return false;
		if($won)
		{
			if ($bonus)
			{
				$this->_bonus_won = $won;
				return $this->_user->pay($won);
			}
			$this->_won = $won;
			return $this->_user->pay($won);
		}

		return true;
	}
	
	/**
	 * @return float
	 */
	public function getWinningAmount()
	{
		return $this->_won;
	}
	
	/**
	 * @return float
	 */
	public function getBonusWinningAmount()
	{
		return $this->_bonus_won;
	}
	
	public function collect()
	{
		
	}
}