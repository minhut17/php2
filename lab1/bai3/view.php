<?php
if(isset($user['name'])){
    echo $user['name']." - ".$user['email'];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bài 3 Lab1</title>
</head>
<body>
<h2> Lấy user từ cơ sở dữ liệu</h2>
<form action="" method="post">
    <input type="email" name="email">
    <input type="submit">
</form>
</body>
</html>
