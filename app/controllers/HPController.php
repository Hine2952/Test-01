<?php

require_once 'app/models/HPModel.php'; // Giả sử bạn đã tạo HPModel

class HPController {
    private $hpModel;

    public function __construct() {
        global $db; // Sử dụng kết nối cơ sở dữ liệu đã được thiết lập
        $this->hpModel = new HPModel($db);
    }

    public function index() {
        $danhSachHocPhan = $this->hpModel->getAllHocPhan();
        include 'app/views/hocphan/hocphan.php';
    }

    // Các action khác có thể có: đăng ký học phần, ...
}

?>