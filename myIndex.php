<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

   <link rel="stylesheet" href="style.css" />

   <title>www.machedagraphics.com</title>
 </head>
 <body>
    
   <nav class="navbar">
     <!-- LOGO -->
     <div class="logo">
     ZuzuTech & Graphics</div>
     <!-- NAVIGATION MENU -->
     <ul class="nav-links">
       <!-- USING CHECKBOX HACK -->
       <input type="checkbox" id="checkbox_toggle" />
       <label for="checkbox_toggle" class="hamburger">&#9776;</label>
       <!-- NAVIGATION MENUS -->
       <div class="menu">
         <li><a href="myIndex.php">Home</a></li>
         <li><a href="About.php">About Us</a></li>
         <li class="services">
           <a href="#">Services</a>
           <!-- DROPDOWN MENU -->
           <ul class="dropdown">
             <li><a href="/">Graphic Designing</a></li>
             <li><a href="/">Cisco Networking</a></li>
             <li><a href="/">Software development</a></li>
             <li><a href="/">Research Analysis</a></li>
           </ul>
         </li>
         <li><a href="/">Pricing</a></li>
         <li><a href="https://ebhautoparts.netlify.app">Partners</a></li>
         <li><a href="Contact.php">Contact us</a></li>
       </div>
     </ul>
   </nav>

<!-- <div class="slider-container">
  <div class="slider">
    <div class="slides">
      <div id="slides__1" class="slide">
        <span class="slide__text"></span>
        <a class="slide__prev" href="#slides__4" title="Next"></a>
       
        <a class="slide__next" href="#slides__2" title="Next"></a>
      </div>
      <div id="slides__2" class="slide2">
        <span class="slide__text"></span>
        <a class="slide__prev" href="#slides__1" title="Prev"></a>
       
        <a class="slide__next" href="#slides__3" title="Next"></a>
      </div>
      <div id="slides__3" class="slide3">
        <span class="slide__text"></span>
        <a class="slide__prev" href="#slides__2" title="Prev"></a>
        <a class="slide__next" href="#slides__4" title="Next"></a>
      </div>
      <div id="slides__4" class="slide4">
        <span class="slide__text"></span>
        <a class="slide__prev" href="#slides__3" title="Prev"></a>
        <a class="slide__next" href="#slides__1" title="Prev"></a>
      </div>
    </div>
    <div class="slider__nav">
      <a class="slider__navlink" href="#slides__1"></a>
      <a class="slider__navlink" href="#slides__2"></a>
      <a class="slider__navlink" href="#slides__3"></a>
      <a class="slider__navlink" href="#slides__4"></a>
    </div>
  </div>
</div> -->

<!-- <div class="container1">

    <div class="para">
      <p>Hi, Welcome to Macheda Graphics. We make it simple, but significant.💻👁️🔥</p>
    </div>
    
</div> -->

<div class="container2">
<!--Area of the images-->
   <!-- <div class="wrapper">
      <img src="fun1.jpg">
      <img src="coffee.jpg">
      <img src="coo.jpg">
      <img src="Rest.jpg">
      <img src="logo.png">
      <img src="Holice.jpg">
      <img src="mabz.jpg">
      <img src="stu22.jpg">
      <img src="apple1.jpg">
     
   </div> -->

   <div id="slider">

<ul id="slideWrap"> 
      <li><img src="coo.jpg" alt=""></li>
      <li><img src="fun1.jpg" alt=""></li>
      <li><img src="coffee1.jpg" alt=""></li>
      <li><img src="Rest2.jpg" alt=""></li>
      <li><img src="Logo.jpg" alt=""></li>
     
    </ul>
    <a id="prev" href="#">&#8810;</a>
    <a id="next" href="#">&#8811;</a>
</div>
   

</div>
<script>
 /*You must see that there are two button sliders, 
 one on the left and the other on the right. For this I have used the css codes below.*/
var slider = document.getElementById("slider");
var sliderWidth = slider.offsetWidth;
var slideList = document.getElementById("slideWrap");
var count = 1;
var items = slideList.querySelectorAll("li").length;
var prev = document.getElementById("prev");
var next = document.getElementById("next");

window.addEventListener('resize', function() {
  sliderWidth = slider.offsetWidth;
});

/*I will store in 'prevSlide' what kind of 
changes will be made by clicking on the previous button. */
var prevSlide = function() {
  if(count > 1) {
    count = count - 2;
    slideList.style.left = "-" + count * sliderWidth + "px";
    count++;
  }

  else if(count = 1) {
    count = items - 1;
    slideList.style.left = "-" + count * sliderWidth + "px";
    count++;
  }
};


/*I will store in 'nextSlide' what kind 
of changes will be made by clicking on the Next button. */

