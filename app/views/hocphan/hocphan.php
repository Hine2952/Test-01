<?php include 'app/views/shares/header.php'; ?>

<h1>DANH SÁCH HỌC PHẦN</h1>

<table class="table">
    <thead>
        <tr>
            <th>Mã Học Phần</th>
            <th>Tên Học Phần</th>
            <th>Số Tín Chỉ</th>
            <th></th> </tr>
    </thead>
    <tbody>
        <?php if (empty($danhSachHocPhan)): ?>
            <tr><td colspan="4">Không có học phần nào.</td></tr>
        <?php else: ?>
            <?php foreach ($danhSachHocPhan as $hocPhan): ?>
                <tr>
                    <td><?php echo htmlspecialchars($hocPhan['MaHP']); ?></td>
                    <td><?php echo htmlspecialchars($hocPhan['TenHP']); ?></td>
                    <td><?php echo htmlspecialchars($hocPhan['SoTinChi']); ?></td>
                    <td><button class="btn btn-primary">Đăng Ký</button></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>

<?php include 'app/views/shares/footer.php'; ?>