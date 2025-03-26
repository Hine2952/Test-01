<?php include 'app/views/shares/header.php'; ?>

<div class="container">
    <h2>ĐĂNG NHẬP</h2>
    <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>
    <form method="post" action="/sangthu3/test-01/SV/login">
        <div class="form-group">
            <label for="mssv">MaSV</label>
            <input type="text" class="form-control" id="mssv" name="mssv" required>
        </div>
        <button type="submit" class="btn btn-primary">Đăng Nhập</button>
        <p><a href="/sangthu3/test-01/SV/">Back to List</a></p>
    </form>
</div>

<?php include 'app/views/shares/footer.php'; ?>