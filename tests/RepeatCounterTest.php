<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function testCountRepeatsOneWord()
        {
            $test_RepeatCounter = new RepeatCounter;
            $base_input = 'cd';
            $string_input = 'cd';

            $result = $test_RepeatCounter->countRepeats($base_input, $string_input);

            $this->assertEquals(1, $result);
        }

        function testCountRepeatsString()
        {
            $test_RepeatCounter = new RepeatCounter;
            $base_input = 'be';
            $string_input = 'bee is be';

            $result = $test_RepeatCounter->countRepeats($base_input, $string_input);

            $this->assertEquals(1, $result);
        }

        function testCountRepeatsCase()
        {
            $test_RepeatCounter = new RepeatCounter;
            $base_input = 'Bird';
            $string_input = 'birD is the word';

            $result = $test_RepeatCounter->countRepeats($base_input, $string_input);

            $this->assertEquals(1, $result);
        }

        function testCountRepeatsBaseSpace()
        {
            $test_RepeatCounter = new RepeatCounter;
            $base_input = 'tree trees';
            $string_input = 'Tree is trees is tree';

            $result = $test_RepeatCounter->countRepeats($base_input, $string_input);

            $this->assertEquals("Base input can only be one word", $result);
        }

        function testCountRepeatsSpecialChar()
        {
            $test_RepeatCounter = new RepeatCounter;
            $base_input = 'won';
            $string_input = 'I won!';

            $result = $test_RepeatCounter->countRepeats($base_input, $string_input);

            $this->assertEquals(1, $result);
        }
    }

?>
