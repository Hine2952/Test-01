<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>
    <link
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Test1</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-
            target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle
navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/sangthu3/test-01/SV/">Danh sách sinh viên</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/sangthu3/test-01/HP/">Học Phần</a>
                </li>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                    <li class="nav-item">
                        <span class="nav-link">Chào: <?php echo htmlspecialchars($_SESSION['mssv']); ?></span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/sangthu3/test-01/SV/logout">Đăng Xuất</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/sangthu3/test-01/SV/login">Đăng Nhập</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">