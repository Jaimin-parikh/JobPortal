<?php

namespace login;

require_once('../Model/registration.php');

use registration\Registration as Registration;

// use function connection\build_connection;

class Login
{
    public function login($username, $input)
    {
        if (Registration::check_user($username)) { 
            echo"<h1 style = \"text-align : center\">Welcome!</h1>";

        } else {
            header('Location: ../View/signup.html');
        }
    }
}
