<?php

include "Model.php";

$email = isset($_POST['email']) ? $_POST['email'] : '';
$user = get_user($email);
include "view.php"
?>