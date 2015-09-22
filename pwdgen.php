<?php

	$num_yes = '';
	$num_no = '';
	$symbol_yes = '';
	$symbol_no = '';
	$memorable = '';
	$separator_space = '';
	$separator_dash = '';
	$separator_dot = '';
	$separator_none = '';
	$separator_random = '';
	$separators = [' ', '-', '.', ''];
	$dino = '';
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

		$separator = $_POST['separator'];
		if ($separator == 'space') {
			$separator_space = 'checked';
			$separator = $separators[0];
		}
		else if ($separator == 'dash') {
			$separator_dash = 'checked';
			$separator = $separators[1];
		}
		else if ($separator == 'dot') {
			$separator_space = 'checked';
			$separator = $separators[2];
		}
		else if ($separator == 'none') {
			$separator_none = 'checked';
			$separator = $separators[3];
		} 
		else if ($separator == 'random') {
			$separator_random = 'checked';
			$separator = $separators[rand(0, (count($separators) - 1))];
		}

		$password_string = '';

		if ($fancy == 'memorable') {
			$password_string = $adjectives[rand(0, $adjectives_max)] . $separator . $nouns[rand(0, $nouns_max)] . $separator . $verbs[rand(0, $verbs_max)] . $separator . $adverbs[rand(0, $adverbs_max)];
		}
		else if ($fancy == 'dino') {
			$dino_place = rand(0, ($numwords - 1));

			for ($i = 0; $i < $numwords; $i++) {
				if ($i == $dino_place) {
					$password_string = $password_string . strtoupper($dinos[rand(0, $dinos_max)]) . $separator;
				} else {
					$password_string = $password_string . strtolower($words[rand(0, $dinos_max)])  . $separator;
				}
				
			}
			
		}
		else {
			for ($i = 0; $i < $numwords; $i++) {
				$password_string = $password_string . $words[rand(0, $words_max)] . $separator;
				$password_string = strtolower($password_string);
			}
		}

		if ($num == 'yes') {
			$password_string = $password_string . rand(0, 9);
		}

		if ($symbol == 'yes') {
			$password_string = $password_string . $symbols[rand(0, $symbols_max)];
		}
	}
	
?>