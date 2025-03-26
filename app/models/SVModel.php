<?php

class SVModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllSinhVien() {
        $sql = "SELECT * FROM SinhVien";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getSinhVienById($maSV) {
        $sql = "SELECT * FROM SinhVien WHERE MaSV = :maSV";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':maSV', $maSV);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createSinhVien($data) {
        $sql = "INSERT INTO SinhVien (MaSV, HoTen, GioiTinh, NgaySinh, Hinh, MaNganh) VALUES (:MaSV, :HoTen, :GioiTinh, :NgaySinh, :Hinh, :MaNganh)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($data);
    }

    public function updateSinhVien($maSV, $data) {
        $sql = "UPDATE SinhVien SET HoTen = :HoTen, GioiTinh = :GioiTinh, NgaySinh = :NgaySinh, Hinh = :Hinh, MaNganh = :MaNganh WHERE MaSV = :MaSV_where";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':MaSV_where', $maSV);
        return $stmt->execute($data);
    }

    public function deleteSinhVien($maSV) {
        $sql = "DELETE FROM SinhVien WHERE MaSV = :maSV";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':maSV', $maSV);
        return $stmt->execute();
    }

    // Phương thức mới để kiểm tra đăng nhập
    public function getSinhVienByMaSV($mssv) {
        $sql = "SELECT MaSV FROM SinhVien WHERE MaSV = :mssv";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':mssv', $mssv);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

?>