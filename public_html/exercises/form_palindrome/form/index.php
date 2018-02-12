<?php

if ( !empty ($_REQUEST['name'] ) ) //display the get form
{
	//-------------------------------------PHP Processing-----------------------

	$array = htmlspecialchars($_REQUEST);

	include "../../../../include/exercises/form_palindrome/form/university_survey_get_results.html.php";
}
else if ( !empty ($_REQUEST['enjoy']) ) //display the post form
{
	$array = htmlspecialchars($_REQUEST);
	
	include "../../../../include/exercises/form_palindrome/form/university_survey_get_results.html.php";
}
else //forms page
{
	include "../../../../include/exercises/form_palindrome/form/university_survey_get_input.html.php";
}