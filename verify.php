<?php
 include '../dbh.php';

$userid=$_POST['userid'];
$password=$_POST['password'];


$sql = "SELECT * FROM genesis WHERE userid='$userid' ";
$result = $conn ->query($sql);

$row = $result ->fetch_assoc();
$hash_pwd=$row['password'];
$hash = password_verify($password,$hash_pwd);
if($hash_pwd == $password){ 
    
    /*echo "Your userid or password is incorrect...........";*/
    if($userid[0] == 'C')
    header("Location: ../page1.php");
    else if($userid[0] == 'P')
    {
        header("Location: ../page2.php");
    }
     
$_SESSION['userid'] = $row['userid'];
    
}
else{
    //echo "<script type='text/javascript'>alert('Incorrect!')</script>";

    //alert("Incorrect password or username.Please refresh and try again");
   /* $sql ="SELECT * FROM login WHERE userid='$userid' AND password='$hash_pwd'";
    
$result=$conn ->query($sql);

    if(!$row = $result ->fetch_assoc())
{
 echo "Your userid or password is incorrect2315";   
}
else
{
    $_SESSION['id']=$row['id'];
$_SESSION['userid'] = $row['userid'];
    $_SESSION['firstname'] = $row['firstname'];

    echo "3";
   
}*/
    
    header("Location: ../index.php");
    



}

?>
