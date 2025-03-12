<?php
class Router {
    private $database;
    
    public function __construct() {
        require_once 'config.php';
        $this->database = getConnection();
    }

    public function route() {
        // Lấy URL và tách thành mảng
        $path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
        $path = preg_replace('/^WebLaptopPHP\//', '', $path); // Bỏ 'WebLaptop/' từ URL
        
        $parts = explode('/', $path);
       
        // Xác định controller và action
        $controller = ucfirst($parts[0]) . 'Controller';
      
        $action = $parts[1] ?? 'index';
        $id = $parts[2] ?? null;
      
        // Kiểm tra và chạy controller
        $controllerPath = "controller/$controller.php";
      
        if (file_exists($controllerPath)) {
            require_once $controllerPath;
            $controllerInstance = new $controller($this->database);
            if (method_exists($controllerInstance, $action)) {
                $controllerInstance->$action($id);
                return;
            }
        }
        
        // Trả về 404 nếu không tìm thấy
        header("HTTP/1.0 404 Not Found");
        echo "404 Not Found";
    }
}

// Sử dụng router
$router = new Router();
$router->route();