<?php
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

$maxLengthString = "";
$minLengthString = "";
$maxStringLength = 0;
$minStringLength = PHP_INT_MAX;

foreach ($array as $str) {
    $length = strlen($str);


    if ($length > $maxStringLength) {
        $maxStringLength = $length;
        $maxLengthString = $str;
    }

    if ($length < $minStringLength) {
        $minStringLength = $length;
        $minLengthString = $str;
    }
}

echo "Chuỗi lớn nhất là $maxLengthString, độ dài = $maxStringLength<br>";
echo "Chuỗi nhỏ nhất là $minLengthString, độ dài = $minStringLength";
?>
