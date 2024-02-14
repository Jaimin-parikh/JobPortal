<?php

require('../Model/connection.php');

$username = $_POST['username'];
$password = $_POST['password'];
// $passerr = null;

$conn = connection\build_connection();

$query = "SELECT * FROM registration WHERE username = '$username' ;";

$result = $conn->query($query);
$num = mysqli_num_rows($result);
if($num==0){
    header('Location: ../View/signup.html');
    exit();
}
else{
    
}

?>