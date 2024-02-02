<?php 
session_start();
require "vendor/autoload.php";
use app\core\Route;




$router = new Route;
$router
->get('/',[app\Home::class,'index'])
->post('/upload',[app\Home::class,'upload'])
->get('/login',[app\Login::class,'login'])
->get('/demo',[app\Home::class,'demo'])
->post('/loginUser',[app\Login::class,'loginUser'])
->get('/logout',[app\Login::class,'logout']);


// Giải quyết yêu cầu hiện tại
try {
    $router->resolve($_SERVER['REQUEST_URI'],strtolower($_SERVER['REQUEST_METHOD'])); 
    // var_dump ($router);
} catch (\app\core\RouteNotFoundException $e) {
    echo '404 Không Tìm Thấy';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab5</title>
</head>
<body>
    
</body>
</html>