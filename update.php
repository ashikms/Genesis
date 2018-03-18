<?php

include '../dbh.php';

//$conn = new mysqli($servername, $username, $password, $dbname);
//$date = $_SESSION['date'];
$power = $_GET['TotalLoadConsumed'];
$_SESSION['POWER'] = $power;
$bill = $power*10;
$sql = "INSERT INTO c1 (Date,TotalLoadConsumed,TotalBill) VALUES ('2018/05/02',$power,$bill)";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>