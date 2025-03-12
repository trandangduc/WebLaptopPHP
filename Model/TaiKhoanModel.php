<?php
class TaiKhoan {
    private $conn;
    private $table = "TaiKhoan";

    public $MaTaiKhoan;
    public $Username;
    public $Password;
    public $MaQuyen;
    public $HoTen;
    public $DiaChi;
    public $SoDienThoai;
    public $Email;
    public $NgayTao;
    public $TrangThai;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO $this->table (Username, Password, MaQuyen, HoTen, DiaChi, SoDienThoai, Email, NgayTao, TrangThai) 
                  VALUES (:Username, :Password, :MaQuyen, :HoTen, :DiaChi, :SoDienThoai, :Email, NOW(), :TrangThai)";
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(':Username', $this->Username);
        $stmt->bindParam(':Password', password_hash($this->Password, PASSWORD_BCRYPT));
        $stmt->bindParam(':MaQuyen', $this->MaQuyen);
        $stmt->bindParam(':HoTen', $this->HoTen);
        $stmt->bindParam(':DiaChi', $this->DiaChi);
        $stmt->bindParam(':SoDienThoai', $this->SoDienThoai);
        $stmt->bindParam(':Email', $this->Email);
        $stmt->bindParam(':TrangThai', $this->TrangThai);
        
        return $stmt->execute();
    }

    public function read() {
        $query = "SELECT * FROM $this->table";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function update() {
        $query = "UPDATE $this->table 
                  SET Username = :Username, Password = :Password, MaQuyen = :MaQuyen, HoTen = :HoTen, 
                      DiaChi = :DiaChi, SoDienThoai = :SoDienThoai, Email = :Email, TrangThai = :TrangThai
                  WHERE MaTaiKhoan = :MaTaiKhoan";
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(':MaTaiKhoan', $this->MaTaiKhoan);
        $stmt->bindParam(':Username', $this->Username);
        $stmt->bindParam(':Password', password_hash($this->Password, PASSWORD_BCRYPT));
        $stmt->bindParam(':MaQuyen', $this->MaQuyen);
        $stmt->bindParam(':HoTen', $this->HoTen);
        $stmt->bindParam(':DiaChi', $this->DiaChi);
        $stmt->bindParam(':SoDienThoai', $this->SoDienThoai);
        $stmt->bindParam(':Email', $this->Email);
        $stmt->bindParam(':TrangThai', $this->TrangThai);
        
        return $stmt->execute();
    }

    public function delete() {
        $query = "DELETE FROM $this->table WHERE MaTaiKhoan = :MaTaiKhoan";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':MaTaiKhoan', $this->MaTaiKhoan);
        return $stmt->execute();
    }

    public function login() {
        $query = "SELECT * FROM $this->table WHERE Username = :Username";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':Username', $this->Username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user && password_verify($this->Password, $user['Password'])) {
            return $user;
        }
        return false;
    }

    public function resetPassword() {
        $query = "UPDATE $this->table SET Password = :Password WHERE Email = :Email";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':Email', $this->Email);
        $stmt->bindParam(':Password', password_hash($this->Password, PASSWORD_BCRYPT));
        return $stmt->execute();
    }

    public function checkUsernameExists() {
        $query = "SELECT COUNT(*) FROM $this->table WHERE Username = :Username";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':Username', $this->Username);
        $stmt->execute();
        return $stmt->fetchColumn() > 0;
    }

    public function searchByUsername($search) {
        $query = "SELECT * FROM $this->table WHERE Username LIKE :search";
        $stmt = $this->conn->prepare($query);
        $search = "%$search%";
        $stmt->bindParam(':search', $search);
        $stmt->execute();
        return $stmt;
    }
}
