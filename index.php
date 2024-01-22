<?php 
require "vendor/autoload.php";
use app\core\Form;
use app\core\Field;
use app\models\user;

// $user = new user('user');

// $form = new Form;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab3_php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Create an account</h1>
        <?php $form = Form::begin("",'post');?>
        <div class="row">
            <div class="col">
                <?= $form->field('lastname')?>
                <?= $form->field('lastname')?>
            </div>
           
        </div>
        <?= $form->field('email')?>
        <?= $form->field('password')->passwordField();?>
        <?= $form->field('confirmPassword')->passwordField();?>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
        <?= Form::end();?>
    </div>
    <!-- <div>Bài tập thêm 4</div> -->
    <?php
    //  $user->getAll()
     ?>
</body>
</html>