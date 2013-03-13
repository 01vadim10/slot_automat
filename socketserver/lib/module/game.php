<?php

class ModuleGame extends Errors{
	
	/**
	 * @var gameServerClient
	 */
	private   $_client;
	/**
	 * @var SlotSlot
	 */
	private   $_game = null;
	private $_lines_count;
	private $_bet;
	private $_denomination;
//	private $_dual_rate = false;
	private $_won = null;
	private $_bonus_won = null;
	
	public  function __construct(gameServerClient $client)
	{
		$this->_client = $client;
	}
	
	/**
	 * Start new game
	 *
	 * @param array $params = array('id'=>(int))
	 * @return bool
	 * 
	 */
	public function start($params)
	{
		//game already started?
		if($this->_game && $this->_game->getId() == $params['id'])
			return  true;
		
		switch ($params['id'])
		{
			case 1:
				$this->_game = new GameBook_Of_Ra();
			break;
			default:
				$this->_game = null;
			break;
		}
		$balance = 0;
		if ($this->_client->get_user()->getAPI() !== null)
			$balance = $this->_client->get_user()->getAPI()->get_balance();
		$res = array('started'=>$this->_checkGame(), 'balance'=>$balance);
		
		return $res;
	}
	
	/**
	 * Spin slot
	 *
	 * @param array $params = array('bet'=>int, 'denomination'=>float, 'lines'=>int)
	 * @return array | FALSE
	 */
	public function spin($params)
	{
		if(!$this->_checkGame()) return false;
		if ($this->_game->getBonusCount() <= 0)
		{
			$this->_game->setBonusGame(false);
		}
		if (!$this->_game->getIsBonus())
		{
			$this->_lines_count = intval($params['lines']);
			$this->_bet = $params['bet'];
			$this->_denomination = $params['denomination'];
		}
		$lines_count = $this->_lines_count;
		$bet = $this->_bet;
		$denomination = $this->_denomination;
		
		if($this->_game->checkBet($bet, $denomination, $lines_count))
		{
			$bet = new ItemBet($this->_client->get_user()->getAPI(), $this->_game, $denomination, $bet, $lines_count);
			if($bet->save())
			{
				$this->_game->spin($lines_count);
				if(!$bet->won($this->_game->getWins()))
					$this->pushError($bet);
				if ($this->_game->getIsBonus())
					if(!$bet->won($this->_game->getBonusWins(), true))
						$this->pushError($bet);
				
			}
		}

		$this->pushError($bet);
		if(!$this->hasErrors())
		{
			$res = $this->_game->getScreenArray();
			if ($this->_game->getIsBonus())
			{
				$res['bonus_won'] = $bet->getBonusWinningAmount();
				$this->_bonus_won = $res['bonus_won'];
			}
			$res['won'] = $bet->getWinningAmount();
			$this->_won = $res['won'];
			$res['balance'] = $this->_client->get_user()->getAPI()->get_balance();
			return $res;
		}
		return false;
	}
	
	/**
	 * Returns list of lines
	 *
	 * @param array $params
	 * @return array | FALSE
	 */
	public function getLines($params)
	{
		if(!$this->_checkGame()) return false;
		
		return $this->_game->getLinesArray();
	}
	
	/**
	 * @return bool
	 */
	private function _checkGame()
	{
		if($this->_game == null)
		{
			$this->pushError('game_not_found');
			return false;
		}
		return true;
	}
	
	public function getDenominations()
	{
		if(!$this->_checkGame()) return false;
		
		$res = array();
		$res['list'] = $this->_game->getParams()->getDenominations();
		$res['max_bet'] = $this->_game->getParams()->getMaxBet();
		return $res;
	}
	
	 
/*	public function setDualRate($dual_rate = true)
	{
		$this->_dual_rate = $dual_rate;
	}
	*/
	
// Бонус-игра с удвоением выигрыша
// $expectation - количество успешных выигрышей (в процентах)
// $dual_rate_expectation - вероятность выигрыша(ставиться модератором)
	public function DualRateSpin($params)
	{
		$won = $this->_won+$this->_bonus_won; 
		echo 'Won_amount:';
		var_dump($won);
		if ($won > 0)
 		{
 			$res = array();
			$foo = rand(0, 1);
			if ($foo == $params['rate'])
			{
				if ($params['expectation'] <= $params['dual_rate_expectation'])
				{
					$res['dual_rate'] = $won*2;
					return $res['dual_rate'];
				}
				else $this->DualRateSpin($params);
			}
 		}
		return false;
	}
}