<?php

    class RepeatCounter
    {
        function countRepeats($base_input, $string_input)
        {
            $space_check = " ";

            if (strpos($base_input, $space_check) == true) {
                $answer = "Hold up... we said enter a SINGLE WORD to check against";
            } else {
                $base_lower = strtolower($base_input);
                $string_lower = strtolower($string_input);
                $string_to_words = explode(" ", $string_lower);
                $matches = [];
                foreach($string_to_words as $word)
                {
                    if (!(ctype_alpha($word))) {
                        $word_explode = str_split($word);
                        $array = [];
                        foreach($word_explode as $letter)
                        {
                            if (ctype_alpha($letter)) {
                                array_push($array, $letter);
                            }
                        }
                        $no_special_char_word = implode("", $array);
                        if ($base_lower == $no_special_char_word) {
                            $match = 1;
                            array_push($matches, $match);
                        }
                    } elseif ($base_lower == $word) {
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
