<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Core\BaseRender;
// use App\Models\User;
use App\Models\Database;
use App\Core\Mailer;

use PDO;

class LoginController extends BaseController
{

    private $_renderBase;
    protected $_connection;

    /**
     * Thuốc trị đau lưng
     * Copy lại là hết đau lưng
     * 
     */
    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new BaseRender();
        $this->_connection = new Database();
    }

    function LoginController()
    {
        $this->login();
    }

    function login()
    {
        // dữ liệu ở đây lấy từ repositories hoặc mode


        $this->_renderBase->renderAdminHeader();
        // $this->load->render('layouts/client/slider');
        $this->load->render('layouts/client/login');
        $this->_renderBase->renderAdminFooter();
    }


    function Error()
    {
        $this->load->render('layouts/client/404');
    }
    public function LoginUser()
    {
        if (isset($_POST['submitLogin'])) {
            $email = $_POST['email'];
            $pwd = $_POST['password'];
            // Kết nối đến cơ sở dữ liệu (giả sử bạn đã có đối tượng $db)
         
            $stmt = $this->_connection->pdo()->prepare("SELECT * FROM users WHERE user_email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_ASSOC);




            if (!empty($user)) {
                var_dump($user['user_password']);
                $checkpwd = password_verify($pwd, $user['user_password']);
                if ($checkpwd == false) {
                    $stmt = null;
                    // header('location:/');
                    // echo "đăng nhập thất bại!";

                } else {
                    echo "đăng nhập thành công";
                    $_SESSION['user'] = $user;
                    header('location:/login');
                }
            } else {
                echo "đăng nhập thất bại tài khoản không tồn tại!";
                exit('sai mat khau');
            }
        }
    }
    public function logout()
    {
        unset($_SESSION['user']);
        var_dump($_SESSION['user']);
        header('location: /login');
    }
    public function forgotPwd(){
        $this->load->render('layouts/client/forgotPwd');
    }
//     public function resetPwd(){
//         if(isset($_POST['forgotPwd'])){
//             $user_email = $_POST['email'];
//             $token = bin2hex(random_bytes(16));
//             $token_hash = hash('sha256',$token);
//             $expiry = date("Y-m-d H:i:s", time()+ 60 * 3);
        
//              $sql = "UPDATE users
//                     SET reset_token_hash = :reset_token_hash,
//                         reset_token_at = :reset_token_at
//                     WHERE user_email = :user_email";
                    
//             $stmt = $this->_connection->pdo()->prepare($sql);
//             $stmt->bindParam(':reset_token_hash', $token_hash);
//             $stmt->bindParam(':reset_token_at', $expiry); // Sửa đổi $expiry ở đây, không nên sử dụng $token_hash
//             $stmt->bindParam(':user_email', $user_email);
//             $stmt->execute();
        
//             // if($stmt->rowCount() > 0){ // Sửa đổi $stmt::num_row thành $stmt->rowCount()
//             $mail = new Mailer ;
//             // $mail = new PHPMailer;

// // Cấu hình SMTP
// $mail->isSMTP();
// $mail->Host = 'smtp.example.com';
// $mail->SMTPAuth = true;
// $mail->Username = 'your_username';
// $mail->Password = 'your_password';
// $mail->SMTPSecure = 'tls';
// $mail->Port = 587;

// // Thiết lập thông tin người gửi và người nhận
// $mail->setFrom('from@example.com', 'Your Name');
// $mail->addAddress($user_email, 'Recipient Name');

// // Thiết lập tiêu đề và nội dung của email
// $mail->Subject = 'Test Email';
// $mail->Body = 'This is a test email.';

// // Gửi email
// if($mail->send()) {
//     echo 'Email đã được gửi thành công.';
// } else {
//     echo 'Gửi email thất bại: ' . $mail->ErrorInfo;
// }
//             // $mail->setFrom("noreply@examp.com");
//             // $mail->addAddress($user_email);
//             // $mail->Subject = "Password Reset";
//             // $mail->Body = <<<END
            

//             // click <a href="http://127.0.0.1:8000/?url=LoginController/resetPwd&token=$token">here</a> 
//             // to reset your password.
//             // END;
//             //     try{
//             //         $mail->send();
//             //         echo "ugui mailk thành công";
//             //     }catch(\Exception $e){
//             //         echo "mail chau được gửi lỗi:{$user_email->ErrorInfo}";
//             //     }
//             //     echo "gửi mail thành công";
//             // }
          
    

//           }
  



//         }
    



}
