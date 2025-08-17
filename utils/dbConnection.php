<?php

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="php-project";

    $connection=new mysqli($servername,$username,$password,$dbname);

    if($connection->connect_error){
        die("Connection failed: " . $connection->connect_error);
    } else {
        echo "Connected successfully";
    }

?>