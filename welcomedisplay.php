<?php
    include("connection.php");
    
    if(isset($_POST['refresh'])){    
    
    $sql = "select * from user where isloggedin = 1"; //select all from user that match the name and pass typed in
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);

    $name = $row[0];
    $AvgDailyCals = $row[5];

    if($result){ 
            echo '<script>
            window.location.href = "welcome.php";
            alert("Hello, '.$name.'! Your average daily calories are '. $AvgDailyCals .' cals")
            </script>';
    } 
    else{
        echo '<script>
            window.location.href = "welcome.php";
            alert("Refresh failed, please try again")
            </script>';
    }
}

?>