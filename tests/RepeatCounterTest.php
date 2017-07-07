<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function testCountRepeatsOneChar()
        {
            $test_RepeatCounter = new RepeatCounter;
            $base_input = 'a';
            $string_input = 'a';

            $result = $test_RepeatCounter->countRepeats($base_input, $string_input);

            $this->assertEquals(1, $result);
        }
    }

?>
