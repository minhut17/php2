<?php
namespace app;

use app\core\Database;
 $data = new Database;

class Login extends Database
{
    private $email;
    private $pwd;
   
    public function login()
    {   
        if (isset($_SESSION['user'])) {
            $fname = $_SESSION['user']['user_name'];
            echo " {$fname} <a href= '/logout'>logout</a>";
        }else{
        echo '
        <form action="/login" method="post">
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
        if(isset($_POST['submit'])){
            $this->email = $_POST['email'];
            $this->pwd = $_POST['password'];
            $this->loginUser();
            // header('location:/login');
        }

    }
    public function emptyInput() {
        if (empty($this->email) || empty($this->pwd)) {
            return false; // Trường nào đó rỗng
        }
        return true; // Không có trường nào rỗng
    }

    public function invalidEmail() {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return false; // Địa chỉ email không hợp lệ
        }
        return true; // Địa chỉ email hợp lệ
    }
    public  function loginUser(){
        if($this->emptyInput()==false){
            echo 'bạn không được bỏ trống!';
            // header('location:/register?error=emptyInput');
            exit();
        }
        if($this->invalidEmail()==false){
            echo 'email không hợp lệ';
            // header('location:/register?error=email');
            exit();
        }
    $this->getUser($this->email,$this->pwd);
    }
    public function logout(){
        session_unset();
        session_destroy();
        header('location:/');
    }
    public function getUser($email,$pwd){
        $stmt = $this->connect()->query("SELECT * FROM users WHERE user_email = '{$email}'");
        if($stmt::num_rows == 0 ){
            $stmt = null;
            // header('location:login?error= usernotfoun');
            exit();
        }
        $user = $stmt::fetch_assoc();//one row
    
            $checkpwd = password_verify($pwd, $user['password']);
            if($checkpwd == false){
                $stmt = null ;
                // header('location:login?error=wrongpasswprd');
                echo "đăng nhập thất bại!";
                exit();
            }else
            {
                echo "đăng nhập thành công";
                $_SESSION['user']=$user;
                
                
            }

    }
}
