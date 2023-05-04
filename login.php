<?php
    include("connection.php");
    if(isset($_POST['loginsubmit'])){
    $username = $_POST['loginuser'];
    $password = $_POST['loginpass'];
    
    $sql = "select * from user where name = '$username' and password = '$password'"; //select all from user that match the name and pass typed in
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);
    session_start();
    $currentUsername = $row[0];
    //$currentUserid = $row[1];
    $_SESSION['currentUsername'] = $currentUsername;
    //$_SESSION['currentUserid'] = $currentUserid;
    if($count == 1){ //if there is any user with matching user and pass
        header("Location:welcome.php");
    } 
    else{
        echo '<script>
            window.location.href = "index.php";
            alert("Login failed, invalid username or password")
            </script>';
    }
}

?>