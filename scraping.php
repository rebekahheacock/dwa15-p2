<?php

	function scrape($json_file, $word_type) {
		$rawdata = file_get_contents($json_file);
		$object = json_decode($rawdata, true);
		return $object[$word_type];
	}

	$nouns = scrape('words/nouns.json', 'nouns');
	$adverbs = scrape('words/adverbs.json', 'adverbs');
	$adjectives = scrape('words/adjs.json', 'adjs');
	$allverbs = scrape('words/verbs.json', 'verbs');

	// get past tense verbs only
	$verbs = array();
	foreach ($allverbs as $verb) {
		array_push($verbs, $verb['past']);
	}

	$words = array_merge($nouns, $adverbs, $adjectives, $verbs);

	$symbols = array('!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '=');

	$nouns_max = count($nouns) - 1;
	$adverbs_max = count($adverbs) - 1;
	$adjectives_max = count($adjectives) - 1;
	$verbs_max = count($verbs) - 1;
	$words_max = count($words) - 1;
	$symbols_max = count($symbols) - 1;

?>