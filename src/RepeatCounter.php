<?php
    class RepeatCounter
    {
        private $word;
        private $sentence;

        function __construct($new_word, $new_sentence)
        {
            $this->word = $new_word;
            $this->sentence = $new_sentence;
        }

        function setWord($new_word)
        {
            $this->word = (string) $new_word;
        }

        function getWord()
        {
            return $this->word;
        }

        function setSentence($new_sentence)
        {
            $this->sentence = (string) $new_sentence;
        }

        function getSentence()
        {
            return $this->sentence;
        }

        function countRepeats($input_word, $input_sentence)
        {
            $count = 0;
            $seperated_words = explode(" ", $input_sentence);

            foreach ($seperated_words as $word) {
                if (strtolower($input_word) == strtolower($word)) {
                    $count++;
                }
            }
            return $count;
        }
    }
 ?>
