<?php

class SlotParams{
	
	/**
	 * @var array
	 */
	private $_list = null;
	/**
	 * @var SlotSlot
	 */
	private $_game = null;
	/**
	 * @var int
	 */
	private $_max_bet = 5;
	/**
	 * @var int
	 */
	private $_free_games_count = 10;
	
	public function __construct(SlotSlot $game)
	{
		$this->_game = $game;
	}
	
	public function getDenominations()
	{
		if ($this->_list === null)
		{
			$this->_list = array();
			$result = MySQLDBase::$instance->Select('`value` FROM `'.TBL_PARAM_NAMES.'` WHERE `game_id` = \''.$this->_game->getId().'\' AND `denomination` = \'1\' ORDER BY `value`', 'value');
			if(is_array($result))
				$this->_list = array_keys($result);
		}
		return $this->_list;
	}
	public function getMaxBet()
	{
		return $this->_max_bet;
	}
	
	public function setMaxBet($bet)
	{
		$this->_max_bet = intval($bet);
	}
	
	/**
	 * @return int
	 */
	public function getFreeGamesCount()
	{
		return $this->_free_games_count;
	}
	/**
	 * @param int $count
	 */
	public function setFreeGamesCount($count)
	{
		$this->_free_games_count = intval($count);
	}
}