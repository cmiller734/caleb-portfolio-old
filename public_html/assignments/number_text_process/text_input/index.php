<?php

if ( !empty ( $_POST['text_form'] ) )
{
	$unmodified_text = $_POST['text_form'];
	$stripped_punc_text;
	$capped_stripped_punc_text;
	$capped_all_stripped_text;

//------------------------------------------------------FUNCTIONS-------------------------------------------------------------

//------------------------------------This function has two functions: to convert input strings to lowercase
//------------------------------------and to capitalize the first letter of every word. Step 1
function cap_uncap( $string )
{
	$sanitized_string;
	$proper_cap_word; //carries all the properly capped/uncapped text
	$uncapped_word; //carries the uncapped text

	$uncapped_word = strtolower( $string );
	$proper_cap_word = ucwords( $uncapped_word );
	
	return $proper_cap_word;
}

//Now that the word has been capped, it is time to strip the punctuation from the word. Step 2
//After completing steps 1 and 2, line 2 can be printed. thus use the return value of this function for line 2

function strip_punc( $string )
{
	static $text_array_no_punc;
	$char_array = str_split($string); //convert the text into an array - every character is in the array
	$char_array_count = count($char_array); //number of characters in the new array
	for ( $i = 0; $i < $char_array_count; $i++ )
	{
		$current_char = $char_array[$i];
		if ( ctype_alnum( $current_char ) || $current_char == ' '  )
		{
			$text_array_no_punc .= $current_char;
		}
	}
	return $text_array_no_punc;
}


//Finally, to complete step 3, define a function that can strip spaces out.

function strip_spaces( $string )
{
	static $text_array_no_space;
	$char_array = str_split($string); //convert the text into an array - every character is in the array
	$char_array_count = count($char_array); //number of characters in the new array
	for ( $i = 0; $i < $char_array_count; $i++ )
	{
		$current_char = $char_array[$i];
		if ( $current_char != ' ' )
		{
			$text_array_no_space .= $current_char;
		}
	}
	return $text_array_no_space;
}

//We need one more function - a function that defines whether lines should be stripped out.

function display_lines( $string, $strip_space = false)
{
	$stripped_punc_text = strip_punc( $string );
	$capped_stripped_punc_text = cap_uncap( $stripped_punc_text );
	$capped_all_stripped_text = strip_spaces( $capped_stripped_punc_text ); //spaced stripped out
	
	if ( $strip_space == true )
	{
		return $capped_all_stripped_text . "<br>" . $capped_all_stripped_text;
	}
	else
	{
		return $capped_stripped_punc_text . "<br>" . $capped_all_stripped_text;
	}
}

include '../../../../include/exercises/number_text_process/text_input/text_results.html.php';
	
}

else
{
include '../../../../include/exercises/number_text_process/text_input/text_input.html.php';
}