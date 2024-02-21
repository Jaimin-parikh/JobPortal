<?php

use function connection\build_connection;

require('../Model/connection.php');

class Post{
        function insert_into_post($data,$table_name = 'post'){
            $redirect = 'Location: ../View/successful.html'; 
            \connection\insert($data,$table_name,$redirect);
        }
        function display(){
            $conn = build_connection();
            $query = "SELECT * FROM post";
            $result = $conn->query($query);
            
            while($row = mysqli_fetch_assoc($result)){
                $rows[] = $row;
            }   
            return $rows;
        }
}