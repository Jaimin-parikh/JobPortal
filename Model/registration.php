<?php

namespace registration;

require('connection.php');

$conn = \connection\build_connection();

class Registration
{
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
    public function register_user($data)
    {
        global $conn;
        $username = $data['username'];
        if (Registration::check_user($username)) {
            echo "<h1 style=\"text-align : center\">User Already Exists!</h1>";
        } else {
            $keys = implode(",",array_keys($data));
            $values = '"'.implode('","',array_values($data)).'"';
            $query = "INSERT INTO registration ($keys) VALUES ($values);";
            $conn->query($query);
            if ($conn) {
                header('Location: ../View/index.html');
                exit();
            }
            else{
                echo "something happened";
            }
        }
    }
}
