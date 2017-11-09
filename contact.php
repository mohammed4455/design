<!DOCTYPE html> 
<html dir="rtl"> 
<head>
    <title>أتصل بنا</title>
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

<div style="padding-right:16px">
  <h2>أتصل بنا </h2>
  <h2> للمشاكل والإقترحات يسعدنا تواصلك </h2>


</div>
<br>
<div class="col-md-4" dir="rtl">
<div class="form-group">
      <label for="email">الاميل:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
<br>
<br>
<div class="col-75" dir="rtl">
<textarea id="subject" name="subject" placeholder="تفاصيل الرساله" cols="50" rows="7"> </textarea>
</div>
<br>

<button type="button" class="btn btn-danger">ارسال</button>
<button type="button" class="btn btn-danger">مسح </button>
</div>

 <br>
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
