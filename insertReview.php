<?php
    include("connection.php");
    if(isset($_POST['reviewsubmit'])){
    $foodname = $_POST['foodreview'];
    $brandname = $_POST['brandreview'];
    $rating = $_POST['foodrating'];
    $review = $_POST['review'];
    //for some reason, if the review has a ' or " in it it breaks the query, not sure why.

    $query = "select ID from food where name = '$foodname' and brand = '$brandname'";

    $result = mysqli_query($conn,$query);

    $result2 = mysqli_fetch_array($result);
    $foodid = $result2[0];

    if ($foodid != ""){
    
    $query = "insert into review(foodID,rating,description) values ('$foodid','$rating','$review')";

    $run = mysqli_query($conn,$query);

    
    if($run){
        echo '<script>
            window.location.href = "review.php";
            alert("Review was added to database!")
            </script>';
        $query = "select AVG(rating) from review where foodID = '$foodid'";
        $result = mysqli_query($conn,$query);
        $result2 = mysqli_fetch_array($result);
        $rating = $result2[0];

        $query = "update food set userRating = '$rating' where ID = '$foodid'";
        $run = mysqli_query($conn,$query);

    }
    else{
        echo '<script>
            window.location.href = "review.php";
            alert("something went wrong, please try again")
            </script>';
    }
}
else{
    echo '<script>
            window.location.href = "review.php";
            alert("food does not exist")
            </script>';
}

    
}
?>