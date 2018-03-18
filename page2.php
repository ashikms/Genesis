<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>
    Page2
    </title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    </head>
    <body background = "SEO.jpg">
        
        <h1 class="heading">SEO</h1>
        <h2 class="heading">Save Energy,Build Nation</h2>
    <div class="tab1">
  <button class="tablinks" onclick="data(event, 'Energy theft control')">Energy theft control</button>
  <button class="tablinks" onclick="data(event, 'Bill Payments')">Bill Payments</button>
   </div>
<!-- Tab content -->
<div id="Energy theft control" class="tabcontent">
  <h3>Energy Theft Control Details</h3>
  <p>The amount of energy that is being used total is and lost is.............</p>
</div>

<div id="Bill Payments" class="tabcontent">
  <h3>Bill Payments</h3>
  <p>Whether he has payed the bill or not.Due accordingly........</p> 
</div>
        
       
        
        
<script>
function data(evt, options) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(options).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
        
     
    </body>
    
</html>