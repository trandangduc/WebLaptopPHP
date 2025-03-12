<?php
class PhieuNhapKho {
    private $conn;
    private $table = "PhieuNhapKho";

    public $MaPhieuNhap;
    public $NgayNhap;
    public $TongTien;
    public $GhiChu;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table . " (NgayNhap, TongTien, GhiChu) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("sds", $this->NgayNhap, $this->TongTien, $this->GhiChu);
        return $stmt->execute();
    }

    public function read() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->get_result();
    }

    public function readOne() {
        $query = "SELECT * FROM " . $this->table . " WHERE MaPhieuNhap = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $this->MaPhieuNhap);
        $stmt->execute();
        return $stmt->get_result();
    }

    public function update() {
        $query = "UPDATE " . $this->table . " SET NgayNhap = ?, TongTien = ?, GhiChu = ? WHERE MaPhieuNhap = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("sdsi", $this->NgayNhap, $this->TongTien, $this->GhiChu, $this->MaPhieuNhap);
        return $stmt->execute();
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table . " WHERE MaPhieuNhap = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $this->MaPhieuNhap);
        return $stmt->execute();
    }
}