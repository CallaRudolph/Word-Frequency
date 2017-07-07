<?php

    class RepeatCounter
    {
        function countRepeats($base_input, $string_input)
        {
            $string_to_word = explode(" ", $string_input);
            $matches = [];

            foreach($string_to_word as $word)
            {
                if ($base_input == $word) {
                    $match = 1;
                    array_push($matches, $match);
                }
            }

            $number_of_matches = array_sum($matches);
            return $number_of_matches;
        }
    }

?>
