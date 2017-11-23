<?php require("secure.php"); ?>
<!doctype html>
<html dir="rtl">
<head>
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


<div style="padding-left:16px">
  <h2>صفحة اختيار تصميم</h2>
<pr>

<script>
        jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
}); 
	</script>  
      
  <style>     
     .hide-bullets {
    list-style:none;
    margin-left: -40px;
    margin-top:20px;
}

.thumbnail {
    padding: 0;
}

.carousel-inner>.item>img, .carousel-inner>.item>a>img {
    width: 100%;
}     
    </style> 
       
                 
                           <div class="container">
    <div id="main_area">
        <!-- Slider -->
        <div class="row">
            <div class="col-sm-6" id="slider-thumbs">
                <!-- Bottom switcher of slider -->
                <ul class="hide-bullets">
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-0"><img src="images/0.jpeg">
                        </a>
                    </li>

                    <li class="col-sm-3">
                    <a class="thumbnail" id="carousel-selector-1"><img src="images/1.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                    <a class="thumbnail" id="carousel-selector-2"><img src="images/2.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                    <a class="thumbnail" id="carousel-selector-3"><img src="images/3.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-4"><img src="images/4.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-5"><img src="images/5.jpg"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-6"><img src="images/6.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-7"><img src="images/7.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-8"><img src="images/8.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-9"><img src="images/9.jpg"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-10"><img src="images/10.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-11"><img src="images/11.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-12"><img src="images/12.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-13"><img src="images/13.jpg"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-14"><img src="images/14.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-15"><img src="images/15.jpg"></a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6">
                <div class="col-xs-12" id="slider">
                    <!-- Top part of the slider -->
                    <div class="row">
                        <div class="col-sm-12" id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="active item" data-slide-number="0">
                                        <img src="images/0.jpeg"></div>

                                    <div class="item" data-slide-number="1">
                                        <img src="images/1.jpeg"></div>

                                    <div class="item" data-slide-number="2">
                                        <img src="images/2.jpeg"></div>

                                    <div class="item" data-slide-number="3">
                                        <img src="images/3.jpeg"></div>

                                    <div class="item" data-slide-number="4">
                                        <img src="images/4.jpeg"></div>

                                    <div class="item" data-slide-number="5">
                                        <img src="images/5.jpeg"></div>
                                    
                                    <div class="item" data-slide-number="6">
                                        <img src="images/6.jpeg"></div>
                                    
                                    <div class="item" data-slide-number="7">
                                        <img src="images/7.jpeg"></div>
                                    
                                    <div class="item" data-slide-number="8">
                                        <img src="images/8.jpeg"></div>
                                    
                                    <div class="item" data-slide-number="9">
                                        <img src="images/9.jpeg"></div>
                                    
                                    <div class="item" data-slide-number="10">
                                        <img src="images/10.jpeg"></div>
                                    
                                    <div class="item" data-slide-number="11">
                                        <img src="images/11.jpeg"></div>
                                    
                                    <div class="item" data-slide-number="12">
                                        <img src="images/12.jpeg"></div>

                                    <div class="item" data-slide-number="13">
                                        <img src="images/13.jpeg"></div>

                                    <div class="item" data-slide-number="14">
                                        <img src="images/14.jpeg"></div>

                                    <div class="item" data-slide-number="15">
                                        <img src="images/15.jpeg"></div> 
                                </div>
                                <!-- Carousel nav -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Slider-->
        </div>

    </div>
</div>          
        
              
                           
  
                                                      
                              
<br>
<div class="row">   
   <div class="col-sm-5">
   </div>
   	    <div class="col-sm-7">
           <button type="submit" class="btn btn-primary">حفظ الطقم</button>
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

</body>
</html>
