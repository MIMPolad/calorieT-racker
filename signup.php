<?php
    include("connection.php");
    if(isset($_POST['signupsubmit'])){
    $username = $_POST['signupuser'];
    $password = $_POST['signuppass'];
    $phone = $_POST['signupphone'];
    $email = $_POST['signupemail'];

    
    $query = "insert into user(name,phone,email,password) values ('$username','$phone','$email','$password')";

    $run = mysqli_query($conn,$query);


    
    if($run){
        echo '<script>
            window.location.href = "index.php";
            alert("Signup successful, please log in!")
            </script>';
    }
    else{
        echo '<script>
            window.location.href = "index.php";
            alert("Signup Failed, please try again!")
            </script>';
    }


    
}
?>