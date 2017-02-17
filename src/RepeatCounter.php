<?php
    class RepeatCounter
    {
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
