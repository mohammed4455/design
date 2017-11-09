<?php require("secure.php"); ?>
<!doctype html>
<html dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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





<div style="padding-left:16px">
  <h2 align="center" style="background-color: lightsalmon">صفحة اضافة</h2>
   
   
   
   
    <p>  
   <label class="custom-file">ادخل صورة &nbsp; &nbsp; &nbsp;
   <input type="file" id="file" class="custom-file-input">
  <span class="custom-file-control"></span>
</label>
      </p>
    
    
     <label for="country">نوع اللباس&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
  
  <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
    <option value="1">علوي</option>
    <option value="2">سفلي</option>
    <option value="3">حذاء</option>
  </select>
   <p>
  

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
		
</body>
</html>
