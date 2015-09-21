# P2 for DWA15

## Live URL

TK

## Demo URL

TK

## Description

XKCD-style password generator

## Outside resources

[Bootstrap](http://getbootstrap.com/)

Word lists are from the [Corpora project](https://github.com/dariusk/corpora/)  ([CC0](http://creativecommons.org/publicdomain/zero/1.0/)):
- [Adjectives](https://github.com/dariusk/corpora/blob/master/data/words/adjs.json)
- [Adverbs](https://github.com/dariusk/corpora/blob/master/data/words/adverbs.json)
- [Nouns](https://github.com/dariusk/corpora/blob/master/data/words/nouns.json)
- [Verbs](https://github.com/dariusk/corpora/blob/master/data/words/verbs.json)
- [Dinosaurs](https://github.com/dariusk/corpora/blob/master/data/animals/dinosaurs.json)

JQuery help on form input disabling from [Kris Ivanov on StackOverflow](http://stackoverflow.com/questions/5818415/enable-disable-submit-button-based-on-radio-buttons/5818714#5818714)

## TODO 
- Landing page includes a description of your app and what a xkcd password is (assume an unfamiliar audience).
- ~~Form inputs to specify:~~
	- ~~How many words to use.~~
	- ~~Whether to include a number.~~
	- ~~Whether to include a special symbol (for example, @).~~
- ~~Retain/display form data entered after clicking submit (don't clear fields)~~
- ~~Grab some words to use~~
- ~~Error checking~~
	- ~~if radio button isn't selected for # / symbol~~
	- ~~limit # of words~~
- ~~Sample output~~
	- ~~word1 word2 ... wordn # @~~
- Force lowercase on password


## TODO (extra)
- Add more configurations:
	- How many special characters.
	- Spaces or camelCase or hyphens.
	- Max length.
	- All upper case, or all lower case, or make the first letter of each word upper case.
	- choose a word separator (including no separator and random separator)
	- specify min &/or max word length
	- ~~"Memorable" mode: adjective noun verb adverb~~
		- ~~Need to limit word count to 4 (and only 4) for this mode~~
	- ~~[Dino mode](https://github.com/dariusk/corpora/blob/master/data/animals/dinosaurs.json)~~
		- add dino drawing?
	- Etc...
- Error checking: For example, what happens if a user enters a string instead of an integer for # of words?
- Scrape an online word list to build a really long word list. 