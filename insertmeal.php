<?php
    include("connection.php");
    if(isset($_POST['mealsubmit'])){
    $food1 = $_POST['food1'];
    $food2 = $_POST['food2'];
    $food3 = $_POST['food3'];
    $food4 = $_POST['food4'];
    $food5 = $_POST['food5'];
    $food6 = $_POST['food6'];
    $food7 = $_POST['food7'];
    $food8 = $_POST['food8'];
    $food9 = $_POST['food9'];
    $food10 = $_POST['food10'];
    
    $sql = "select * from user where isloggedin = 1";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    $userid = $row[1];


    //brute force method to calculate total calories of each food item submitted
    $sql = "select SUM(calories) as calories from food where name = '$food1'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_object($result);
    $totalcals = $row->calories;
    $sql = "select SUM(calories) as calories from food where name = '$food2'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_object($result);
    $totalcals += $row->calories;
    $sql = "select SUM(calories) as calories from food where name = '$food3'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_object($result);
    $totalcals += $row->calories;
    $sql = "select SUM(calories) as calories from food where name = '$food4'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_object($result);
    $totalcals += $row->calories;
    $sql = "select SUM(calories) as calories from food where name = '$food5'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_object($result);
    $totalcals += $row->calories;
    $sql = "select SUM(calories) as calories from food where name = '$food6'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_object($result);
    $totalcals += $row->calories;
    $sql = "select SUM(calories) as calories from food where name = '$food7'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_object($result);
    $totalcals += $row->calories;
    $sql = "select SUM(calories) as calories from food where name = '$food8'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_object($result);
    $totalcals += $row->calories;
    $sql = "select SUM(calories) as calories from food where name = '$food9'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_object($result);
    $totalcals += $row->calories;
    $sql = "select SUM(calories) as calories from food where name = '$food10'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_object($result);
    $totalcals += $row->calories;

    if($totalcals != 0){

    $timeEaten = date('Y-m-d');
    $query = "insert into meal(userID,totalCals,timeEaten) values('$userid','$totalcals','$timeEaten')";
    $run = mysqli_query($conn,$query);

    
    if($run){
        echo '<script>
            window.location.href = "meal.php";
            alert("meal Successfully added to database!")
            </script>';
            //insert average daily calories into user
        $query = "select AVG(totalCals) from meal where userID = '$userid'";
        $result = mysqli_query($conn,$query);
        $result2 = mysqli_fetch_array($result);
        $cals = $result2[0];

        $query = "update user set AvgDailyCals = '$cals'";
        $run = mysqli_query($conn,$query);
    }
    else{
        echo '<script>
            window.location.href = "meal.php";
            alert("something went wrong, please try again")
            </script>';
    }


    
  }
else{
    echo '<script>
            window.location.href = "meal.php";
            alert("food does not exist");
            </script>';
}
}
?>