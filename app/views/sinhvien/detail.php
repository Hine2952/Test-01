<?php include 'app/views/shares/header.php'; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sinh viên</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 60%;
            margin: 20px auto;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .detail-item {
            margin-bottom: 10px;
        }
        .detail-item strong {
            display: inline-block;
            width: 120px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Chi tiết sinh viên</h1>
        <?php if (isset($sinhVien)): ?>
            <div class="detail-item">
                <strong>Mã sinh viên:</strong> <?php echo htmlspecialchars($sinhVien['MaSV']); ?>
            </div>
            <div class="detail-item">
                <strong>Họ và tên:</strong> <?php echo htmlspecialchars($sinhVien['HoTen']); ?>
            </div>
            <div class="detail-item">
                <strong>Giới tính:</strong> <?php echo htmlspecialchars($sinhVien['GioiTinh']); ?>
            </div>
            <div class="detail-item">
                <strong>Ngày sinh:</strong> <?php echo htmlspecialchars($sinhVien['NgaySinh']); ?>
            </div>
            <div class="detail-item">
                <strong>Hình ảnh:</strong> <img src="<?php echo htmlspecialchars('/SANGTHU3/Test-01/public/images/' . $sinhVien['Hinh']); ?>" alt="Hình sinh viên" width="100">
            </div>
            <div class="detail-item">
                <strong>Mã ngành:</strong> <?php echo htmlspecialchars($sinhVien['MaNganh']); ?>
            </div>
            <p><a href="/SANGTHU3/Test-01/SV/">Quay lại danh sách</a></p>
        <?php else: ?>
            <p>Không tìm thấy sinh viên.</p>
        <?php endif; ?>
    </div>
</body>
</html>