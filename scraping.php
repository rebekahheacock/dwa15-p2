<?php

	function scrape($json_file, $word_type) {
		$rawdata = file_get_contents($json_file);
		$object = json_decode($rawdata, true);
		return $object[$word_type];
	}

	$nouns = scrape('https://raw.githubusercontent.com/dariusk/corpora/master/data/words/nouns.json', 'nouns');
	$adverbs = scrape('https://raw.githubusercontent.com/dariusk/corpora/master/data/words/adverbs.json', 'adverbs');
	$adjectives = scrape('https://raw.githubusercontent.com/dariusk/corpora/master/data/words/adjs.json', 'adjs');
	$allverbs = scrape('https://raw.githubusercontent.com/dariusk/corpora/master/data/words/verbs.json', 'verbs');

	// get past tense verbs only
	$verbs = array();
	foreach ($allverbs as $verb) {
		array_push($verbs, $verb['past']);
	}

	$words = array_merge($nouns, $adverbs, $adjectives, $verbs);

?>