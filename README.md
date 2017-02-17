# _Word Frequency_

#### Application that returns a word and how many times the word is repeated within a sentence.

#### By Dan Lauby

## Description

This program that takes in two inputs: a word, and a sentence. The sentence is checked for the word, how many times it occurs in the sentence then displays the word and occurrences to user.

## _Application Specifications_

| Behavior | Input | Output |
|----------|-------|--------|
|Set input to lower case|'To improve is to change'|'to improve is to change'|
|Separate words in a sentence|'To improve is to change'|word_array('to', 'improve', 'is', 'to', 'change')|
|Check if word matches a word in word_array|'to', word_array('to', 'improve', 'is', 'to', 'change')|'to'=='to'(true), 'to'=='improve'(false), 'to'=='is'(false), 'to'=='to'(true), 'to'=='change'(false)|
|If word has match(s), save result(s)|'to', word_array('to', 'improve', 'is', 'to', 'change')|result = array('to', 'to')|
|Count occurrence of matched words|'to', word_array('to', 'improve', 'is', 'to', 'change')|count = 2|



## Setup/Installation Requirements

* Clone [word-frequency](https://github.com/danlauby/word-frequency) repository
* Download [Composer](https://getcomposer.org/)
* Run "composer install" in computer terminal
* Navigate into this project's "web" folder
* Run "php -S localhost:8000" in terminal to setup document root
* Open up web browser and navigate to the url "localhost:8000" to view functional program

## Known Bugs

None known.

## Support and contact details

Feel free to contact [Dan Lauby] (dmlauby@gmail.com) if any questions come up!

## Technologies Used

* PHP/Composer (dependencies)
* PHP/Silex (routing)
* PHPUnit (testing)
* HTML/Twig (templates)
* CSS/Bootstrap (interface)

### License

Copyright (c) 2017 Dan Lauby
