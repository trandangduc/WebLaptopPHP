<?php
require_once 'database.php';

class ChiTietPhieuNhapKho {
    private $db;

    public function __construct() {
        $this->db = getConnection();
    }

    // Lấy tất cả chi tiết phiếu nhập kho
    public function getAll() {
        $query = "SELECT * FROM ChiTietPhieuNhapKho";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lấy chi tiết phiếu nhập kho theo mã
    public function getById($maChiTiet) {
        $query = "SELECT * FROM ChiTietPhieuNhapKho WHERE MaChiTiet = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$maChiTiet]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Thêm chi tiết phiếu nhập kho mới
    public function create($maPhieuNhap, $maSanPham, $soLuong, $giaNhap) {
        $query = "INSERT INTO ChiTietPhieuNhapKho (MaPhieuNhap, MaSanPham, SoLuong, GiaNhap) VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$maPhieuNhap, $maSanPham, $soLuong, $giaNhap]);
    }

    // Cập nhật chi tiết phiếu nhập kho
    public function update($maChiTiet, $maPhieuNhap, $maSanPham, $soLuong, $giaNhap) {
        $query = "UPDATE ChiTietPhieuNhapKho SET MaPhieuNhap = ?, MaSanPham = ?, SoLuong = ?, GiaNhap = ? WHERE MaChiTiet = ?";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$maPhieuNhap, $maSanPham, $soLuong, $giaNhap, $maChiTiet]);
    }

    // Xóa chi tiết phiếu nhập kho
    public function delete($maChiTiet) {
        $query = "DELETE FROM ChiTietPhieuNhapKho WHERE MaChiTiet = ?";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$maChiTiet]);
    }
}
