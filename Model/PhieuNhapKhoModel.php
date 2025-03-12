<?php

class PhieuNhapKho {
    private $conn;
    private $table = "PhieuNhapKho";

    public $MaPhieuNhap;
    public $NgayNhap;
    public $TongTien;
    public $GhiChu;

    public function __construct($db) {
        $this->conn =getConnection();
    }

    public function create() {
        $query = "INSERT INTO " . $this->table . " (NgayNhap, TongTien, GhiChu) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindparam("sds", $this->NgayNhap, $this->TongTien, $this->GhiChu);
        return $stmt->execute();
    }

    public function read() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);;
    }

    public function readOne() {
        $query = "SELECT * FROM " . $this->table . " WHERE MaPhieuNhap = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindparam("i", $this->MaPhieuNhap);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);;
    }

    public function update() {
        $query = "UPDATE " . $this->table . " SET NgayNhap = ?, TongTien = ?, GhiChu = ? WHERE MaPhieuNhap = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindparam("sdsi", $this->NgayNhap, $this->TongTien, $this->GhiChu, $this->MaPhieuNhap);
        return $stmt->execute();
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table . " WHERE MaPhieuNhap = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindparam("i", $this->MaPhieuNhap);
        return $stmt->execute();
    }
}