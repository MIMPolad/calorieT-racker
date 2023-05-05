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
    <a href="welcome.php"><button class="button button1">HOME</button></a>
    <a href="review.php"><button class="button button1">REVIEWS</button></a>
    <a href="logout.php"><button class="button button1" name = 'logout'>LOGOUT</button></a>
    <div id="form">
            <h1>What did you eat today?</h1>
            <form name="mealform" action="insertmeal.php" method="POST">
                <label> Food 1: </label>
                <input type="text" id="food1" name="food1"></br></br>
                <label> Brand 1: </label>
                <input type="text" id="brand1" name="brand1"></br></br>
                <label> Food 2: </label>
                <input type="text" id="food2" name="food2"></br></br>
                <label> Brand 2: </label>
                <input type="text" id="brand2" name="brand2"></br></br>
                <label> Food 3: </label>
                <input type="text" id="food3" name="food3"></br></br>
                <label> Brand 4: </label>
                <input type="text" id="brand4" name="brand4"></br></br>
                <label> Food 4: </label>
                <input type="text" id="food4" name="food4"></br></br>
                <label> Brand 5: </label>
                <input type="text" id="brand5" name="brand5"></br></br>
                <label> Food 5: </label>
                <input type="text" id="food5" name="food5"></br></br>
                <label> Brand 6: </label>
                <input type="text" id="brand6" name="brand6"></br></br>
                <label> Food 6: </label>
                <input type="text" id="food6" name="food6"></br></br>
                <label> Brand 6: </label>
                <input type="text" id="brand6" name="brand6"></br></br>
                <label> Food 7: </label>
                <input type="text" id="food7" name="food7"></br></br>
                <label> Brand 7: </label>
                <input type="text" id="brand7" name="brand7"></br></br>
                <label> Food 8: </label>
                <input type="text" id="food8" name="food8"></br></br>
                <label> Brand 8: </label>
                <input type="text" id="brand8" name="brand8"></br></br>
                <label> Food 9: </label>
                <input type="text" id="food9" name="food9"></br></br>
                <label> Brand 9: </label>
                <input type="text" id="brand9" name="brand9"></br></br>
                <label> Food 10: </label>
                <input type="text" id="food10" name="food10"></br></br>
                <label> Brand 10: </label>
                <input type="text" id="brand10" name="brand10"></br></br>
                <input type="submit" id="btn" value="ADD MEAL" name = "mealsubmit"/>
            </form>
        </div>
</body>
</html> 