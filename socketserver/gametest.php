<?php
	error_reporting(E_ALL);
	
	require_once(realpath(dirname(__FILE__).DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR.'conf'.DIRECTORY_SEPARATOR.'includes.php');
	
	new MySQLDBase(MYSQLHOST.':'.MYSQLPORT, MYSQLUSER, MYSQLPASSWORD, MYSQLDBASE);
	
	function getShuffWin($shuffled)
	{
		echo '<br />';
		echo '<table border = "1">';
		echo '<tr>Shuffled Combinations:</tr>';
		foreach ($shuffled as $line)
		{
			echo '<tr>';
			foreach ($line as $column)
				echo '<td>'.$column->getId().'<br />'.implode(',', $column->getHighlight()).'</td>';
			echo '</tr>';
		}
		echo '</table><br />';
	}
	
	$game = new GameBook_Of_Ra();
	$result = $game->spin(5);
	$shuffled = $game->getShuffled();
	$win_lines = $game->getScreenArray();
	getShuffWin($shuffled);
		
		echo '<pre>';
//		var_dump($result->tries);
		var_dump($result);
		echo '</pre>';
?>