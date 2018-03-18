<?php
include '../dbh.php';
$date = $_POST['reqdate'];

$X = $_SESSION['userid'];
echo $X;
$sql = "SELECT * FROM $X WHERE Date = '$date' ";
$result = $conn ->query($sql);
$row = $result ->fetch_assoc();
echo $row['TotalLoadConsumed'];

$_SESSION['TLC'] = $row['TotalLoadConsumed'];
$_SESSION['date'] = $date;  



header("Location: ../page1.php");
?>
