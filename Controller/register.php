<?php

require ('../Model/registration.php');
use registration\Registration as Registration;

$data = new Registration();
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$password = password_hash($password, PASSWORD_BCRYPT);

$data->register($username, $email, $password);

?>