<?php 
ob_start();
include 'app/views/shares/header.php'; 
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới sinh viên</title>
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
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .error-message {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thêm mới sinh viên</h1>
        <form action="/SANGTHU3/Test-01/SV/create" method="post">
            <div class="form-group">
                <label for="MaSV">Mã sinh viên:</label>
                <input type="text" id="MaSV" name="MaSV" required>
            </div>
            <div class="form-group">
                <label for="HoTen">Họ và tên:</label>
                <input type="text" id="HoTen" name="HoTen" required>
            </div>
            <div class="form-group">
                <label for="GioiTinh">Giới tính:</label>
                <select id="GioiTinh" name="GioiTinh">
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                    <option value="Khác">Khác</option>
                </select>
            </div>
            <div class="form-group">
                <label for="NgaySinh">Ngày sinh:</label>
                <input type="date" id="NgaySinh" name="NgaySinh">
            </div>
            <div class="form-group">
                <label for="Hinh">Hình ảnh:</label>
                <input type="text" id="Hinh" name="Hinh">
                <small>Đường dẫn đến hình ảnh</small>
            </div>
            <div class="form-group">
                <label for="MaNganh">Mã ngành:</label>
                <input type="text" id="MaNganh" name="MaNganh">
            </div>
            <button type="submit">Lưu</button>
        </form>
        <p><a href="/SANGTHU3/Test-01/SV/">Quay lại danh sách</a></p>
    </div>
</body>
</html>