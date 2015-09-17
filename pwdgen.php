<?php

	$num_yes = 'unchecked';
	$num_no = 'unchecked';
	$symbol_yes = 'unchecked';
	$symbol_no = 'unchecked';
	$memorable_yes = 'unchecked';
	$memorable_no = 'unchecked';
	$numwords = '';
	$num = '';
	$symbol = '';
	$memorable = '';

	if (isset($_POST['submit'])) {
		
		$numwords = $_POST['numwords'];

		$num = $_POST['num'];
		if ($num == 'yes') {
			$num_yes = 'checked';
		}
		else if ($num == 'no') {
			$num_no = 'checked';
		}

		$symbol = $_POST['symbol'];
		if ($symbol == 'yes') {
			$symbol_yes = 'checked';
		}
		else if ($symbol == 'no') {
			$symbol_no = 'checked';
		}

		$memorable = $_POST['memorable'];
		if ($memorable == 'yes') {
			$memorable_yes = 'checked';
		}
		else if ($memorable == 'no') {
			$memorable_no = 'checked';
		}

		$password_string = '';

		if ($memorable == 'no') {

			for ($i = 0; $i < $numwords; $i++) {
				$password_string = $password_string . $words[rand(0, $words_max)] . ' ';
			}
		}

		else if ($memorable == 'yes') {
			$password_string = $adjectives[rand(0, $adjectives_max)] . ' ' . $nouns[rand(0, $nouns_max)] . ' ' . $verbs[rand(0, $verbs_max)] . ' ' . $adverbs[rand(0, $adverbs_max)];
		}

		
		if ($num == 'yes') {
			$password_string = $password_string . ' ' . rand(0, 9);
		}

		if ($symbol == 'yes') {
			$password_string = $password_string . ' ' . $symbols[rand(0, $symbols_max)];
		}
	}



	
?>