<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Sinh Viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">Danh Sách Sinh Viên</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" style="background-color: green; border-radius:7%;" href="add.php">Thêm Mới Sinh Viên</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Danh Sách Sinh Viên</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã sinh viên</th>
                    <th scope="col">Tên sinh viên</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ngay sinh</th>
                    <th scope="col">Mã Lớp</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach($students as $std){
                echo "<tr>";
                echo "<td>{$std->getID()}</</td>";
                echo "<td>{$std->getTenSinhVien()}</td>";
                echo "<td>{$std->getEmail()}</td>";
                echo "<td>{$std->getNgaySinh()}</td>";
                echo "<td>{$std->getIdLop()}</td>";
                echo "<td><a href='edit.php?id={$std->getID()}'><i class='bi bi-pencil-square'></i></a></td>";
                echo "<td><a href='add.php?id={$std->getID()}'><i class='bi bi-trash'></i></a></td>";


                echo "<tr>";
            }
            ?>  
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
