<?php
namespace Core;
use mysqli;


class Database{
    public function __construct(){
        $servername ="localhost";
        $username = "root";
        $password = "mysql";

        $conn = new mysqli($servername,$username,$password);
        if(!$conn){
            die("connection failed: ".$conn->connect_error());
        }
        echo "connection successfully";
    }

    public function Helloworld(){
        echo "Hello World";
    }
}


?>