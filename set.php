<?php require("secure.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title>أطقمي</title>
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
   <!-- اثناء الضغط على تفاصيل -->
    <script> 
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>

<!-- للإخفاء والإظهار -->
<script>
function myFunction() {
	
	$("#myDIV").slideToggle()
	
	/*
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
	*/
}
</script>

</head>
<body>

<div class="topnav" id="myTopnav"><?php include("nav.php"); ?></div>

 <div style="padding-right:16px">
  <h2>أطقم قمت بإنشائها مسبقاً</h2>
  
   <button class="btn btn-primary" onclick="myFunction()">طقم صيفي</button>
   
   
   <div id="myDIV"> <!-- اسفله يكون مخفي الا اذا تم الضغط على اسم الطقم -->

<div class="row">

	<div class="col-xs-6" style="text-align: left">
	 <img src="images/T-shirt.jpg" height="150" width="150">
	</div>
	
  <div class="container">
  
	<div class="col-xs-6">
	 <a href="#" data-toggle="popover" title="طقي صيفي" data-content="تي شيرت ازرق للرياضه من متجر الفالح">التفاصيل</a>
	 </div>	 
  </div>
  
</div>
 

 
 <div class="row">
	<div class="col-xs-6" style="text-align: left">
	  <img src="images/jeans_black.png" height="150" width="150">
	</div>
	
<div class="container">
	<div class="col-xs-6">
	  <a href="#" data-toggle="popover" title="طقم صيفي" data-content="سروال مطاطي من متجر الفالح">التفاصيل</a>
	</div>
</div>	
 </div>
 <div class="row">
	<div class="col-xs-6" style="text-align: left;padding-left:65px" >
		<img src="images/sho02.jpg" height="50" width="50">
	</div>
<div class="container">	
	<div class="col-xs-6">	
 <a href="#" data-toggle="popover" title="طقم صيفي" data-content="حذاء رياضي من متجر ادي داس">التفاصيل</a>	</div>
</div>	
</div>

	</div>

</body>
</html>
