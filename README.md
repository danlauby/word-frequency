# _Word Frequency_

#### Application that returns a word and how many times the word is repeated within a sentence.

#### By Dan Lauby

## Description

This program that takes in two inputs: a word, and a sentence. The sentence is checked for the word, how many times it occurs in the sentence then displays the word and occurrences to user.

## _Application Specifications_

| Behavior | Input | Output |
|----------|-------|--------|
|Check if there are no matching words|'hello', word_array('good', 'morning')|'hello'=='good'(false), 'hello'=='morning'(false)->count= 0|
|Check for special characters|'there', word_array('Hello', 'there!')|'there'=='hello'(false), 'there'=='there!'(false)|
|Check if one word matches a word in word_array|'morning', word_array('good', 'morning')|'morning'=='good'(false), 'morning'=='morning'(true)->count= 1|
|Check if one word matches a word in word_array|'for', word_array('for', 'better', 'for', 'worse')|'for'=='for'(true), 'for'=='better'(better), 'for'=='for'(true), 'for'=='worse'(false)->count = 2|
|Count occurrence of matched words|'to', word_array('to', 'improve', 'is', 'to', 'change', 'is', 'to', 'succeed')|'to'=='to'(false), 'to'=='improve'(true), 'to'=='is'(false), 'to'=='to'(false), 'to'=='change'(false), 'to'=='is'(false), 'to'=='to'(true), 'to'=='succeed'(false)->count = 3|
|Check if word has special characters|"Bob's"|"Bob's"=="Bob's"(true), "Bobs"=="Bob's"(false)|



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
