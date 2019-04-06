<?php
    $servername= "localhost";
    $username= "root";
    $password= "";
    $dbname= "tienda";

    // create connection to database

    $conn= new mysqli($servername, $username, $password, $dbname);
    // cheking

    if($conn->connect_error){
        die("connection failed: ".$connect->connect_error);
    }else{
        echo "I am connected to tienda";
    }

?>