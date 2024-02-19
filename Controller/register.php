<?php

require('../Model/registration.php');

use registration\Registration as Registration;

$data = new Registration();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
}

$register = new Registration();
$register->register_user($username, $email, $password);
