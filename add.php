<?php require("secure.php"); ?>
<!doctype html>
<html dir="rtl">
<head>
  <meta charset="UTF-8">
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

  <p>
<h2 align="center" style="background-color: #A7A7A7">صفحة اضافة</h2>
  </p> 
   
   
   
 <div class="row">   
   <div class="col-sm-2">
       <label class="custom-file">ادخل صورة
   </div>
      <div class="col-sm-10">
       <input type="file" id="file" class="custom-file-input">
       <span class="custom-file-control"></span>
       </label>  
 </div>      
 </div> 
   <br> 
    
    
    
    
<div class="row">   
 <div class="col-sm-2">
  <label for="country">نوع اللباس</label>
 </div>   
   
   
 <div class="col-sm-10">   
   <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">اختر لباس
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">تيشيرت</a></li>
      <li><a href="#">سروال</a></li>
      <li><a href="#">حذاء</a></li>
    </ul>
   </div>
  </div>
</div>
<br>



<form>  
 <div class="row">   
   <div class="bd-example" data-example-id="">
     <div class="col-sm-2">
    <div class="form-group">
  <label for="fo">اسم المتجر</label>
    </div>
      </div>
    
    
    
    
     <div class="col-sm-10">
   <input type="text" class="form-control-static" id="fo" placeholder="اسم المتجر">
     </div>
  </div>
 </div>
</form>
<br>



<div class="row">   
   <div class="col-sm-5">
   </div>
   	    <div class="col-sm-7">
           <button type="submit" class="btn btn-primary">اضافة</button>
           <button type="result" class="btn btn-danger">الغاء</button>
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
	</form>
	</div>	
</body>
</html>
