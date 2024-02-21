<?php

use function connection\build_connection;

require('../Model/connection.php');

class Jobs{
        function insert_into_jobs($data,$table_name = 'jobs'){
            $redirect = 'Location: ../View/successful.html'; 
            \connection\insert($data,$table_name,$redirect);
        }
        function display(){
            $conn = build_connection();
            $query = "SELECT * FROM jobs";
            $result = $conn->query($query);
            
            while($row = mysqli_fetch_assoc($result)){
                $rows[] = $row;
            }   
            return $rows;
        }
}