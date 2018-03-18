<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Smart Energy Optimizer</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="style1.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>

<body background = "SEO.jpg">
<h1 class="heading">SEO</h1>
        <h2 class="heading">Save Energy,Build Nation</h2>
<!--
    <nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class ="navabar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MyNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbat-brand" href="#"></a>
</div>
<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav navbar right">
<li class="active"><a href="#">Home</a></li>

</ul>
</div>

</div>
</nav>
-->
    
    
    <!--<div class = "login">
    <form action="includes/login.inc.php"method="post">
       <input type="text" name="userid" placeholder="Uid"><br>
    <input type="password" name="password" placeholder="pwd"><br>
    <button type="submit">Login</button> 
</form>
    </div>
-->
    
    
    
    <header>
        <nav>
            <ul>
                <!--<li><a href="index.php">HOME</a></li>-->
                <?php
                if(isset($_SESSION['id'])){
                 echo" <form action='includes/logout.inc.php'>
        <button>LOGOUT</button>
    </form>";
                }
    else    {
                     echo  " <form action='includes/verify.php'method='post'>
       <input type='text' name='userid' placeholder='Consumer ID'>
    <input type='password' name='password' placeholder='Password'>
        
        

                         
    <button type='submit'>LOGIN</button> 
    </form>";
         
    }
                 
                ?>
      <!--..........If needed to be modified.....signup and home options............ -->         
    <!--<li><a href="signup.php">SIGNUP</a></li>-->
    <!--<li><a href="forgotpassword.php">FORGOT PASSWORD</a></li>-->
                <!--<li><a href="includes/logout.inc.php">LOGOUT</a></li>-->
            </ul>
        </nav>
    </header>
<!--<form>
 <div class="form-group row">
    <label for="formGroupExampleInput" class="col-sm-100 col-form-label">Login</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Consumer number">
   
   </div>
 </div>
 <div class="form-group row">
   <label for="inputPassword3" class="col-sm-10 col-form-label">Password</label>
   <div class="col-sm-10">
     <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
   </div>
 </div>
 <fieldset class="form-group">
   <div class="row">
     <legend class="col-form-label col-sm-2 pt-0">You are</legend>
     <div class="col-sm-10">
       <div class="form-check">
         <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
         <label class="form-check-label" for="gridRadios1">
           Consumer
         </label>
       </div>
       <div class="form-check">
         <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
<label class="form-check-label" for="gridRadios2">
           Electricity Board
         </label>
       </div>
    
       </div>
     </div>
   
 </fieldset>-->
 




</body>
</html>
