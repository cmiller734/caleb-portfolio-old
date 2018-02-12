<?php
//--------------------------------------CONTROLLER FOR GUESSING GAME APP-----------------------------------------------

if ( !empty ( $_POST['palindrome'] ) )
{
	//----------------------------------------NECESSARY UTILITY FUNCTIONS-----------------

	function strip_punc($string)
	{
		static $no_punc = '';
		$strlen = strlen($string);
		for ($i = 0; $i <= $strlen; $i++)
		{
			if (ctype_alnum($i) || ctype_space($i))
			{
				$no_punc .= $i;
			}
		}
		return $no_punc;
	}

	//-------------------------------------VARIABLES-------------------------
	$unmodified_text = $_POST['palindrome'];
	
	

	
	//---these variables make simple modifications to the submitted text
	$unmodified_text_lower = strtolower($unmodified_text); //use in functions
	$reversed_string_lower = strrev($unmodified_text_lower);
		//strip spaces
	$stripped_spaces_lower = str_replace(' ', '', $unmodified_text_lower);
	$stripped_spaces_reversed_lower = str_replace(' ', '', $reversed_string_lower);
		//strip spaces & punc
	$stripped_spaces_punc_lower = strip_punc($stripped_spaces_lower);
	$stripped_spaces_punc_reversed_lower = strip_punc($stripped_spaces_reversed_lower);
		
	//----once a string is confirmed to be a certain type, it is stored for later re-use
	
	$phrase_palindrome;
	$phrase_palindrome_spaces_ignored;
	$phrase_palindrome_spaces_punc_ignored;
	
	//result booleans. Assume all false initially
	$one_word_palindrome_result = false;
	$phrase_palindrome_result = false;
	$space_ignore_result = false;
	
//---------------------------1. ONE WORD PALINDROME CHECK----------------------------
	function check_reverse($string, $check_string)
	{
		if ($string == $check_string) //if the word is the same when reversed
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	$one_word_palindrome_result = check_reverse($unmodified_text_lower, $reversed_string_lower);
	
	//set result string
	if ($one_word_palindrome_result)
	{
		$line1 = "The string is a pure palindrome! <br>";
	}
	else
	{
		$line1 = "The string is NOT a pure palindrome! <br>";
	}
//----------------------------------------------------------------------------------------------------------------------
	
//---------------------------------2. CHECK FOR ONE WORD PALINDROME OR NOT------------------------------
	function check_one_word_palindrome($string, $pure_palindrome_check)
	{
		if ($pure_palindrome_check)
		{
			if (!strpos($string, ' ' )) //must meet two conditions to be met: be a pure palindrome & have spaces
			{
				return true;
			}
		}
		else //if it's not a pure palindrome, it can't be any other type of palindrome
		{
			return false;
		}
	}
	
	$phrase_palindrome_result=check_one_word_palindrome($unmodified_text_lower, $one_word_palindrome_result);
	
	//set result string
	if ($phrase_palindrome_result)
	{
		$line2 = "This string is a one word palindrome! <br>";
	}
	else
	{
		$line2 = "The string is NOT a one word palindrome! <br>";
	}
//-------------------------------------------------------------------------------------------------------------------
	
//---------------------------CHECK FOR PALINDROME WHEN SPACES IGNORED------------
	function check_phrase_spaces_ignored($string, $check_string)
	{
			if ($string == $check_string) //must meet two conditions to be met: be a pure palindrome & have spaces
			{
				return true;
			}
	}
	
	$space_ignore_result = check_phrase_spaces_ignored($stripped_spaces_lower, $stripped_spaces_reversed_lower);
	
	//set result string
	if ($space_ignore_result)
	{
		$line3 = "This string is a palindrome when spaces are ignored! <br>";
	}
	else
	{
		$line3 = "The string is NOT a palindrome when spaces are ignored! <br>";
	}
//-------------------------------------------------------------------------------------------------------------------

//---------------------------4. CHECK FOR PALINDROME WHEN SPACES & PUNCTUATION REMOVED------------
	
	$strip_punc_string = strip_punc($stripped_spaces_lower);
	
	function check_phrase_spaces_punc_ignored($string, $check_string)
	{
			if ($string == $check_string) //must meet two conditions to be met: be a pure palindrome & have spaces
			{
				return true;
			}
	}
	
	$space_ignore_result = check_phrase_spaces_punc_ignored($stripped_spaces_punc_lower, $stripped_spaces_punc_reversed_lower);

	//set result string
	if ($space_ignore_result)
	{
		$line4 = "This string is a palindrome when spaces and punctuation are ignored! <br>";
	}
	else
	{
		$line4 = "The string is NOT a palindrome when spaces and punctuation are ignored! <br>";
	}
//-------------------------------------------------------------------------------------------------------------------
	
		
	include '../../../../include/exercises/form_palindrome/palindrome/palindrome_results.html.php';
}
else
{
	include '../../../../include/exercises/form_palindrome/palindrome/palindrome_input.html.php';
}

?>