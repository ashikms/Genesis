<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>
  Page1
  </title>
  <link rel="stylesheet" type="text/css" href="style1.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  </head>

  <body background = "SEO.jpg">
      
      <h1 class="heading">SEO</h1>
      <h2 class="heading">Save Energy,Build Nation</h2>
  <div class="tab">
      
<button class="tablinks" onclick="data(event, 'Usage')">Usage</button>
<button class="tablinks" onclick="data(event, 'Daily Usage')">Daily Usage</button>
<button class="tablinks" onclick="data(event, 'Payment')">Payment</button>
<button class="tablinks" onclick="data(event, 'Other info')">other info</button>
 </div>
      
<!-- Tab content -->
<div id="Usage" class="tabcontent">
<h3>Realtime usage Details</h3>
    
   
   
   <script type="text/javascript">
     google.charts.load('current', {'packages':['corechart']});
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {
         
          <?php echo $_SESSION['POWER'];
    $x = $_SESSION['POWER'];
    echo $x;    
    ?>
       var data = google.visualization.arrayToDataTable([
         ['Time', 'Power in kW'],
         ['10hr',  $x/100],
         ['11hr',  0.16],
         ['12hr',  0.2],
         ['13hr',  0.12]
       ]);

       var options = {
         title: 'load graph',
         curveType: 'function',
   
         legend: { position: 'bottom' }
       };
 
       var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

       chart.draw(data, options);
     }
   </script>
 
 <body>
   <div id="curve_chart" style="height: 250px"align = "center"></div>
 </body>


    <p align = "center">The amount of energy that is being used till now is </p>
</div>

<div id="Daily Usage" class="tabcontent">
    <h3>Daily Usage</h3>
    
 <title>jQuery UI Datepicker - Default functionality</title>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <link rel="stylesheet" href="/resources/demos/style.css">
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script>

 $(document).ready(

function () {
$( "#datepicker" ).datepicker({
dateFormat:'yy/mm/dd',
changeMonth: true,
changeYear: true,
onSelect: function(dateStr){
date = $(this).datepicker('getDate');  
}
});
}

);
 </script>


    
<body>
<form action="includes/dateusage.php" method="post">
<p>Date: <input type="text" name = "reqdate" id="datepicker"></p>
    <button type="submit">Submit</button>
    </form>
    
    
    <p>Energy used on <?php print_r($_SESSION['date']) ?> is <?php print_r($_SESSION['TLC']) ?></p>
    
    



</body>

    
    
</div>
      
<div id="Payment" class="tabcontent">
<h3>Payment</h3>
<p>Payment info</p> 
</div>   

<div id="Other info" class="tabcontent">
<h3>other info</h3>
<p>graphs</p> 
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
