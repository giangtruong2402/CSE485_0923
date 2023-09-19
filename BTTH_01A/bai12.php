<?php
$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
   ];
   
   // Lấy phần tử đầu tiên
   $firstElement = reset($numbers);
   echo "Phần tử đầu tiên: " . $firstElement . "<br>";
   
   // Lấy phần tử cuối cùng
   $lastElement = end($numbers);
   echo "Phần tử cuối cùng: " . $lastElement . "<br>";
   
   // Tìm số lớn nhất, số nhỏ nhất và tổng các giá trị
   $minValue = min($numbers);
   $maxValue = max($numbers);
   $sum = array_sum($numbers);
   echo "Số nhỏ nhất: " . $minValue . "<br>";
   echo "Số lớn nhất: " . $maxValue . "<br>";
   echo "Tổng giá trị: " . $sum . "<br>";
   
   // Sắp xếp mảng theo chiều tăng, giảm các giá trị
   asort($numbers); // Sắp xếp tăng dần theo giá trị
   print_r($numbers);
   echo "<br>";
   
   arsort($numbers); // Sắp xếp giảm dần theo giá trị
   print_r($numbers);
   echo "<br>";
   
   // Sắp xếp mảng theo chiều tăng, giảm các key
   ksort($numbers); // Sắp xếp tăng dần theo key
   print_r($numbers);
   echo "<br>";
   
   krsort($numbers); // Sắp xếp giảm dần theo key
   print_r($numbers);
   echo "<br>";