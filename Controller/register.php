<?php

require('../Model/registration.php');

use registration\Registration as Registration;
use registration\Users;

$data = new Users();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = [
        "username" => $_POST['username'],
        "email" => $_POST['email'],
        "password" => password_hash($_POST['password'], PASSWORD_DEFAULT),
        "identity" => $_POST['identity'],
    ];
}

$register = new Users();
$register->register_user($data,'users');
