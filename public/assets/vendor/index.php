<?php
// Tentukan BASE_URL di sini agar bisa digunakan di Controller,
// atau ganti '/latihan-php/public/index.php' dengan path yang sesuai
define('BASE_URL', '/latihan-php/public/index.php'); // <-- Tambahkan ini

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'index';
}

// Ganti baris ini:
// include ('../controllers/TodoController.php');

// Dengan jalur absolut yang aman:
include __DIR__ . '/../controllers/TodoController.php'; 

$todoController = new TodoController();
switch ($page) {
    case 'index':
        $todoController->index();
        break;
    case 'create':
        $todoController->create();
        break;
    case 'update':
       $todoController->update();
        break;
    case 'delete':
        $todoController->delete();
        break;
}