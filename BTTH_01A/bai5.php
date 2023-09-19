<?php
$a = [
    'a' => ['b' => 0, 'c' => 1],
    'b' => ['e' => 2, 'o' => ['b' => 3]]
];

// Hãy lấy giá trị = 3 mà có key là b từ mảng trên
$value = $a['b']['o']['b'];
echo "Kết quả = " . $value;

// Hãy lấy giá trị = 1 mà có key là c từ mảng trên
$value2 = $a['a']['c'];
echo "Kết quả = " . $value2;

$info = $a['a'];
print_r($info);
?>
