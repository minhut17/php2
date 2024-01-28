<?php
namespace app\core;

use \PDO;

class Database
{
   
    protected function connect()
    {
        $servername = "localhost";
        $username = "root";
        $password = "mysql";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=dtl", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}



// class Database {
//     private $host;
//     private $username;
//     private $password;
//     private $dbname;
//     private $charset;

//     private $conn;

//     public function __construct($host, $username, $password, $dbname, $charset = 'utf8') {
//         $this->host = $host;
//         $this->username = $username;
//         $this->password = $password;
//         $this->dbname = $dbname;
//         $this->charset = $charset;

//         $this->connect();
//     }

//     private function connect() {
//         try {
//             $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset={$this->charset}";
//             $options = [
//                 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//                 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//                 PDO::ATTR_EMULATE_PREPARES => false,
//             ];

//           $this->conn = new PDO($dsn, $this->username, $this->password, $options);

//         } catch (\PDOException $e) {
//             die("Connection failed: " . $e->getMessage());
//         }
//     }

//     public function getConnection() {
//         return $this->conn;
//     }
// }

// // Sử dụng:
// $host = "localhost";
// $username = "root";
// $password = "mysql";
// $dbname = "da1";

// $database = new Database($host, $username, $password, $dbname);

// // Lấy kết nối
// $conn = $database->getConnection();




