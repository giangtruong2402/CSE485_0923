<?php
function convertToUppercase($array) {
    $result = array();
    foreach ($array as $element) {
        if (is_string($element)) {
            $result[] = strtoupper($element);
        } else {
            $result[] = $element;
        }
    }
    return $result;
}

// Mảng 1: ['1', 'b', 'c', 'd']
$arrs1 = ['1', 'b', 'c', 'd'];
$result1 = convertToUppercase($arrs1);
print_r($result1);

// Mảng 2: ['a', 0, null, false]
$arrs2 = ['a', 0, null, false];
$result2 = convertToUppercase($arrs2);
print_r($result2);
?>
