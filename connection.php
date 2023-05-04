<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "calorietracker";
    $conn = new mysqli($servername, $username, $password, $db_name);
    if($conn->connect_error){
        die("Connection Falied".$conn->connect_error);

    }
?>