<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="property";
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    
    if($conn->connect_error){
        die("connection failed:".$conn->connect_error);
    }
    else {
        echo "connected"."<br>";
    }
    ?>