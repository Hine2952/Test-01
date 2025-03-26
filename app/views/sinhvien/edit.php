<?php
ob_start();
include 'app/views/shares/header.php';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa thông tin sinh viên</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: 20px auto;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .error-message {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Chỉnh sửa thông tin sinh viên</h1>
        <?php if (isset($sinhVien)): ?>
            <form action="/sangthu3/test-01/SV/edit/<?php echo htmlspecialchars($sinhVien['MaSV']); ?>" method="post">
                <div class="form-group">
                    <label for="MaSV">Mã sinh viên:</label>
                    <input type="text" id="MaSV" name="MaSV" value="<?php echo htmlspecialchars($sinhVien['MaSV']); ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="HoTen">Họ và tên:</label>
                    <input type="text" id="HoTen" name="HoTen" value="<?php echo htmlspecialchars($sinhVien['HoTen']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="GioiTinh">Giới tính:</label>
                    <select id="GioiTinh" name="GioiTinh">
                        <option value="Nam" <?php if ($sinhVien['GioiTinh'] === 'Nam') echo 'selected'; ?>>Nam</option>
                        <option value="Nữ" <?php if ($sinhVien['GioiTinh'] === 'Nữ') echo 'selected'; ?>>Nữ</option>
                        <option value="Khác" <?php if ($sinhVien['GioiTinh'] === 'Khác') echo 'selected'; ?>>Khác</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="NgaySinh">Ngày sinh:</label>
                    <input type="date" id="NgaySinh" name="NgaySinh" value="<?php echo htmlspecialchars($sinhVien['NgaySinh']); ?>">
                </div>
                <div class="form-group">
                    <label for="Hinh">Hình ảnh:</label>
                    <input type="text" id="Hinh" name="Hinh" value="<?php echo htmlspecialchars($sinhVien['Hinh']); ?>">
                    <small>Đường dẫn đến hình ảnh</small>
                </div>
                <div class="form-group">
                    <label for="MaNganh">Mã ngành:</label>
                    <input type="text" id="MaNganh" name="MaNganh" value="<?php echo htmlspecialchars($sinhVien['MaNganh']); ?>">
                </div>
                <button type="submit">Cập nhật</button>
            </form>
            <p><a href="/sangthu3/test-01/SV/">Quay lại danh sách</a></p>
        <?php else: ?>
            <p>Không tìm thấy sinh viên.</p>
</html>
<?php ob_end_flush(); ?> <?php endif; ?>
    </div>
</body>
</html>