<?php
session_start();      
    $server="localhost";
    $username="root";
    $password="";
    $database = "demo";
               
    //creting connection
    $conn =mysqli_connect($server, $username, $password,$database);
    if($conn) {
       // echo "connection sucessful";
    } else {
        echo "no connection ";
    } 
    ?>  