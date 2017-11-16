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

<h2 align="center" style="background-color: #A7A7A7">صفحة اضافة</h2>
   
   
   
   
    <p>  
   <label class="custom-file">ادخل صورة &nbsp; &nbsp; &nbsp;
   <input type="file" id="file" class="custom-file-input">
  <span class="custom-file-control"></span>
</label>
      </p>
    
    
    
    
    
    
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

  

<div class="bd-example" data-example-id="">
<form>
  <div class="form-group">
    <label for="fo">اسم المتجر&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
    <input type="text" class="form-control-static" id="fo" placeholder="اسم المتجر">
  </div>
</form>
</div>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<button type="submit" class="btn btn-primary">حفظ</button>
<button type="result" class="btn btn-danger">الغاء</button>
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
