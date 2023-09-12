<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fare Activity</title>
</head>
<body>
    <form method="POST" action="">
    <input type="number" name="age" id="age" placeholder="Age" required>
    <br>
    <input type="number" name="distance" id="distance" placeholder="Distance (km)" required>
    <br>
    <input type="submit" value="Compute" name="btn_submit">
    </form>
</body>
</html>

<?php
include "Fare.php";

if(isset($_POST['btn_submit'])){
    $age = $_POST['age'];
    $distance = $_POST['distance'];

    $compute = new Compute;
    
    $compute->setAge($age);
    $compute->setDistance($distance);
    $compute->setFare();

    echo "Age: " $compute->getAge() . " years old <br>";
    echo "Distance: " $compute->getDistance() . " km <br>";
    echo "Fare: " $compute->getFare() . "<br>";

}
?>
