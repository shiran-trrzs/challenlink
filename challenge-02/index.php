<?php

function noIterate($strArr) {
    [$string_base, $characters] = $strArr;

    $counted_characters = array_count_values(str_split($characters));
    $character_counter = [];
    $achieved_characters = 0;
    $required_characters = count($counted_characters);

    $start = 0;
    $min_len = PHP_INT_MAX;
    $current_start = 0;

    for ($end = 0; $end < strlen($string_base); $end++) {
        $character = $string_base[$end];
        if (isset($counted_characters[$character])) {
            # echo $character . '<br />';
            $character_counter[$character] = ($character_counter[$character] ?? 0) + 1;
            # echo $character_counter[$character] . '<br />';

            if ($character_counter[$character] === $counted_characters[$character]) $achieved_characters++;
        }

        while ($achieved_characters === $required_characters) {
            if ($end - $start + 1 < $min_len) {
                $min_len = $end - $start + 1;
                $current_start = $start;
            }

            $left_character = $string_base[$start++];
            # echo $left_character . '<br />';
            if (isset($counted_characters[$left_character])) {
                if ($character_counter[$left_character] === $counted_characters[$left_character]) $achieved_characters--;
                # echo $achieved_characters . '<br />';
                $character_counter[$left_character]--;
            }
        }
    }

    return $min_len === PHP_INT_MAX ? "" : substr($string_base, $current_start, $min_len);
}

// keep this function call here
echo noIterate(["ahffaksfajeeubsne", "jefaa"]);
