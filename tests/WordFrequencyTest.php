<?php
    require_once "src/WordFrequency.php";

    class WordFrequencyTest extends PHPUnit_Framework_TestCase
    {
        function test_toLowercase()
        {
            // Arrange
            $test_WordFrequency = new WordFrequency;
            $input = 'To improve is to change';

            // Act
            $result = $test_WordFrequency->wordMatch($input);

            //Assert
            $this->assertEquals('to improve is to change', $result);
        }

        function test_seperation()
        {
            // Arrange
            $test_WordFrequency = new WordFrequency;
            $input = 'To improve is to change';

            // Act
            $result = $test_WordFrequency->wordMatch($input);

            //Assert
            $this->assertEquals('to improve is to change', $result);
        }
    }
 ?>
