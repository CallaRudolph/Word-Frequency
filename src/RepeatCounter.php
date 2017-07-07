<?php

    class RepeatCounter
    {
        function countRepeats($base_input, $string_input)
        {
            $space_check = " ";
            $base_lower = strtolower($base_input);
            $string_lower = strtolower($string_input);
            $string_to_word = explode(" ", $string_lower);
            $matches = [];

            if (strpos($base_input, $space_check) == true) {
                $error = "Base input can only be one word";
                return $error;
            } else {
                foreach($string_to_word as $word)
                {
                    if ($base_lower == $word) {
                        $match = 1;
                        array_push($matches, $match);
                    }
                }
                $number_of_matches = array_sum($matches);
                return $number_of_matches;
            }
        }
    }

?>
