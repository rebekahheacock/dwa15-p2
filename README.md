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

[Dinosaur icon](https://thenounproject.com/search/?q=dinosaur&i=161852) is by [Jennifer Goodman](https://thenounproject.com/goodmajr2827) on the [Noun Project](https://thenounproject.com/) and is used under a [CC-BY 3.0](http://creativecommons.org/licenses/by/3.0/us/) license.

JQuery help on form input disabling from [Kris Ivanov on StackOverflow](http://stackoverflow.com/questions/5818415/enable-disable-submit-button-based-on-radio-buttons/5818714#5818714)


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