<?php
function convertToLowercase($array) {
    $result = array();
    foreach ($array as $element) {
        if (is_string($element)) {
            $result[] = strtolower($element);
        } else {
            $result[] = $element;
        }
    }
    return $result;
}


$arrs1 = ['1', 'B', 'C', 'E'];
$result1 = convertToLowercase($arrs1);
print_r($result1);

$arrs2 = ['a', 0, null, false];
$result2 = convertToLowercase($arrs2);
print_r($result2);
?>
