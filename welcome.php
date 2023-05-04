<?php
    include("login.php");
 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatable" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="welcomestyle.css">

            <style>
        .button {
        border: none;
        color: white;
         padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
                 cursor: pointer;
}

.button1 {background-color: #4CAF50;} /* Green */
</style>
    </head>
    <body>
    <a href="food.php"><button class="button button1">+FOOD</button></a>
    <a href="meal.php"><button class="button button1">+MEAL</button></a>
    <a href="review.php"><button class="button button1">REVIEWS</button></a>
    <a href="index.php"><button class="button button1">LOGOUT</button></a>
    </div>
        <h1> Your Average Daily Calorie Intake Is: </h1>
</body>
</html> 