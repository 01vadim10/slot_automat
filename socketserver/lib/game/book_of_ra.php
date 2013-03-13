<?php

class GameBook_Of_Ra extends SlotSlot
{
	const SYMBOL_ID_10_SIGN = 1;
	const SYMBOL_ID_J_SIGN = 2;
	const SYMBOL_ID_Q_SIGN = 3;
	const SYMBOL_ID_K_SIGN = 4;
	const SYMBOL_ID_A_SIGN = 5;
	const SYMBOL_ID_SCARABEY = 6;
	const SYMBOL_ID_SCULPTURE = 7;
	const SYMBOL_ID_PHARAON = 8;
	const SYMBOL_ID_MEN = 9;
	const SYMBOL_ID_BOOK = 10;
	
	private $_position;
	private $_gamefield;
	private $_lines;
	private $_smb;
	private $_symbols;
	private $_count;
	private $_name;
	
	
	public function __construct()
	{
		$symbols_collection = new SlotSymbols_Collection();
		$game_field = new SlotGamefield(3, 5);
		
		$symbol = new SlotSymbol(self::SYMBOL_ID_BOOK, true);
		$symbol->addCombination(new SlotCombination($symbol->id, 3, 20, 1));
		$symbol->addCombination(new SlotCombination($symbol->id, 4, 200));
		$symbol->addCombination(new SlotCombination($symbol->id, 5, 2000));
		$symbols_collection->push($symbol);
		$symbol = new SlotSymbol(self::SYMBOL_ID_MEN);
		$symbol->addCombination(new SlotCombination($symbol->id, 2, 10));
		$symbol->addCombination(new SlotCombination($symbol->id, 3, 100));
		$symbol->addCombination(new SlotCombination($symbol->id, 4, 1000));
		$symbol->addCombination(new SlotCombination($symbol->id, 5, 5000));
		$symbols_collection->push($symbol);
		$symbol = new SlotSymbol(self::SYMBOL_ID_SCULPTURE);
		$symbol->addCombination(new SlotCombination($symbol->id, 2, 5));
		$symbol->addCombination(new SlotCombination($symbol->id, 3, 30));
		$symbol->addCombination(new SlotCombination($symbol->id, 4, 100));
		$symbol->addCombination(new SlotCombination($symbol->id, 5, 750));
		$symbols_collection->push($symbol);
		$symbol = new SlotSymbol(self::SYMBOL_ID_PHARAON);
		$symbol->addCombination(new SlotCombination($symbol->id, 2, 5));
		$symbol->addCombination(new SlotCombination($symbol->id, 3, 30));
		$symbol->addCombination(new SlotCombination($symbol->id, 4, 100));
		$symbol->addCombination(new SlotCombination($symbol->id, 5, 750));
		$symbols_collection->push($symbol);
		$symbol = new SlotSymbol(self::SYMBOL_ID_SCARABEY);
		$symbol->addCombination(new SlotCombination($symbol->id, 2, 5));
		$symbol->addCombination(new SlotCombination($symbol->id, 3, 30));
		$symbol->addCombination(new SlotCombination($symbol->id, 4, 100));
		$symbol->addCombination(new SlotCombination($symbol->id, 5, 750));
		$symbols_collection->push($symbol);
		$symbol = new SlotSymbol(self::SYMBOL_ID_A_SIGN);
		$symbol->addCombination(new SlotCombination($symbol->id, 3, 5));
		$symbol->addCombination(new SlotCombination($symbol->id, 4, 40));
		$symbol->addCombination(new SlotCombination($symbol->id, 5, 150));
		$symbols_collection->push($symbol);
		$symbol = new SlotSymbol(self::SYMBOL_ID_K_SIGN);
		$symbol->addCombination(new SlotCombination($symbol->id, 3, 5));
		$symbol->addCombination(new SlotCombination($symbol->id, 4, 40));
		$symbol->addCombination(new SlotCombination($symbol->id, 5, 150));
		$symbols_collection->push($symbol);
		$symbol = new SlotSymbol(self::SYMBOL_ID_10_SIGN);
		$symbol->addCombination(new SlotCombination($symbol->id, 3, 5));
		$symbol->addCombination(new SlotCombination($symbol->id, 4, 25));
		$symbol->addCombination(new SlotCombination($symbol->id, 5, 100));
		$symbols_collection->push($symbol);
		$symbol = new SlotSymbol(self::SYMBOL_ID_Q_SIGN);
		$symbol->addCombination(new SlotCombination($symbol->id, 3, 5));
		$symbol->addCombination(new SlotCombination($symbol->id, 4, 25));
		$symbol->addCombination(new SlotCombination($symbol->id, 5, 100));
		$symbols_collection->push($symbol);
		$symbol = new SlotSymbol(self::SYMBOL_ID_J_SIGN);
		$symbol->addCombination(new SlotCombination($symbol->id, 3, 5));
		$symbol->addCombination(new SlotCombination($symbol->id, 4, 25));
		$symbol->addCombination(new SlotCombination($symbol->id, 5, 100));
		$symbols_collection->push($symbol);
		
		
		
		
		//Lines
		$line = new SlotLine(1);
		$line->push(new SlotPosition(1, 0));
		$line->push(new SlotPosition(1, 1));
		$line->push(new SlotPosition(1, 2));
		$line->push(new SlotPosition(1, 3));
		$line->push(new SlotPosition(1, 4));
		$game_field->push($line);
		$line = new SlotLine(2);
		$line->push(new SlotPosition(0, 0));
		$line->push(new SlotPosition(0, 1));
		$line->push(new SlotPosition(0, 2));
		$line->push(new SlotPosition(0, 3));
		$line->push(new SlotPosition(0, 4));
		$game_field->push($line);
		$line = new SlotLine(3);
		$line->push(new SlotPosition(2, 0));
		$line->push(new SlotPosition(2, 1));
		$line->push(new SlotPosition(2, 2));
		$line->push(new SlotPosition(2, 3));
		$line->push(new SlotPosition(2, 4));
		$game_field->push($line);
		$line = new SlotLine(4);
		$line->push(new SlotPosition(0, 0));
		$line->push(new SlotPosition(1, 1));
		$line->push(new SlotPosition(2, 2));
		$line->push(new SlotPosition(1, 3));
		$line->push(new SlotPosition(0, 4));
		$game_field->push($line);
		$line = new SlotLine(5);
		$line->push(new SlotPosition(2, 0));
		$line->push(new SlotPosition(1, 1));
		$line->push(new SlotPosition(0, 2));
		$line->push(new SlotPosition(1, 3));
		$line->push(new SlotPosition(2, 4));
		$game_field->push($line);
		$line = new SlotLine(6);
		$line->push(new SlotPosition(1, 0));
		$line->push(new SlotPosition(2, 1));
		$line->push(new SlotPosition(2, 2));
		$line->push(new SlotPosition(2, 3));
		$line->push(new SlotPosition(1, 4));
		$game_field->push($line);
		$line = new SlotLine(7);
		$line->push(new SlotPosition(1, 0));
		$line->push(new SlotPosition(0, 1));
		$line->push(new SlotPosition(0, 2));
		$line->push(new SlotPosition(0, 3));
		$line->push(new SlotPosition(1, 4));
		$game_field->push($line);
		$line = new SlotLine(8);
		$line->push(new SlotPosition(2, 0));
		$line->push(new SlotPosition(2, 1));
		$line->push(new SlotPosition(1, 2));
		$line->push(new SlotPosition(0, 3));
		$line->push(new SlotPosition(0, 4));
		$game_field->push($line);
		$line = new SlotLine(9);
		$line->push(new SlotPosition(0, 0));
		$line->push(new SlotPosition(0, 1));
		$line->push(new SlotPosition(1, 2));
		$line->push(new SlotPosition(2, 3));
		$line->push(new SlotPosition(2, 4));
		$game_field->push($line);
		$line = new SlotLine(10);
		$line->push(new SlotPosition(2, 0));
		$line->push(new SlotPosition(1, 1));
		$line->push(new SlotPosition(1, 2));
		$line->push(new SlotPosition(1, 3));
		$line->push(new SlotPosition(0, 4));
		$game_field->push($line);
		
		parent::__construct(1, $game_field, $symbols_collection);
		
		//Params
		$this->getParams()->setMaxBet(5);
		$this->getParams()->setFreeGamesCount(10);
	}
	
	/*public function createPos($name, $top, $left)
	{
		$this->_id[$name]->_position = new SlotPosition($top, $left);
	}
	
	public function createLine($position)
	{
		$this->_lines = new SlotLine();
		$this->_lines->push($position);
	}

	public function createGamefield($lines)
	{
		$this->_gamefield = new SlotGamefield();
		$this->_gamefield->push($lines);
	}
	
	public function createSymbol($name)
	{
		$this->_name = $name;
		$this->_id[$name] = $this->_count++;
		$this->_smb = new SlotSymbol($this->_id);
	}
	
	public function SlotSymbols_Collection($symbol)
	{
		$this->_symbols = new SlotSymbols_Collection();
		$this->_symbols->push($symbol);
	}*/
}