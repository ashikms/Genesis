<?php
session_start();
$conn=mysqli_connect("localhost","root","SRinath@8.47@8.59","genesis");
if(!$conn)
{
    die("Connection failed :".mysqli_connection_error);
    
}
?>