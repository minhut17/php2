<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Core\BaseRender;
use App\Models\User;

class ReristerController extends BaseController
{

    private $_renderBase;


    /**
     * Thuốc trị đau lưng
     * Copy lại là hết đau lưng
     * 
     */
    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new BaseRender();

    }

    function rerister()
    {
        //load model



        // laod view
        $this->_renderBase->renderAdminHeader();
        // $this->load->render('layouts/client/slider');
        $this->load->render('layouts/client/rerister');
        $this->_renderBase->renderAdminFooter();
    }
    public function createUser()
    {
        if (isset($_POST['submitRerister'])) {
            
        
            $password = $_POST['password'];
            $pwhash = password_hash($password, PASSWORD_DEFAULT);


            $data = [
                'user_name' => $_POST['username'],
                'user_email' => $_POST['email'],
                'user_password' => $pwhash
            ];


            $_user = new user();
            $_user->create($data);
            header('location:'.ROOT_URL.'?url=LoginController/login');


        }

    }



}
