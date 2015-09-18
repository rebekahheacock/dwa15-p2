<?php

	$num_yes = 'unchecked';
	$num_no = 'unchecked';
	$symbol_yes = 'unchecked';
	$symbol_no = 'unchecked';
	$memorable = 'unchecked';
	$dino = 'unchecked';
	$numwords = '';
	$num = '';
	$symbol = '';
	$fancy = '';

	if (isset($_POST['submit'])) {
		
		if (isset($_POST['fancy'])) {
			
			$fancy = $_POST['fancy'];
			
			if ($fancy == 'memorable') {
				$memorable = 'checked';
			}
			else if ($fancy == 'dino') {
				$dino = 'checked';
			}
		}

		if (isset($_POST['numwords'])) {
			$numwords = $_POST['numwords'];
		}
		
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

		$password_string = '';

		if ($fancy == 'memorable') {
			$password_string = $adjectives[rand(0, $adjectives_max)] . ' ' . $nouns[rand(0, $nouns_max)] . ' ' . $verbs[rand(0, $verbs_max)] . ' ' . $adverbs[rand(0, $adverbs_max)];
		}
		else if ($fancy == 'dino') {
			$dino_place = rand(0, ($numwords - 1));

			for ($i = 0; $i < $numwords; $i++) {
				if ($i == $dino_place) {
					$password_string = $password_string . $dinos[rand(0, $dinos_max)] . ' ';
				} else {
					$password_string = $password_string . $words[rand(0, $dinos_max)]  . ' ';
				}
				
			}
			
		}
		else {
			for ($i = 0; $i < $numwords; $i++) {
				$password_string = $password_string . $words[rand(0, $words_max)] . ' ';
			}
		}

		if ($num == 'yes') {
			$password_string = $password_string . ' ' . rand(0, 9);
		}

		if ($symbol == 'yes') {
			$password_string = $password_string . ' ' . $symbols[rand(0, $symbols_max)];
		}
	}
	
?>