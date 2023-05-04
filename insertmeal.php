<?php
    include("connection.php");
    if(isset($_POST['mealsubmit'])){
    $food = $_POST['mealname'];
    
    /*this needs to pull the calorie value from $food and then add it to the daily total.
    $query = "insert into food(name,brand,portionSize,cost,calories) values ('$name','$brand','$porsize','$cost','$calories')";

    $run = mysqli_query($conn,$query);
    */

    
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