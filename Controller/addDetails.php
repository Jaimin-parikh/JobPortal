<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
   
    $resume = $_FILES['resume'];
    $target = "../../resume/";
    $path = $target . $resume['name'];
    move_uploaded_file($resume["tmp_name"], $path);

    $data = [
    // "user_id" => $_SESSION['user']['id'],
    "first_name" => $_POST['fname'],
    "last_name" => $_POST['lname'],
    "city" => $_POST['city'],
    "state" => $_POST['state'],
    "phoneno" => $_POST['phoneno'],
    "resume" => $path
    ];
}
