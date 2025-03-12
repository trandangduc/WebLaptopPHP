<?php
require_once 'database.php';

class ChiTietGioHang {
    private $conn;

    public function __construct() {
        $this->conn = getConnection();
    }

    // Lấy tất cả chi tiết giỏ hàng
    public function getAll() {
        $sql = "SELECT * FROM ChiTietGioHang";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lấy chi tiết giỏ hàng theo ID
    public function getById($id) {
        $sql = "SELECT * FROM ChiTietGioHang WHERE MaChiTiet = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Thêm mới chi tiết giỏ hàng
    public function add($maGioHang, $maSanPham, $soLuong, $gia, $giaMoi) {
        $sql = "INSERT INTO ChiTietGioHang (MaGioHang, MaSanPham, SoLuong, Gia, GiaMoi) 
                VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$maGioHang, $maSanPham, $soLuong, $gia, $giaMoi]);
    }

    // Cập nhật chi tiết giỏ hàng
    public function update($maChiTiet, $maGioHang, $maSanPham, $soLuong, $gia, $giaMoi) {
        $sql = "UPDATE ChiTietGioHang SET MaGioHang = ?, MaSanPham = ?, SoLuong = ?, Gia = ?, GiaMoi = ? 
                WHERE MaChiTiet = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$maGioHang, $maSanPham, $soLuong, $gia, $giaMoi, $maChiTiet]);
    }

    // Xóa chi tiết giỏ hàng
    public function delete($id) {
        $sql = "DELETE FROM ChiTietGioHang WHERE MaChiTiet = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$id]);
    }
}
?>
