<?php
session_start();
use App\Models\Category;
require_once 'vendor/autoload.php';
require_once 'index.html';
define("ROOT_URL", "http://127.0.0.1:8000/");
// define('VIEW_URL', 'http://127.0.0.1:8000/App/Views/lyouts/client');


// use App\Controllers\BaseController;
// use App\Controllers\HomeController;
use App\Core\Route;

// // new BaseController();

// // new HomeController();

new Route;
// use App\Models\User;

// $userModel = new User();
// var_dump($userModel->getOneUser(2));
// $category=new Category();
// var_dump($category->deleteCategory(1));