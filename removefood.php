<?php
    include("connection.php");
    if(isset($_POST['foodremove'])){
    $name = $_POST['foodnameremove'];
    $brand = $_POST['brandnameremove'];
    
    $query = "delete from food where name = '$name' and brand = '$brand'";

    $run = mysqli_query($conn,$query);


    
    if($run){
        echo '<script>
            window.location.href = "food.php";
            alert("Food Successfully removed from database!")
            </script>';
    }
    else{
        echo '<script>
            window.location.href = "food.php";
            alert("something went wrong, please try again")
            </script>';
    }


    
}
?>