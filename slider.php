<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="slider.css" />
    <title>Document</title>
</head>
<body>
<div id="slider">

<ul id="slideWrap"> 
      <li><img src="Logo.png" alt=""></li>
      <li><img src="fun1.jpg" alt=""></li>
      <li><img src="pc5.jpg" alt=""></li>
      <li><img src="coffee.jpg" alt=""></li>
      <li><img src="apple1.jpg" alt=""></li>
    </ul>
    <a id="prev" href="#">&#8810;</a>
    <a id="next" href="#">&#8811;</a>
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
}, 5000);

window.onload = function() {
responsiveSlider();  
}


</script>
</body>
</html>