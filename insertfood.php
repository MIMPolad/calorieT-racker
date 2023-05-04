<?php
    include("connection.php");
    if(isset($_POST['foodsubmit'])){
    $name = $_POST['foodname'];
    $brand = $_POST['foodbrand'];
    $porsize = $_POST['foodporsize'];
    $cost = $_POST['foodcost'];

    
    $query = "insert into food(name,brand,portionSize,cost) values ('$name','$brand','$porsize','$cost')";

    $run = mysqli_query($conn,$query);


    
    if($run){
        echo '<script>
            window.location.href = "food.php";
            alert("Food Successfully added to database!")
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