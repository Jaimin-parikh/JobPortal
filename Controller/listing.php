<?php

require_once('../Model/post.php');

if(empty($_POST['title'])){
    echo "Enter info";
    die();
}
$data = [
    "title" => $_POST['title'],
    "company" => $_POST['company'],
    "remote" => $_POST['remote'],
    "type" => $_POST['type'],
    "description" => $_POST['description'],
];

$post = new Post();
$post->insert_into_post($data);
