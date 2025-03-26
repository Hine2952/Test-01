<?php

require_once 'app/models/SVModel.php';

class SVController {
    private $sinhVienModel;

    public function __construct() {
        global $db;
        $this->sinhVienModel = new SVModel($db);
    }

    public function index() {
        $danhSachSinhVien = $this->sinhVienModel->getAllSinhVien();
        include 'app/views/sinhvien/list.php';
    }

    public function create() {
        // Xử lý logic hiển thị form tạo mới sinh viên
        include 'app/views/sinhvien/create.php';

        // Xử lý logic khi form được submit
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'MaSV' => $_POST['MaSV'],
                'HoTen' => $_POST['HoTen'],
                'GioiTinh' => $_POST['GioiTinh'],
                'NgaySinh' => $_POST['NgaySinh'],
                'Hinh' => $_POST['Hinh'], // Cần xử lý upload file nếu có
                'MaNganh' => $_POST['MaNganh']
            ];

            if ($this->sinhVienModel->createSinhVien($data)) {
                // Chuyển hướng về trang danh sách sau khi tạo thành công
                header('Location: /SANGTHU3/Test-01/SV/');
                exit();
            } else {
                // Hiển thị thông báo lỗi nếu tạo không thành công
                echo "Lỗi khi thêm sinh viên.";
            }
        }
    }

    public function edit($maSV) {
        // Lấy thông tin sinh viên theo MaSV để hiển thị trên form chỉnh sửa
        $sinhVien = $this->sinhVienModel->getSinhVienById($maSV);

        if (!$sinhVien) {
            // Xử lý trường hợp không tìm thấy sinh viên
            echo "Không tìm thấy sinh viên với mã: " . htmlspecialchars($maSV);
            return;
        }

        include 'app/views/sinhvien/edit.php';

        // Xử lý logic khi form được submit
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'HoTen' => $_POST['HoTen'],
                'GioiTinh' => $_POST['GioiTinh'],
                'NgaySinh' => $_POST['NgaySinh'],
                'Hinh' => $_POST['Hinh'], // Cần xử lý upload file nếu có
                'MaNganh' => $_POST['MaNganh']
            ];
            if ($this->sinhVienModel->updateSinhVien($maSV, $data)) {
                // Chuyển hướng về trang danh sách sau khi cập nhật thành công
                header('Location: /SANGTHU3/Test-01/SV/');
                exit();
            } else {
                // Hiển thị thông báo lỗi nếu cập nhật không thành công
                echo "Lỗi khi cập nhật thông tin sinh viên.";
            }
        }
    }

    public function delete($maSV) {
        if ($this->sinhVienModel->deleteSinhVien($maSV)) {
            // Chuyển hướng về trang danh sách sau khi xóa thành công
            header('Location: /SANGTHU3/Test-01/SV/');
            exit();
        } else {
            // Hiển thị thông báo lỗi nếu xóa không thành công
            echo "Lỗi khi xóa sinh viên với mã: " . htmlspecialchars($maSV);
        }
    }

    public function detail($maSV) {
        // Lấy thông tin chi tiết của sinh viên theo MaSV
        $sinhVien = $this->sinhVienModel->getSinhVienById($maSV);

        if (!$sinhVien) {
            // Xử lý trường hợp không tìm thấy sinh viên
            echo "Không tìm thấy sinh viên với mã: " . htmlspecialchars($maSV);
            return;
        }

        include 'app/views/sinhvien/detail.php';
    }
    public function login() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $mssv = $_POST['mssv'];
            $sinhVien = $this->sinhVienModel->getSinhVienByMaSV($mssv);

            if ($sinhVien) {
                $_SESSION['loggedin'] = true;
                $_SESSION['mssv'] = $sinhVien['MaSV'];
                header('Location: /sangthu3/test-01/SV/');
                exit();
            } else {
                $error = "MSSV không đúng.";
                
            }
        }
        include 'app/views/sinhvien/login.php';
    }

    public function logout() {
        $_SESSION = array();
        session_destroy();
        header('Location: /sangthu3/test-01/SV/login');
        exit();
    }
}

?>