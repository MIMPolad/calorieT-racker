<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatable" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="loginstyle.css">
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
    <a href="welcome.php"><button class="button button1">HOME</button></a>
    <a href="meal.php"><button class="button button1">+MEAL</button></a>
    <a href="review.php"><button class="button button1">REVIEWS</button></a>
    <a href="logout.php"><button class="button button1" name = 'logout'>LOGOUT</button></a>
        <div id="form">
            <h1>Add a food item!</h1>
            <form name="foodform" action="insertfood.php" method="POST">
                <label>Name: </label>
                <input type="text" id="foodname" name="foodname"></br></br>
                <label>Brand: </label>
                <input type="text" id="foodbrand" name="foodbrand"></br></br>
                <label>Calories: </label>
                <input type="text" id="foodcalories" name="foodcalories"></br></br>
                <label>portion Size: </label>
                <input type="text" id="foodporsize" name="foodporsize"></br></br>
                <label>Cost: $ </label>
                <input type="text" id="foodCost" name="foodcost"></br></br>
                <input type="submit" id="btn" value="ADD FOOD" name = "foodsubmit"/>
            </form>
        </div>
        <div id="form">
            <h1>remove a food item</h1>
            <form name="foodformdelete" action="removefood.php" method="POST">
                <label>Name: </label>
                <input type="text" id="foodnameremove" name="foodnameremove"></br></br>
                <label>Brand: </label>
                <input type="text" id="brandnameremove" name="brandnameremove"></br></br>
                <input type="submit" id="btn" value="Remove Food" name = "foodremove"/>
            </form>
    </div> 
    <div id="form">
            <h1>Look up a food item</h1>
            <form name="foodformsearch" action="searchfood.php" method="POST">
                <label>Name: </label>
                <input type="text" id="foodnamesearch" name="foodnamesearch"></br></br>
                <input type="submit" id="btn" value="Search" name = "foodsearch"/>
            </form>
        </div>
</body>
</html> 