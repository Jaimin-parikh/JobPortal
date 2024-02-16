<?php

require ('../Model/registration.php');
use registration\Registration as Registration;

$data = new Registration();

$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

$register = new Registration();
$register->register_user($username, $email, $password);

?>