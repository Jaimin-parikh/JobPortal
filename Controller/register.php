<?php

require ('../Model/registration.php');
use registration\Registration as Registration;

$data = new Registration();

$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

$query = "SELECT * FROM registration WHERE username = '$username'";
$num = mysqli_num_rows($conn->query($query));

if($num!=0){
    echo "<h1 style='text-align:center'> User alredy exist</h1>";
}
else{
    $data->register($username, $email, $password);
}
?>