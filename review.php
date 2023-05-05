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
    <a href="welcome.php"><button class="button button1">HOME</button></a>
    <a href="logout.php"><button class="button button1" name = 'logout'>LOGOUT</button></a>
    <div id="form">
            <h1>Add A Review</h1>
            <form name="reviewform" action="insertReview.php" onsubmit="return isvalidreview()" method="POST">
                <label>Name of Food you want to review: </label>
                <input type="text" id="foodreview" name="foodreview"></br></br>
                <label>Name of food brand you want to review: </label>
                <input type="text" id="brandreview" name="brandreview"></br></br>
                <label>rating(out of 10): </label>
                <input style ="width:50px" type="text" id="foodrating" name="foodrating"></br></br>
                <label>Review (please do not add ' or "): </label>
                <input style="width:1600px;" type="text" id="review" name="review"></br></br>
                <input type="submit" id="btn" value="Submit Review" name = "reviewsubmit"/>
            </form>
        </div>

        <script>
            function isvalidreview(){
                var food = document.reviewform.foodreview.value;
                var brand = documnet.reviewform.brandreview.value;
                var rating = document.reviewform.foodrating.value;
                var review = document.reviewform.review.value;
                if(food.length == ""){
                    alert("food field is empty!");
                    return false;
                }
                else if(brand.length == ""){
                    alert("brand field is empty!");
                    return false;
                }
                else if(rating.length == ""){
                    alert("rating is empty!");
                    return false;
                }
                else if(review.length == ""){
                    alert("review field is empty!");
                    return false;
                }
                else{
                    return true;
                }
            }            
        </script>
</body>
</html> 