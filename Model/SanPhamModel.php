<?php
require_once 'config.php';
class SanPham {
    private $conn;
    private $table = "SanPham";

    public $MaSanPham;
    public $TenSanPham;
    public $MoTa;
    public $Gia;
    public $GiaMoi;
    public $HinhAnh;
    public $MaHang;
    public $MaDanhMuc;
    public $NgayTao;
    public $TrangThai;
    public $SoLuong;

    public function __construct() {
        $this->conn = getConnection();
    }

    public function getAll() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $sp = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $sp[] = $row;
        }
        return $sp;
    }

    public function getById($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE MaSanPham = ? LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create() {
        $query = "INSERT INTO " . $this->table . " (TenSanPham, MoTa, Gia, GiaMoi, HinhAnh, MaHang, MaDanhMuc, NgayTao, TrangThai, SoLuong)
                  VALUES (:TenSanPham, :MoTa, :Gia, :GiaMoi, :HinhAnh, :MaHang, :MaDanhMuc, :NgayTao, :TrangThai, :SoLuong)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([
            ':TenSanPham' => $this->TenSanPham,
            ':MoTa' => $this->MoTa,
            ':Gia' => $this->Gia,
            ':GiaMoi' => $this->GiaMoi,
            ':HinhAnh' => $this->HinhAnh,
            ':MaHang' => $this->MaHang,
            ':MaDanhMuc' => $this->MaDanhMuc,
            ':NgayTao' => $this->NgayTao,
            ':TrangThai' => $this->TrangThai,
            ':SoLuong' => $this->SoLuong
        ]);
        return $stmt;
    }

    public function update() {
        $query = "UPDATE " . $this->table . " SET TenSanPham=:TenSanPham, MoTa=:MoTa, Gia=:Gia, GiaMoi=:GiaMoi, HinhAnh=:HinhAnh, 
                  MaHang=:MaHang, MaDanhMuc=:MaDanhMuc, NgayTao=:NgayTao, TrangThai=:TrangThai, SoLuong=:SoLuong WHERE MaSanPham=:MaSanPham";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([
            ':MaSanPham' => $this->MaSanPham,
            ':TenSanPham' => $this->TenSanPham,
            ':MoTa' => $this->MoTa,
            ':Gia' => $this->Gia,
            ':GiaMoi' => $this->GiaMoi,
            ':HinhAnh' => $this->HinhAnh,
            ':MaHang' => $this->MaHang,
            ':MaDanhMuc' => $this->MaDanhMuc,
            ':NgayTao' => $this->NgayTao,
            ':TrangThai' => $this->TrangThai,
            ':SoLuong' => $this->SoLuong
        ]);
        return $stmt;
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table . " WHERE MaSanPham = :MaSanPham";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([':MaSanPham' => $this->MaSanPham]);
        return $stmt;
    }
}