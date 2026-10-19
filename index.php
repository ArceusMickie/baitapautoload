<?php

// Trait Logger: cung cấp method log() để in thông báo
trait Logger
{
    public function log($message)
    {
        echo "[LOG] " . $message . PHP_EOL;
    }
}

// Class ProductService sử dụng Trait Logger
class ProductService
{
    use Logger;

    public function addProduct($name)
    {
        // ... xử lý thêm sản phẩm ...
        $this->log("Đã thêm sản phẩm: " . $name);
    }
}

// Class UserService sử dụng Trait Logger
class UserService
{
    use Logger;

    public function registerUser($username)
    {
        // ... xử lý đăng ký người dùng ...
        $this->log("Đã đăng ký người dùng: " . $username);
    }
}

// Chạy thử
$productService = new ProductService();
$productService->addProduct("Trà sữa trân châu");

$userService = new UserService();
$userService->registerUser("nguyenvana");