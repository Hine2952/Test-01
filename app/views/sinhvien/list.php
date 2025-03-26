<?php include 'app/views/shares/header.php'; ?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANG SINH VIÊN</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 90%;
            margin: 20px auto;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .add-student {
            margin-bottom: 15px;
            text-align: right;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .actions a {
            margin-right: 5px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>TRANG SINH VIÊN</h1>
        <div class="add-student">
            <a href="/SANGTHU3/Test-01/SV/create">Add Student</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>MaSV</th>
                    <th>HoTen</th>
                    <th>GioiTinh</th>
                    <th>NgaySinh</th>
                    <th>Hinh</th>
                    <th>MaNganh</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($danhSachSinhVien)): ?>
                    <tr>
                        <td colspan="7">Không có sinh viên nào.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($danhSachSinhVien as $sinhVien): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($sinhVien['MaSV']); ?></td>
                            <td><?php echo htmlspecialchars($sinhVien['HoTen']); ?></td>
                            <td><?php echo htmlspecialchars($sinhVien['GioiTinh']); ?></td>
                            <td><?php echo htmlspecialchars($sinhVien['NgaySinh']); ?></td>
                            <td><img src="<?php echo htmlspecialchars('/SANGTHU3/Test-01/public/images/' . $sinhVien['Hinh']); ?>" alt="Hình sinh viên" width="50"></td>
                            <td><?php echo htmlspecialchars($sinhVien['MaNganh']); ?></td>
                            <td class="actions">
                                <a href="/SANGTHU3/Test-01/SV/edit/<?php echo htmlspecialchars($sinhVien['MaSV']); ?>">Edit</a>
                                <a href="/SANGTHU3/Test-01/SV/detail/<?php echo htmlspecialchars($sinhVien['MaSV']); ?>">Details</a>
                                <a href="/SANGTHU3/Test-01/SV/delete/<?php echo htmlspecialchars($sinhVien['MaSV']); ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa sinh viên này?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>

</html>