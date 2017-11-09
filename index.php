<!DOCTYPE html>
<?php 
session_start();
if(@$_GET["do"] == "logOut"){
	session_destroy();
	header("location:index.php");
} 
?>
<html>
<head>
  <title>maine</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>

    <script>
    $(document).ready(function(){
        
        
    })
    </script>
</head>
<body>

<div class="topnav" id="myTopnav"><?php include("nav.php"); ?></div>

    
    
    
 
<div class="container">
  <h2>اخر التصاميم</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
       
      </div>

      <div class="item">
        <img src="AY2881_01_laydown.jpg" alt="Chicago" style=height:100px; style="width:30px;">
         <img src="tshirt.jpg" alt="New york" style=height:300px; style="width:30px;">
      </div>
    
      <div class="item">
        <img src="AY2881_01_laydown.jpg" alt="AY2881_01_laydown.jpg" style=height:300px; style="width:30px;">
        <img src="tshirt.jpg" alt="tshirt" style=height:300px; style="width:30px;">
      </div>
      
   
      <div class="item">
        <img src="AY2881_01_laydown.jpg" alt="Chicago" style=height:100px; style="width:30px;">
         <img src="tshirt.jpg" alt="New york" style=height:300px; style="width:30px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

  
 
 





</body>
</html>
