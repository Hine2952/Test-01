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
        $sql = "SELECT * FROM SinhVien WHERE MaSV = :masv";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':masv', $maSV);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createSinhVien($data) {
        $sql = "INSERT INTO SinhVien (MaSV, HoTen, GioiTinh, NgaySinh, Hinh, MaNganh)
                VALUES (:masv, :hoten, :gioitinh, :ngaysinh, :hinh, :manganh)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':masv', $data['MaSV']);
        $stmt->bindParam(':hoten', $data['HoTen']);
        $stmt->bindParam(':gioitinh', $data['GioiTinh']);
        $stmt->bindParam(':ngaysinh', $data['NgaySinh']);
        $stmt->bindParam(':hinh', $data['Hinh']);
        $stmt->bindParam(':manganh', $data['MaNganh']);
        return $stmt->execute();
    }

    public function updateSinhVien($maSV, $data) {
        $sql = "UPDATE SinhVien
                SET HoTen = :hoten,
                    GioiTinh = :gioitinh,
                    NgaySinh = :ngaysinh,
                    Hinh = :hinh,
                    MaNganh = :manganh
                WHERE MaSV = :masv";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':masv', $maSV);
        $stmt->bindParam(':hoten', $data['HoTen']);
        $stmt->bindParam(':gioitinh', $data['GioiTinh']);
        $stmt->bindParam(':ngaysinh', $data['NgaySinh']);
        $stmt->bindParam(':hinh', $data['Hinh']);
        $stmt->bindParam(':manganh', $data['MaNganh']);
        return $stmt->execute();
    }

    public function deleteSinhVien($maSV) {
        $sql = "DELETE FROM SinhVien WHERE MaSV = :masv";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':masv', $maSV);
        return $stmt->execute();
    }
}

?>