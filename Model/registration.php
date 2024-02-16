<?php

namespace registration;

require('connection.php');

$conn = \connection\build_connection();

class Registration
{
    public $username;
    public $email;
    public $password;

    public static function check_user($username)
    {
        global $conn;
        $query = "SELECT * FROM registration WHERE username = '$username'";
        $result = $conn->query($query);
        if (mysqli_num_rows($result) > 0) {
            return true;
        } else
            return false;
    }
    public function register_user($username, $email, $password)
    {
        global $conn;
        if (Registration::check_user($username)) {
            echo "<h1 style=\"text-align : center\">User Already Exists!</h1>";
        } else {
            $query = "INSERT INTO registration(`username`, `email`, `password`) VALUES ('$username','  $email',' $password');";
            $conn->query($query);
            if ($conn) {
                header('Location: ../View/index.html');
                exit();
            }
        }
    }
}
