<?php
$server = "localhost";
$username = "root";
$password = "mysql";
$database = "todolist";


global $connection;
$connection = new mysqli($server, $username, $password, $database);

if (!$connection) {
    echo "lỗi kết nối database";
    die();

}