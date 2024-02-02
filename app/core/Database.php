<?php
namespace app\core;

use \PDO;
use PDOException;

class Database
{   private $host = 'localhost';
    private $dbname = 'dtl';
    private $username = 'root';
    private $password = 'mysql';

    public $conn;

    // Phương thức khởi tạo, thực hiện kết nối đến cơ sở dữ liệu
    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Kết nối đến cơ sở dữ liệu thất bại: ' . $e->getMessage();
        }
    }
      
    
      private function execute($sql)
        {
            $sql_args = array_slice(func_get_args(), 1);
            try {           
                $stmt = $this->conn->prepare($sql);
                $stmt->execute($sql_args);
            } catch (PDOException $e) {
                throw $e;
            } finally {
                unset($this->conn);
            }
        }
    
        function query($sql)
        {
            $sql_args = array_slice(func_get_args(), 1);
            try {
                $stmt = $this->conn->prepare($sql);
                $stmt->execute($sql_args);
                $rows = $stmt->fetchAll();
                return $rows;
            } catch (PDOException $e) {
                throw $e;
            } finally {
                unset($this->conn);
            }
        }
    
        function query_one($sql)
        {
            $sql_args = array_slice(func_get_args(), 1);
            try {
                $stmt = $this->conn->prepare($sql);
                $stmt->execute($sql_args);
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                return $row;
            } catch (PDOException $e) {
                throw $e;
            } finally {
                unset($this->conn);
            }
        }
    
        function query_value($sql)
        {
            $sql_args = array_slice(func_get_args(), 1);
            try {
                $stmt = $this->conn->prepare($sql);
                $stmt->execute($sql_args);
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                return array_values($row)[0];
            } catch (PDOException $e) {
                throw $e;
            } finally {
                unset($this->conn);
            }
        }
    
        function execute_return_lastID($sql){
            $sql_args = array_slice(func_get_args(), 1);
            try {
                $stmt = $this->conn->prepare($sql);
                $stmt->execute($sql_args);
                return $this->conn -> lastInsertId();
            }
            catch(PDOException $e){
                throw $e;
            }
            finally{
                unset($this->conn);
            }
        }
    }

    








