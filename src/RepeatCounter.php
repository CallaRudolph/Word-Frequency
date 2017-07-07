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
                {
                    $special_check = true;
                }
            }
            return $special_check;
        }

        function countRepeats($base_input, $string_input)
        {
            $alpha_check = $this->specialCharacters($string_input);
            $space_check = " ";
            $base_lower = strtolower($base_input);
            $string_lower = strtolower($string_input);
            $string_to_word = explode(" ", $string_lower);
            $matches = [];

            var_dump($alpha_check);
            if ($alpha_check == true) {
                $special_error = "String of words cannot contain special characters";
                return $special_error;
            } elseif (strpos($base_input, $space_check) == true) {
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
