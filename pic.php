<?php require("secure.php"); ?>
<!DOCTYPE html>
<html dir="rtl">
<head>
<title>صوري</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/style.css">
    <script>
    $(document).ready(function(){
        
    })
    </script>
</head>
<body>

<div class="topnav" id="myTopnav"><?php include("nav.php"); ?></div>


<div style="padding-right:16px">
  <h2>مجموعة من الصور قمت برفعها على الموقع </h2>
  
</div>
  
<div class="row">
  <div class="col-xs-4">
    
     <img src="images/T-shirt.jpg" height="150" width="150">
     
  </div>

  
 
  <div class="col-xs-4">
  
  <img src="images/jeans_black.png" height="150" width="150">
  
	 </div>
	
  
 
  <div class="col-xs-4">
   
    <img src="images/sho.jpeg" height="50" width="50">
    
	 </div>
	</div>
  

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

</body>
</html>
