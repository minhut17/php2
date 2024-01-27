<?php 
require "vendor/autoload.php";
use app\core\Route;


// bai3-Lab4 tạo route với action là function
$router = new Route;
$router
->get('/',[app\Home::class,'index'])
->post('/upload',[app\Home::class,'upload']);


// // $router->register('/',function(){echo "trang đăng ký";});
// // bai4-lab4 tạo route với action là class và method
//  $router->get('/',[app\Home::class,'index']);


// ->register('/',[app\Home::class,'index'])
// ->register('/Invoices',[app\Invoices::class,'index'])
// ->register('/Invoices/create',[app\Invoices::class,'create']);

// Giải quyết yêu cầu hiện tại
try {
    echo $router->resolve($_SERVER['REQUEST_URI'],strtolower($_SERVER['REQUEST_METHOD'])); 
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