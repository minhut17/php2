<?php
namespace app;

use app\core\Database;
use PDO;

class Login extends Database
{

    private $email;
    private $pwd;

    private $connect;

    function __construct(){
        $this->connect = new Database;
    }

    public function login()
    {
        if (isset($_SESSION['user'])) {
            $fname = $_SESSION['user']['user_name'];
            echo " {$fname} <a href= '/logout'>logout</a>";
        } else {
            echo '
        <form action="/loginUser" method="post">
        <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" name="email" >
        </div>
        <div class="form-group">
        <label for="">PassWord</label>
        <input type="password" class="form-control" name="password" >
        </div>
        <button type="submit"name="submit" class="btn btn-primary" value= "submit" >submit</button>
        </form>
        ';
        }
        

    }
    public function emptyInput()
    {
        if (empty($this->email) || empty($this->pwd)) {
            return false; // Trường nào đó rỗng
        }
        return true; // Không có trường nào rỗng
    }

    public function invalidEmail()
    {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return false; // Địa chỉ email không hợp lệ
        }
        return true; // Địa chỉ email hợp lệ
    }
    public function loginUser()
    {
        if (isset($_POST['submit'])) {
            $this->email = $_POST['email'];
            $this->pwd = $_POST['password'];
            // $this->loginUser();
            // header('location:/login');
        }
        if ($this->emptyInput() == false) {
            echo 'bạn không được bỏ trống!';
            // header('location:/register?error=emptyInput');
            exit();
        }
        if ($this->invalidEmail() == false) {
            echo 'email không hợp lệ';
            // header('location:/register?error=email');
            exit();
        }
        // var_dump($this->email);
        $this->getUser($this->email, $this->pwd);
    }
    public function logout()
    {
        unset($_SESSION['user']);
        var_dump($_SESSION['user']);
        header('location: /login');
    }
    public function getUser($email, $pwd)
    {
        
        // var_dump($this->connect);
        $user = $this->connect->query_one("SELECT * FROM users WHERE user_email = '$email'");
        // if($stmt->num_rows == 0 ){
        //     $stmt = null;
        //     // header('location:/upload');
        //     exit('numrows=0');
        // }
        // Lấy thông tin người dùng


        if(!empty($user)){
            // var_dump($user['user_password']);
        $checkpwd = password_verify($pwd, $user['user_password']);
        if($checkpwd == false){
            $stmt = null ;
            // header('location:/');
            echo "đăng nhập thất bại!";
            exit('sai mat khau');
        }else{
            echo "đăng nhập thành công";
            $_SESSION['user']=$user;
            header('location:/login');
        }
        }else{
            echo "đăng nhập thất bại tài khoản không tồn tại!";
            exit('sai mat khau');
        }
        

    }
}
