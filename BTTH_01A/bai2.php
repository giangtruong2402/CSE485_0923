<?php
$arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
$names = ['Anh', 'Sơn', 'Thắng', 'tôi'];

// Kiểm tra xem mảng $arrs có bằng kích thước của mảng $names không
if (count($arrs) != count($names)) {
    echo "Số màu và số tên không khớp.";
} else {
    $output = '';
    $count = count($arrs);
    
    for ($i = 0; $i < $count; $i++) {
        $output .= "Màu {$arrs[$i]} là màu yêu thích của {$names[$i]}, ";
    }
    
    // Loại bỏ dấu phẩy cuối cùng và thêm câu kết thúc
    $output = rtrim($output, ', ') . '.';
    
    echo $output;
}
?>
