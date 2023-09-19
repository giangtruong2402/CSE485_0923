<?php
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
    <table border="1">
    <thead>
                <tr>
                    <th>Tên khóa học</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($arrs as $course) { ?>
                    <tr>
                        <td><?php echo $course; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
    </table>
</form>

</body>
</html>