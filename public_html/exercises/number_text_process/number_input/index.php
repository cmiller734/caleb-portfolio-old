<?php

if ( !empty ( $_POST['number'] ) )
{
//------------------------------------------------PHP PROCESSING------------------

//most of the variables you'll need
$sum = 0; //calculate sum
$even_count = 0; //even number count
$total_count = 0; //used for calculating the total # of input numbers & seeing whether at least 1 number input
$avg = 0; //stores average
$min = 0; //stores min non-null value
$max = 0; //stores max non-null value
$unique_number_count = 0; //count of unique numbers - bc if its all 1's there will be no min or max

//arrays
$unmodified_number = $_POST['number']; //array of non-unique numbers
$unique_number = array_unique( $number ); //array of unique numbers

foreach ($unmodified_number as $val) //go thru each element in the array of numbers
{
	if ( null !== $val && $val != 0 ) //if the field is filled in and is NOT zero
	{
		$sum += $val; //processing the sum of the numbers
		$total_count++; //if the value isn't null or 0, add 1 to the total count to return the total count
		if ($total_count != 0)
		{
			$r = array_diff($unmodified_number, array( null ) ); //filter nulls
			$min = min($r); //min number //RIGHT NOW MIN GETS SET TO NULL HERE
			$max = max($r); //max number
		}
		if ($val % 2 == 0 && $val > 0) //if the number is divisible by 2, it is even. add 1 to the count
		{
			$even_count++;
		}
	}
}

$unique_number_count = count( $unique_number );

if ($total_count != 0)
$avg = $sum / $total_count;

//-------------------------------------------------------OUTPUT-----------------------------------------------

	$stringDefault = '<p>the sum of the numbers is ' . $sum . '</br> 
		the count of the numbers is ' . $total_count . '</br>
		the average of the numbers is ' . $avg . '</br>
		the count of positive even integers is ' . $even_count . '</br>';
	$stringMaxMin = 'the maximum of the numbers is ' . $max . '</br>
		the minimum of the numbers is ' . $min . '</p>';	
	$stringOneValue = 'there is no maximum number - there is only 1 UNIQUE number!</br> 
	there is no minimum number - there is only 1 UNIQUE number!</p>';
	
	$stringManyNum = $stringDefault . $stringMaxMin;
	$stringOneNum = $stringDefault . $stringOneValue;

	include '../../../../include/exercises/number_text_process/number_input/number_results.html.php';
}

else
{
	include '../../../../include/exercises/number_text_process/number_input/number_input.html.php';
}