var nextSlide = function() {
  if(count < items) {
    slideList.style.left = "-" + count * sliderWidth + "px";
    count++;
  }
  else if(count = items) {
    slideList.style.left = "0px";
    count = 1;
  }
};

/**We have determined above what will change if we click on the two buttons. Again, we will
 *  add the buttons with that constant, that is, we will activate the buttons. */


next.addEventListener("click", function() {
  nextSlide();
});

prev.addEventListener("click", function() {
  prevSlide();
});


/**The following code will help to change the image automaticallyat a certain time interval. */

setInterval(function() {
  nextSlide()
}, 12000);

window.onload = function() {
responsiveSlider();  
}


</script>










<!-- <div class="footer">
<p class="text-center">Copyright @2022  Rama Designs | All rights reserved
            | Terms Of service | Privacy </p>
</div> -->

<!--footer starts from here-->
<footer class="footer">
<div class="container bottom_border">
<div class="row">
<div class=" col-sm-4 col-md col-sm-4  col-12 col">
<h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
<!--headin5_amrc-->
<p class="mb10">Our aim is to provide our customers with the best qaulity  of services
   with a market-oriented approach  to achieve their bussiness goals. Henceforth,Our brand can grow bigger and bigger.</p>
<p><i class="fa fa-location-arrow"></i>Chilomoni, Blantyre Malawi.</p>
<p><i class="fa fa-phone"></i>  +265882791514/+265992056253 </p>
<p><i class="fa fa fa-envelope"></i> maxongomeka@gmail.com  </p>


</div>


<div class=" col-sm-4 col-md  col-6 col">
<h5 class="headin5_amrc col_white_amrc pt2">Services</h5>
<!--headin5_amrc-->
<ul class="footer_ul_amrc">
<li><a href="http://webenlance.com">Software Development</a></li>
<li><a href="http://webenlance.com">Computer and Mobile Networks</a></li>
<li><a href="http://webenlance.com">Graphic Design</a></li>
<li><a href="https://ebhautoparts.netlify.app">Partners</a></li>
</ul>
<!--footer_ul_amrc ends here-->
</div>


<div class=" col-sm-4 col-md  col-6 col">
<h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
<!--headin5_amrc-->
<ul class="footer_ul_amrc">
<li><a href="http://webenlance.com">Remove Background</a></li>
<li><a href="http://webenlance.com">Shadows & Mirror Reflection</a></li>
<li><a href="http://webenlance.com">Logo Design</a></li>
<li><a href="http://webenlance.com">Vectorization</a></li>
<li><a href="http://webenlance.com">Hair Masking/Clipping</a></li>
<li><a href="http://webenlance.com">Image Cropping</a></li>
</ul>
<!--footer_ul_amrc ends here-->
</div>


<div class=" col-sm-4 col-md  col-12 col">
<h5 class="headin5_amrc col_white_amrc pt2">Follow us on Social Media</h5>
<!--headin5_amrc ends here-->

<ul class="footer_ul2_amrc">
<li><a href="#"><i class="fab fa-facebook fleft padding-right"></i> </a><p>The public is more familiar with bad design than good design. It is, in effect, conditioned to prefer bad design, because that is what it lives with. 
  The new becomes threatening, the old reassuring." -- Paul Rand, graphic designer <a href="https://web.facebook.com/Macheda-Graphics-110845641646635/">Follow us on Facebook</a></p></li>
<li><a href="#"><i class="fab fa-instagram fleft padding-right"></i> </a><p>The alternative to good design is always bad design. There is no such thing as no design." -- Adam Judge, author <a href="#">Follow us on Instagram</a></p></li>
<li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Good design is good business." -- Thomas Watson Jr., businessman, second president of IBM <a href="#">Follow us onTwitter</a></p></li>
</ul>
<!--footer_ul2_amrc ends here-->
</div>
</div>
</div>


<div class="container">

<!--foote_bottom_ul_amrc ends here-->
<p class="text-center">Copyright @2022 | Designed With by <a href="https://web.facebook.com/Macheda-Graphics-110845641646635/">Macheda Graphics</a></p>
<p class="text-center">All rights reserved| Terms Of service | Privacy</p> 

<ul class="social_footer_ul">
<li><a href="https://web.facebook.com/Macheda-Graphics-110845641646635/"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="http://webenlance.com"><i class="fab fa-twitter"></i></a></li>
<li><a href="http://webenlance.com"><i class="fab fa-linkedin"></i></a></li>
<li><a href="http://webenlance.com"><i class="fab fa-instagram"></i></a></li>
</ul>
<!--social_footer_ul ends here-->
</div>

</footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


 </body>
</html>