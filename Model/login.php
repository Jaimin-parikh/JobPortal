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
            $fetch_data = mysqli_fetch_assoc($result);
            $password = $fetch_data['password'];
            $identity = $fetch_data['identity'];

            if (password_verify($input, $password)) {
                // if login user is employer then redirect him to job posting page
                if ($identity == 'employee') {
                    header('Location: ../View/jobs.php');
                }
                 
                // else  redirect him to job listin page 
                else {
                    header('Location: ../View/listing.html');
                }
            } else {
                echo "<h1 style = \"text-align : center\">Wrong password !</h1>";
            }
        } else {
            header('Location: ../View/signup.html');
        }
    }
}
