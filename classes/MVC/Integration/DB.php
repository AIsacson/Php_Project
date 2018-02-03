<?php

namespace MVC\Integration;

 class DB {
     
    public function connect() {
        require '/Users/annaisacson/Desktop/DBInfo.php';
        $conn = mysqli_connect($host, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: ".mysqli_connect_error());
        }
        return $conn;
    }        
 }
