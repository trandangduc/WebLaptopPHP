<?php
require_once 'Model/BannerModel.php';
require_once 'Model/SanPhamModel.php';

class HomeController {
    private $db;

    public function __construct($database) {
        $this->db = $database;
    }

   
}
?>
