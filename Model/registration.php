<?php

namespace registration;
require ('connection.php');

$conn = \connection\build_connection();

class Registration{
    public $username;
    public $email;
    public $password;

    public function register($username, $email, $password){
        global $conn;
        $query = "INSERT INTO registration(`username`, `email`, `password`) VALUES ('$username','  $email',' $password');";
        $conn->query($query);
        if($conn){
            header('Location: ../View/index.html');
            exit();
        }
    }
}


?>