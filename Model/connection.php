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

?>