<?php
    include("connection.php");
    if(isset($_POST['signupsubmit'])){
    $username = $_POST['signupuser'];
    $password = $_POST['signuppass'];
    $phone = $_POST['signupphone'];
    $email = $_POST['signupemail'];

    $query = "insert into user(name,password,phone#,email,ID,AvgDailyCals) values ($username,$password,$phone,$email,'','')";

    $run = mysqli_query($conn,$query);
    
    if($run){
        echo "form submitted successfully";
    }
    else{
        echo "form not submitted";
    }


    
}
?>