<?php

namespace connection;

function build_connection(){
     $username = "root";
     $server = "localhost";
     $password = "";
     $database = "job_portal";
     $conn = new \mysqli($server, $username, $password, $database);
     return $conn;
}
function insert($data,$table_name,$redirect){
     $conn = build_connection();
     $keys = implode(",",array_keys($data));
            $values = '"'.implode('","',array_values($data)).'"';
            $query = "INSERT INTO $table_name ($keys) VALUES ($values);";
            $conn->query($query);
            if ($conn) {
                header($redirect);
                exit();
            }
            else{
                echo "something happened";
            }
}
?>