<?php

	$num_yes = 'unchecked';
	$num_no = 'unchecked';
	$symbol_yes = 'unchecked';
	$symbol_no = 'unchecked';
	$num = '';
	$symbol = '';
	$numwords = '';

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

		$new_password = 'hah';


	}



	
?>