<?php
require_once 'config.php';
class DonHang {
    private $conn;
    private $table = "DonHang";

    public $MaDonHang;
    public $MaTaiKhoan;
    public $NgayDatHang;
    public $TongTien;
    public $DiaChiGiaoHang;
    public $SoDienThoai;
    public $TrangThai;

    public function __construct() {
        $this->conn = getConnection();
    }

    public function getAll() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function getById($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE MaDonHang = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create() {
        $query = "INSERT INTO " . $this->table . " (MaTaiKhoan, NgayDatHang, TongTien, DiaChiGiaoHang, SoDienThoai, TrangThai) 
                  VALUES (:MaTaiKhoan, :NgayDatHang, :TongTien, :DiaChiGiaoHang, :SoDienThoai, :TrangThai)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':MaTaiKhoan', $this->MaTaiKhoan);
        $stmt->bindParam(':NgayDatHang', $this->NgayDatHang);
        $stmt->bindParam(':TongTien', $this->TongTien);
        $stmt->bindParam(':DiaChiGiaoHang', $this->DiaChiGiaoHang);
        $stmt->bindParam(':SoDienThoai', $this->SoDienThoai);
        $stmt->bindParam(':TrangThai', $this->TrangThai);
        
        return $stmt->execute();
    }

    public function update() {
        $query = "UPDATE " . $this->table . " SET 
                  MaTaiKhoan = :MaTaiKhoan, 
                  NgayDatHang = :NgayDatHang, 
                  TongTien = :TongTien, 
                  DiaChiGiaoHang = :DiaChiGiaoHang, 
                  SoDienThoai = :SoDienThoai, 
                  TrangThai = :TrangThai 
                  WHERE MaDonHang = :MaDonHang";
        
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':MaTaiKhoan', $this->MaTaiKhoan);
        $stmt->bindParam(':NgayDatHang', $this->NgayDatHang);
        $stmt->bindParam(':TongTien', $this->TongTien);
        $stmt->bindParam(':DiaChiGiaoHang', $this->DiaChiGiaoHang);
        $stmt->bindParam(':SoDienThoai', $this->SoDienThoai);
        $stmt->bindParam(':TrangThai', $this->TrangThai);
        $stmt->bindParam(':MaDonHang', $this->MaDonHang);
        
        return $stmt->execute();
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table . " WHERE MaDonHang = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->MaDonHang);
        return $stmt->execute();
    }
}
