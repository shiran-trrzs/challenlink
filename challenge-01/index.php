<?php

function findPoint($strArr)
{
    $first_element = array_map('trim', explode(',', $strArr[0]));
    $second_element = array_map('trim', explode(',', $strArr[1]));

    $common_numbers = array_intersect($first_element, $second_element);

    if (empty($common_numbers)) return 'false';

    $common_numbers = array_map('intval', $common_numbers);
    sort($common_numbers);

    return implode(',', $common_numbers);
}

// keep this function call here
echo findPoint(['1, 3, 4, 7, 13', '1, 2, 4, 13, 15']);
