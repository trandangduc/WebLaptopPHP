<?php
class Banner {
    private $db;
    
    public function __construct($database) {
        $this->db = $database;
    }
    
    // Lấy tất cả các banner
    public function getAllBanners() {
        $stmt = $this->db->prepare("SELECT * FROM Banner");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    // Lấy một banner theo ID
    public function getBannerById($id) {
        $stmt = $this->db->prepare("SELECT * FROM Banner WHERE MaBanner = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    // Thêm banner mới
    public function addBanner($hinhAnh, $lienKet, $moTa) {
        $stmt = $this->db->prepare("INSERT INTO Banner (HinhAnh, LienKet, MoTa) VALUES (?, ?, ?)");
        return $stmt->execute([$hinhAnh, $lienKet, $moTa]);
    }
    
    // Cập nhật banner
    public function updateBanner($id, $hinhAnh, $lienKet, $moTa) {
        $stmt = $this->db->prepare("UPDATE Banner SET HinhAnh = ?, LienKet = ?, MoTa = ? WHERE MaBanner = ?");
        return $stmt->execute([$hinhAnh, $lienKet, $moTa, $id]);
    }
    
    // Xóa banner
    public function deleteBanner($id) {
        $stmt = $this->db->prepare("DELETE FROM Banner WHERE MaBanner = ?");
        return $stmt->execute([$id]);
    }
}
