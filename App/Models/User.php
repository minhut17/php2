<?php

namespace App\Models;



class User extends BaseModel{
    
    protected $table = 'users';

    
    public function getAllUser()
    {
        return $this->getAll();
    }
    public function getOneUser($id)
    {
        return $this->getOne($id);
    }

    public function updateUser($id, $data)
    {
        return $this->update($id, $data);
    }
    public function deleteUser($id)
    {
        return $this->delete($id);
    }


    public function createUser($data){
        return $this->create($data);
    }
    public function checkmail($user_email)
    {
       return $this->checkmailn($user_email);
    }
    public function getOTP($user_email){
        return $this->getOTPn($user_email);
        
    }
    public function resetPass($pass,$otp){
        return $this->resetPassn($pass,$otp);
    }
}