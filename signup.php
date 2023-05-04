<?php
    include("connection.php");
    if(isset($_POST['signupsubmit'])){
    $username = $_POST['signupuser'];
    $password = $_POST['signuppass'];
    $phone = $_POST['signupphone'];
    $email = $_POST['signupemail'];

    //seperate query for id
    $query = "select MAX(ID) from user";

    $id = mysqli_query($conn,$query);

    $id++;

    $query = "insert into user values ('$username','$id','$phone','$email','$password',0)";

    $run = mysqli_query($conn,$query);
    
    if($run){
       echo "form submitted";
    }
    else{
        echo "form not submitted";
    }


    
}
?>