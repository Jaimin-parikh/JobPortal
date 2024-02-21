<?php

require_once('../Model/login.php');

use login\Login as Login;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = new Login();
    $fetch_data = $login->login($username);

    $db_password = $fetch_data['password'];
    $identity = $fetch_data['identity'];

    if (password_verify($password, $db_password)) {
        // if login user is employer then redirect him to job posting page
        session_start();
        $_SESSION["username"] = $fetch_data['username'];
        $_SESSION["user_id"] = $fetch_data['id'];

        if ($identity == 'employee') {

            header('Location: ../View/jobs.php');
            exit();
        }

        // else  redirect him to job listin page 
        else {
            header('Location: ../View/listing.html');
            exit();
        }
    } else {
        echo "<h1 style = \"text-align : center\">Wrong password !</h1>";
    }
}
