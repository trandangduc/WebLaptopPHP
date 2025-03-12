<?php
require_once 'Model/BannerModel.php';
require_once 'Model/SanPhamModel.php';
 
class HomeController {
    private $modelbanner;
    private $modelsanpham;

    public function __construct() {
        $this->modelbanner = new Banner() ;
        $this->modelsanpham = new SanPham() ;
    }
    public function index() {
        $banner = $this->modelbanner->getAllBanners();
        $sp = array_slice($this->modelsanpham->getAll(),0,8);
        require_once __DIR__ .'/../views/Home/Index.php';
    }
   
}
?>
