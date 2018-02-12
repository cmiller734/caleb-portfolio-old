<?php
//--------------------------------------------------------WAR GAME PROCESSING------------------------------------------------
global $player_deck;
global $computer_deck;
//-------------------------------------------------------FUNCTIONS--------------------------------------------------------------------
function test_array($array) //for development purposes
{
	foreach ($array as $val)
	{
		echo $val . "<br>";
	}
}

//--------------------------------------------------------GAME PROCESSING----------------------------------------------------
if (!empty($_REQUEST['start_game_button'])) //we don't need to use this. We just need to see whether that button was pressed
{
	$player_card = array_rand($player_deck);
	$computer_card = array_rand($computer_deck);
}

//--------------------------------------------------------PREGAME INPUT VALIDATION------------------------------------------------------------
else if (!empty($_REQUEST['input_number']))
{
	$unmodified_number = $_REQUEST['input_number'];
	if ($unmodified_number<2 || $unmodified_number>52)
	{
		$error_message = "Please input a value between 2 and 52!";
		include('../../../../include/exercises/guestbook_war/war/war_input.html.php');
	}
//---------------------------------------------------------PREGAME PROCESSING------------------------------------------------------------
	else
	{
	//------------------------------------------------Array Definition----------------------------------------------------
	$clubs_array=array('1c','2c','3c','4c','5c','6c','7c','8c','9c','tc','jc','qc','kc','ac');
	$diamonds_array=array('1d','2d','3d','4d','5d','6d','7d','8d','9d','td','jd','qd','kd','ad');
	$hearts_array=array('1h','2h','3h','4h','5h','6h','7h','8h','9h','th','jh','qh','kh','ah');
	$spades_array=array('1s','2s','3s','4s','5s','6s','7s','8s','9s','ts','js','qs','ks','as');
	$complete_deck_array = array_merge($clubs_array, $diamonds_array, $spades_array, $hearts_array);	
	//-------------------------------------------------Array Manipulation--------------------------------------------------------
	$complete_deck_array_no_suit = str_replace( str_split('cdhs'), '', $complete_deck_array ); //strip suits
	shuffle($complete_deck_array_no_suit); //shuffle
	$user_deck_array = array_slice($complete_deck_array_no_suit, 1, $unmodified_number); //"give" the deck of the specified size out
	$player_deck = array_slice($user_deck_array, 0, (count($user_deck_array) / 2)); //player1 deck
	$computer_deck = array_slice($user_deck_array, count($user_deck_array)/2); //player2 deck
	}					
	include('../../../../include/exercises/guestbook_war/war/war_pregame.html.php');	
}
//----------------------------------------------------------FIRST TIME DISPLAY--------------------------------------------------------
else
{
	include('../../../../include/exercises/guestbook_war/war/war_input.html.php');	
}
?>