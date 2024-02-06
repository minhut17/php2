<?php
namespace App\Core;

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mailer
{
    public $mail;
    function __construct()
    {
        $this->mail = new PHPMailer(true);
        $this->mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $this->mail->isSMTP();
        $this->mail->SMTPAuth = true;
        //Create an instance; passing `true` enables exceptions


        $this->mail->Host = "smtp.example.com";
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $this->mail->Port = 597;
        $this->mail->Username = 'your-user@exampole.com';
        $this->mail->Password = "you0password";
        $this->mail->isHTML(True);
        $this->mail;


    }
    //Load Composer's autoloader



}


