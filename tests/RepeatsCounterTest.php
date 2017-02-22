<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_notMatching()
        {
            $input_word = 'hello';
            $input_sentence = 'Good morning';
            $test_RepeatCounter = new RepeatCounter($input_word, $input_sentence);

            // Act
            $result = $test_RepeatCounter->countRepeats($input_word, $input_sentence);
            //Assert
            $this->assertEquals(0, $result);
        }

        function test_oneWord()
        {
            // Arrange
            $input_word = 'morning';
            $input_sentence = 'Good morning';
            $test_RepeatCounter = new RepeatCounter($input_word, $input_sentence);

            // Act
            $result = $test_RepeatCounter->countRepeats($input_word, $input_sentence);
            //Assert
            $this->assertEquals(1, $result);
        }

        function test_twoWords()
        {
            // Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_word = 'for';
            $input_sentence = 'For better for worse';

            // Act
            $result = $test_RepeatCounter->countRepeats($input_word, $input_sentence);

            //Assert
            $this->assertEquals(2, $result);
        }
        //
        // function test_threeWords()
        // {
        //     // Arrange
        //     $test_RepeatCounter = new RepeatCounter;
        //     $input_word = 'to';
        //     $input_sentence = 'To improve is to change is to succeed';
        //
        //     // Act
        //     $result = $test_RepeatCounter->countRepeats($input_word, $input_sentence);
        //
        //     //Assert
        //     $this->assertEquals(3, $result);
        // }




    }
 ?>
