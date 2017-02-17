<?php
    class WordFrequency
    {
        function wordMatch($input)
        {
            $to_lower_case = strtolower($input);
            $words = explode(" ", $to_lower_case);
            return implode(" ", $words);
        }

    }
 ?>
