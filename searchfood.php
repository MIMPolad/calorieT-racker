<?php
    include("connection.php");
    if(isset($_POST['foodsearch'])){
    $name = $_POST['foodnamesearch'];
    
    $query = "select * from food where name = '$name'";
    $run = mysqli_query($conn,$query);

    //loop through the output and echo
while ($row = mysqli_fetch_array($run)){   
    echo "name: ". $row[1] . "<br>";
    echo "calories: ". $row[2] . "<br>";
    echo "user rating:". $row[3] . "<br>";
    echo "cost: ". $row[4] . "<br>";
    echo "brand: ". $row[5] . "<br>";
    echo "portion size: ". $row[6] . "<br><br>";
 }
  echo "Press the back arrow to return to the food page <br>";
}
?>