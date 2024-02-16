<?php

namespace login;

require_once('../Model/registration.php');

use registration\Registration as Registration;

use function connection\build_connection;

class Login
{
    public function login($username, $input)
    {
        if (Registration::check_user($username)) { 
            $conn = build_connection();
            $query = "SELECT * FROM registration WHERE username = '$username';";
            $result = $conn->query($query);
            $password = mysqli_fetch_assoc($result)['password'];
            
            if(password_verify($input, $password)){
                echo "<h1 style = \"text-align : center\">Login Successful!</h1>";
            }
            else{
                echo "<h1 style = \"text-align : center\">Wrong password !</h1>";
            }

        } else {
            header('Location: ../View/signup.html');
        }
    }
}
