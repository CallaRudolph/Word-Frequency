<?php

    class RepeatCounter
    {
        function specialCharacters($string_input)
        {
            $special_check = false;
            $string_to_word = explode(" ", $string_input);
            foreach($string_to_word as $word)
            {
                if (ctype_alpha($word) == false)
                    $special_check = true;
            }
            return $special_check;
        }

        function countRepeats($base_input, $string_input)
        {
            $alpha_check = $this->specialCharacters($string_input);
            $space_check = " ";

            if ($alpha_check == true) {
                $answer = "String of words cannot contain special characters";
            } elseif (strpos($base_input, $space_check) == true) {
                $answer= "Base input can only be one word";
            } else {
                $base_lower = strtolower($base_input);
                $string_lower = strtolower($string_input);
                $string_to_word = explode(" ", $string_lower);
                $matches = [];
                foreach($string_to_word as $word)
                {
                    if ($base_lower == $word) {
                        $match = 1;
                        array_push($matches, $match);
                    }
                }
                $answer = array_sum($matches);
            }
            return $answer;
        }
    }

?>
