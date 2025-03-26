<?php

class HPModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllHocPhan() {
        $sql = "SELECT MaHP, TenHP, SoTinChi FROM HocPhan";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Các phương thức khác có thể có: lấy học phần theo mã, ...
}

?>