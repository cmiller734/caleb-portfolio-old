<?php 

if (array_key_exists('input_number', $_REQUEST)) //if the array has been created at all, i.e. has input EVER been in the textbox?
{
//-------------------------------------PHP PROCESSING-------------------------------
//first, re-declare variables with new values other than 0. used for state maintenance
	$sum = htmlspecialchars($_REQUEST['sum']);
	$total_count = htmlspecialchars($_REQUEST['total_count']); 
	$even_count = htmlspecialchars($_REQUEST['even_pos_int_count']); 
	$max = htmlspecialchars($_REQUEST['max']);
	$min = htmlspecialchars($_REQUEST['min']);
	$avg = htmlspecialchars($_REQUEST['avg']);
	$even_pos_int_count = htmlspecialchars($_REQUEST['even_pos_int_count']);
	
	if ( !empty ($_REQUEST['input_number']) ) //if the input has a number in it and its not zero
	{
			$unmodified_number = $_REQUEST['input_number'];  
			
//------------------------------------------LOGIC USED FOR NUMBER MANIPULATION---------------------------
			$sum += $unmodified_number; //sum logic
			$total_count++; //count logic
			
			//average logic
			$avg = $sum / $total_count;
			
			//positive even integer count logic
			if ( $unmodified_number % 2 == 0 && $unmodified_number > 0) //if the number produces no remainder
			{															//when divided by two and is positive, 
				$even_pos_int_count++;									//increment the pos_even_int counter		
			}															
			
			//max logic
			if ( $unmodified_number > $max )
			{
				$max = $unmodified_number;
			}
			
			//min logic
			if ( $min == 0 ) //if the min hasn't been set
			{
				$min = $unmodified_number; //set the min to the first number
			}
			else if ( $unmodified_number < $min )
			{
				$min = $unmodified_number;
			}
//-------------------------------------------------END LOGIC---------------------------------------------
			
			include('../../../../include/exercises/number_two_guess/number_two/number_two_input.html.php');
	}
	else
	{
		include('../../../../include/exercises/number_two_guess/number_two/number_two_results.html.php');
	}

}
else
{
//initialize values
	$sum = 0;
	$total_count = 0;
	$even_pos_int_count = 0;
	$avg = 0;
	$min = 0;
	$max = 0;

	include('../../../../include/exercises/number_two_guess/number_two/number_two_input.html.php'); //include the
																										//input form for
																										//the first time
}