<?php
    include("connection.php");

    
    $sql = "select * from user where isloggedin = 1";
    $result = mysqli_query($conn,$sql);

    if($result){
        $result = mysqli_query($conn,"update user set isloggedin = 0 where isloggedin = 1");
        echo '<script>
            window.location.href = "loggedout.php";
            </script>';
    } 
    else{
        echo '<script>
            window.location.href = "loggedout.php";
            alert("Logout successful, no one was logged in")
            </script>';
    }

?>