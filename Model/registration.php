<?php

namespace registration;

require('connection.php');


$conn = \connection\build_connection();

class Users
{
    public static function check_user($username)
    {
        global $conn;
        $query = "SELECT * FROM users WHERE username = '$username'";
        $result = $conn->query($query);
        if (mysqli_num_rows($result) > 0) {
            return true;
        } else
            return false;
    }
    public function register_user($data,$table_name)
    {
        $username = $data['username'];
        if (Users::check_user($username)) {
            echo "<h1 style=\"text-align : center\">User Already Exists!<br><a href= '../View/index.html'>Login Here!</a></h1>";
        } else {
            $redirect = 'Location: ../View/index.html';
            \connection\insert($data,$table_name,$redirect);
        }
    }
}
