<?php

namespace login;

require_once('../Model/registration.php');

use registration\Users as Users;

use function connection\build_connection;

class Login
{
    public function login($username)
    {
        if (Users::check_user($username)) {
            $conn = build_connection();
            $query = "SELECT * FROM users WHERE username = '$username';";
            $result = $conn->query($query);
            $fetch_data = mysqli_fetch_assoc($result);
            return $fetch_data;
        } else {
            header('Location: ../View/signup.html');
            exit();
        }
    }
}
