<?php

$host= "localhost";
$user= "root";
$pass= "";
$db= "sem2project";
$conn= new mysqli($host, $user, $pass, $db);
if($conn->connect_error){
    echo "Failed to connect to the DB".$conn->connect_error;
}

?> 