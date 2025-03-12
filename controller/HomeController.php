<?php
require_once 'Model/Voucher.php';
require_once 'Model/Banner.php';
require_once 'Model/SanPham.php';

class HomeController {
    private $db;

    public function __construct($database) {
        $this->db = $database;
    }

   
}
?>
