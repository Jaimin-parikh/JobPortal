<?php

require_once('../Model/login.php');
use login\Login as Login;

$username = $_POST['username'];
$password = $_POST['password'];

$login = new Login();
$login->login($username, $password);

?>