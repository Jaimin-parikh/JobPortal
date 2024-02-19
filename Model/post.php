<?php

use function connection\insert;

require ('../Model/connection.php');

class Post{
        function insert_into_post($data,$table_name = 'post'){
            $redirect = 'Location: ../View/successful.html'; 
            insert($data,$table_name,$redirect);
        }
}