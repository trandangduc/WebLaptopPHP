<?php
require_once 'database.php';

class ChiTietDonHang {
    private $conn;

    public function __construct() {
        $this->conn = getConnection();
    }

    // Lấy tất cả chi tiết đơn hàng
    public function getAll() {
        $stmt = $this->conn->prepare("SELECT * FROM ChiTietDonHang");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lấy chi tiết đơn hàng theo mã đơn hàng
    public function getByMaDonHang($maDonHang) {
        $stmt = $this->conn->prepare("SELECT * FROM ChiTietDonHang WHERE MaDonHang = ?");
        $stmt->execute([$maDonHang]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Thêm mới chi tiết đơn hàng
    public function add($maDonHang, $maSanPham, $soLuong, $gia, $giaMoi) {
        $stmt = $this->conn->prepare("INSERT INTO ChiTietDonHang (MaDonHang, MaSanPham, SoLuong, Gia, GiaMoi) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$maDonHang, $maSanPham, $soLuong, $gia, $giaMoi]);
    }

    // Cập nhật chi tiết đơn hàng
    public function update($maChiTiet, $soLuong, $gia, $giaMoi) {
        $stmt = $this->conn->prepare("UPDATE ChiTietDonHang SET SoLuong = ?, Gia = ?, GiaMoi = ? WHERE MaChiTiet = ?");
        return $stmt->execute([$soLuong, $gia, $giaMoi, $maChiTiet]);
    }

    // Xóa chi tiết đơn hàng
    public function delete($maChiTiet) {
        $stmt = $this->conn->prepare("DELETE FROM ChiTietDonHang WHERE MaChiTiet = ?");
        return $stmt->execute([$maChiTiet]);
    }
}
?>
