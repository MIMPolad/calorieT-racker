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
    <a href="logout.php"><button class="button button1" name = 'logout'>LOGOUT</button></a></br></br></br></br></br></br></br></br></br></br>

    <div id="form">
            <form name="calorieform" action="welcomedisplay.php" onsubmit="return isvalidlogin()" method="POST">
                <input type="submit" id="btn" value="click here to see your daily calories!" name = "refresh"/>
            </form>
        </div>
       
</body>
</html> 