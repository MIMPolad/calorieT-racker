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
    <a href="index.php"><button class="button button1">LOGOUT</button></a>
    <div id="form">
            <h1>What did you eat today?</h1>
            <form name="mealform" action="insertmeal.php" onsubmit="return isvalidmeal()" method="POST">
                <label>Food Name: </label>
                <input type="text" id="mealname" name="mealname"></br></br>
                <input type="submit" id="btn" value="ADD MEAL" name = "mealsubmit"/>
            </form>
        </div>
        <script>
            function isvalidmeal(){
                var food = document.mealform.mealname.value;
                if(food.length == ""){
                    alert("food field is empty!");
                    return false;
                }
                else{
                    return true;
                }
            }            
        </script>
</body>
</html> 