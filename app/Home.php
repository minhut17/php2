<?php
namespace app;
class Home{
    public function index(){
    echo <<<FORM
    <form action="/upload" method="post" enctype="multipart/form-data">
        <input type="file" name="receipt">
        <button type="submit">upload</button>
    </form>
    FORM;
    
    }
    public function upload(){
      
      $file = $_FILES['receipt'];
    //đổi tên 
    $fileName = $file['name'];
    $fileNames = explode('.',$fileName);
    $duoi = end($fileNames);
    $newFile = md5(uniqid()).'.'.$duoi;
    move_uploaded_file($file['tmp_name'],'uploads/'.$newFile);
    
    
    }
     public function demo(){
       return "demo";     
      }
    }
