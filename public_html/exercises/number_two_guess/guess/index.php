<?php
//------------------------------------------------GUESSING GAME PROCESSING-------------------------------------------------

//------------------------------------------------FUNCTIONS-----------------------------------------------------

//------------------------------------function to define high and low ranges of given number
function within_range($input_number, $number_to_guess, $range)
{
	$low_range_number = $number_to_guess - $range;
	$high_range_number = $number_to_guess + $range;
	
	if ($input_number >= $low_range_number && $input_number <= $high_range_number)
	{
		return true;
	}
	else
	{
		return false;
	}
}

//----------------------------------------function to calculate strings-----------
function return_string($string, $number, $string2)
{
	return "You are getting " . $string . "! You have " . (4 - $number) . " guesses remaining. Guess a " . $string2 . " number!";
}

//-----------------------------------------------PROCESSING-----------------------------
if (array_key_exists('input_number', $_REQUEST))//if the array has been created at all, i.e. has input EVER been in the textbox?
{
//re-declare variables with new values other than 0. used for state maintenance
	$number_to_guess = htmlspecialchars($_REQUEST['number_to_guess']);
	$chance_number = htmlspecialchars($_REQUEST['chance_number']);
	$display_message = htmlspecialchars($_REQUEST['display_message']);
	$final_message = htmlspecialchars($_REQUEST['final_message']);
	$higher_lower_string='';
	
	if ( !empty ( $_REQUEST['input_number'] ) ) //if the input has a number in it and its not zero
	{
		$unmodified_number = htmlspecialchars($_REQUEST['input_number']);
		
		//-------------------------------LOGIC USED FOR GUESSES
		if ( $unmodified_number == $number_to_guess )
		{
			$final_message="You win! Congratulations!";
			include('../../../../include/exercises/number_two_guess/guess/guess_results.html.php');//display results
		}
		else if ($unmodified_number < 0 || $unmodified_number > 50) //covers numbers less than 0 or over 50
		{
			$display_message="Please enter a number between 1 and 50!";
			include('../../../../include/exercises/number_two_guess/guess/guess_input.html.php'); 
		} 
		else if (within_range($unmodified_number, $number_to_guess, 5)) //check for hot, warm, etc.
		{
			if ( $unmodified_number > $number_to_guess )
			{
				$higher_lower_string = "lower";
			}
			else
			{
				$higher_lower_string = "higher";
			}
			
			$display_message=return_string('hot', $chance_number, $higher_lower_string); 
			$chance_number++; //increment the counter
			//check for game over
			if ($chance_number != 5)
			{
				include('../../../../include/exercises/number_two_guess/guess/guess_input.html.php');
			}
			else
			{
				$final_message = "You lose! Sorry!";
				include('../../../../include/exercises/number_two_guess/guess/guess_results.html.php');//display results
			}
		}
		else if (within_range($unmodified_number, $number_to_guess, 10)) 
		{
			if ( $unmodified_number > $number_to_guess )
			{
				$higher_lower_string = "lower";
			}
			else
			{
				$higher_lower_string = "higher";
			}
			$display_message=return_string('warm', $chance_number, $higher_lower_string);
			$chance_number++; //increment the counter
			//check for game over
			if ($chance_number != 5)
			{
				include('../../../../include/exercises/number_two_guess/guess/guess_input.html.php');
			}
			else
			{
				$final_message = "You lose! Sorry!";
				include('../../../../include/exercises/number_two_guess/guess/guess_results.html.php');//display results
			}
			
		} 
		else if (within_range($unmodified_number, $number_to_guess, 15)) 
		{
			if ( $unmodified_number > $number_to_guess )
			{
				$higher_lower_string = "lower";
			}
			else
			{
				$higher_lower_string = "higher";
			}
			$display_message=return_string('cool', $chance_number, $higher_lower_string);
			$chance_number++; //increment the counter
			//check for game over
			if ($chance_number != 5)
			{
				include('../../../../include/exercises/number_two_guess/guess/guess_input.html.php');
			}
			else
			{
				$final_message = "You lose! Sorry!";
				include('../../../../include/exercises/number_two_guess/guess/guess_results.html.php');//display results
			}
		}
		else 
		{
			if ( $unmodified_number > $number_to_guess )
			{
				$higher_lower_string = "lower";
			}
			else
			{
				$higher_lower_string = "higher";
			}
			$display_message=return_string('cool', $chance_number, $higher_lower_string);
			$display_message="You are totally cold. You have " . (4 - $chance_number) . " guesses remaining. Guess a " . $higher_lower_string . " number!";
			$chance_number++; //increment the counter
			if ($chance_number != 5)
			{
				include('../../../../include/exercises/number_two_guess/guess/guess_input.html.php');
			}
			else
			{
				$final_message = "You lose! Sorry! Thanks for playing.";
				include('../../../../include/exercises/number_two_guess/guess/guess_results.html.php');//display results
			}
		} 
		
	}
	else //covers 0 or empty submission box
	{
		$display_message="Please input a positive integer between 1 and 50";
		include('../../../../include/exercises/number_two_guess/guess/guess_input.html.php');
	}
}
else
{
//----------------------------------------------initialize concepts-----------------------------------
//------------------------for setting guess range: only needs to be done once so do it here-----------
	$chance_number = 0;
	$chances_left = 5;
	$min_guess = 1;
	$max_guess = 50;
	$number_to_guess = rand( $min_guess, $max_guess );
	
//win lose strings----------
	$display_message='';
	$lose='You lose! Sorry!';
	$win='You win! Congratulations!';
	$final_message='';
	
	include('../../../../include/exercises/number_two_guess/guess/guess_input.html.php'); //include the
																							//input form for
																							//the first time
}