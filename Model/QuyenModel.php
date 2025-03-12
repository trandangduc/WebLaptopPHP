<?php
require_once 'config.php';
class Quyen {
    private $conn;
    private $table = "Quyen";

    public $MaQuyen;
    public $TenQuyen;

    public function __construct() {
        $this->conn = getConnection();
    }

    public function create() {
        $query = "INSERT INTO $this->table (TenQuyen) VALUES (:TenQuyen)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':TenQuyen', $this->TenQuyen);
        return $stmt->execute();
    }

    public function read() {
        $query = "SELECT * FROM $this->table";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function update() {
        $query = "UPDATE $this->table SET TenQuyen = :TenQuyen WHERE MaQuyen = :MaQuyen";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':MaQuyen', $this->MaQuyen);
        $stmt->bindParam(':TenQuyen', $this->TenQuyen);
        return $stmt->execute();
    }

    public function delete() {
        $query = "DELETE FROM $this->table WHERE MaQuyen = :MaQuyen";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':MaQuyen', $this->MaQuyen);
        return $stmt->execute();
    }
}