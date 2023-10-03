<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Mới Sinh Viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">Danh Sách Sinh Viên</a>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Thêm Mới Sinh Viên</h1>
        <form action="process.php" method="post">
            <div class="mb-3">
                <label for="tenSinhVien" class="form-label">Tên Sinh Viên</label>
                <input type="text" class="form-control" id="tenSinhVien" name="tenSinhVien" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="ngaySinh" class="form-label">Ngày Sinh</label>
                <input type="date" class="form-control" id="ngaySinh" name="ngaySinh" required>
            </div>
            <div class="mb-3">
                <label for="idLop" class="form-label">Lớp</label>
                <select class="form-select" id="idLop" name="idLop" required>
                    <option selected>Open this select menu</option>
                    <option value="1">TH1</option>
                    <option value="2">TH2</option>
                    <option value="3">TH3</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
