<?php

$servername = "localhost"; 
$username = "root"; 
$password = "240202"; 
$database = "btth01_cse485"; 

$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}


$sql_baiviet = "SELECT * FROM baiviet";
$result_baiviet = $conn->query($sql_baiviet);


$sql_tacgia = "SELECT * FROM tacgia";
$result_tacgia = $conn->query($sql_tacgia);

$sql_theloai = "SELECT * FROM theloai";
$result_theloai = $conn->query($sql_theloai);


$conn->close();
?>
