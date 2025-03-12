<?php
require_once 'database.php';

class GioHang {
    private $db;

    public function __construct() {
        $this->db = getConnection();
    }

    // Lấy tất cả giỏ hàng
    public function getAll() {
        $query = "SELECT * FROM GioHang";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lấy giỏ hàng theo mã
    public function getById($maGioHang) {
        $query = "SELECT * FROM GioHang WHERE MaGioHang = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$maGioHang]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Thêm giỏ hàng mới
    public function create($maTaiKhoan, $ngayTao, $tongTien) {
        $query = "INSERT INTO GioHang (MaTaiKhoan, NgayTao, TongTien) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$maTaiKhoan, $ngayTao, $tongTien]);
    }

    // Cập nhật giỏ hàng
    public function update($maGioHang, $maTaiKhoan, $ngayTao, $tongTien) {
        $query = "UPDATE GioHang SET MaTaiKhoan = ?, NgayTao = ?, TongTien = ? WHERE MaGioHang = ?";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$maTaiKhoan, $ngayTao, $tongTien, $maGioHang]);
    }

    // Xóa giỏ hàng
    public function delete($maGioHang) {
        $query = "DELETE FROM GioHang WHERE MaGioHang = ?";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$maGioHang]);
    }
}
