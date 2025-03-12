<?php
require_once 'database.php';

class HangSanPham {
    private $db;

    public function __construct() {
        $this->db = getConnection();
    }

    // Lấy tất cả hãng sản phẩm
    public function getAll() {
        $query = "SELECT * FROM HangSanPham";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lấy hãng sản phẩm theo mã
    public function getById($maHang) {
        $query = "SELECT * FROM HangSanPham WHERE MaHang = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$maHang]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Thêm hãng sản phẩm mới
    public function create($tenHang, $trangThai, $ngayTao) {
        $query = "INSERT INTO HangSanPham (TenHang, TrangThai, NgayTao) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$tenHang, $trangThai, $ngayTao]);
    }

    // Cập nhật hãng sản phẩm
    public function update($maHang, $tenHang, $trangThai, $ngayTao) {
        $query = "UPDATE HangSanPham SET TenHang = ?, TrangThai = ?, NgayTao = ? WHERE MaHang = ?";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$tenHang, $trangThai, $ngayTao, $maHang]);
    }

    // Xóa hãng sản phẩm
    public function delete($maHang) {
        $query = "DELETE FROM HangSanPham WHERE MaHang = ?";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$maHang]);
    }
}
