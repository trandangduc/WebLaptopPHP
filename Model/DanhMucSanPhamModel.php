<?php
require_once 'config.php';

class DanhMucSanPham {
    private $db;

    public function __construct() {
        $this->db = getConnection();
    }

    // Lấy tất cả danh mục sản phẩm
    public function getAll() {
        $query = "SELECT * FROM DanhMucSanPham";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lấy danh mục sản phẩm theo mã
    public function getById($maDanhMuc) {
        $query = "SELECT * FROM DanhMucSanPham WHERE MaDanhMuc = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$maDanhMuc]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Thêm danh mục sản phẩm mới
    public function create($tenDanhMuc, $trangThai, $ngayTao) {
        $query = "INSERT INTO DanhMucSanPham (TenDanhMuc, TrangThai, NgayTao) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$tenDanhMuc, $trangThai, $ngayTao]);
    }

    // Cập nhật danh mục sản phẩm
    public function update($maDanhMuc, $tenDanhMuc, $trangThai, $ngayTao) {
        $query = "UPDATE DanhMucSanPham SET TenDanhMuc = ?, TrangThai = ?, NgayTao = ? WHERE MaDanhMuc = ?";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$tenDanhMuc, $trangThai, $ngayTao, $maDanhMuc]);
    }

    // Xóa danh mục sản phẩm
    public function delete($maDanhMuc) {
        $query = "DELETE FROM DanhMucSanPham WHERE MaDanhMuc = ?";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$maDanhMuc]);
    }
}
