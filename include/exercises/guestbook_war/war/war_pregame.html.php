<?php include('war_header.html'); ?>

<!--------------------------------------------------------MESSAGES------------------------------------------------------------>
<!-----------------------------------------------------Primary Message-------------------------------------------------------->
	<p>The deck has been shuffled and dealt, to take your first turn, press the Go! button.</p>

<!-----------------------------------------------------Secondary Message------------------------------------------------------>
	<p>The computer has  <?php echo sizeof($player_deck)?> cards.</p>
	
	<p>You have <?php echo sizeof($computer_deck)?> cards.</p>
	
	<form method="post">
		<input type="submit" name="start_game_button" value="Go!">
	</form>
</body>
</html>