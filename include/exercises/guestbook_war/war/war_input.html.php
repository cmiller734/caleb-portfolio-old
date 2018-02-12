<?php include('war_header.html'); ?>
<!--------------------------------------------------------MESSAGES--------------------------------------------------------------------
<!-----------------------------------------------------Primary Message-------------------------------------------------------->
	<p>In this game, the deck is shuffled and divided evenly among two players. 
	A turn consists of each player playing the topmost card of their deck face up. 
	The highest card wins the turn. Suits are ignored, and aces are high. 
	The winner of the turn takes both cards played and adds them to the bottom of her deck. 
	In the case of a tie, each player adds three cards from the top of her deck to the “pot” 
	and then plays the next card from the top of her deck face up as a tie breaker. 
	The winner of the tie breaker takes all cards from the “pot” and adds them to the bottom of her deck. 
	If a tie occurs during a tie-breaker turn, the tie breaking process is simply repeated with each player 
	adding three more cards to the “pot” and using the fourth card as a tie breaker. 
	If a player does not have sufficient cards in their deck to meet the requirements of a tie breaker turn, she loses the game. 
	Likewise, the first player to lose her entire deck loses the game.</p>
	
<!-----------------------------------------------------Secondary Message-------------------------------------------------------->
	<p>You may pick your preferred deck size by entering any even integer between 2 and 52.</p>
	
	<!---------------------------------Display the error message, if there is one------------->
	
	<?php if (isset($error_message))
		{
			echo '<p class="boldtext centeredtext">' . $error_message . '</p>';
		}
	?>
<!-----------------------------------------------------------FORM STUFF----------------------------------->
	<form method="post" action="">
		<p>Deck size:<input type="number" name="input_number" value="52"></p>
		<input type="submit" value="Deal!">
	</form>
</body>

</html>
