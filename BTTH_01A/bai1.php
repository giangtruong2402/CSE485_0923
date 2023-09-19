<?php
function calculateOperations($arr) {
    $sum = array_sum($arr); // Tính tổng
    $product = array_product($arr); // Tính tích
    
    // Tính hiệu
    $difference = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        $difference -= $arr[$i];
    }

    // Tính thương
    $quotient = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        $quotient /= $arr[$i];
    }

    echo "Tổng các phần tử = " . implode(" + ", $arr) . " = $sum<br>";
    echo "Tích các phần tử = " . implode(" * ", $arr) . " = $product<br>";
    echo "Hiệu các phần tử = " . implode(" - ", $arr) . " = $difference<br>";
    echo "Thương các phần tử = " . implode(" / ", $arr) . " = $quotient<br>";
}

$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
calculateOperations($arrs);
?>
