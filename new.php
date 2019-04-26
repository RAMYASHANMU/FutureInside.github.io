<?php
?>
<!DOCTYPE html>
<html>
<title>Futinureside</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Roboto", sans-serif}
.w3-bar-block .w3-bar-item {
  padding: 16px;
  font-weight: bold;
}
.w3-tangerine {
  font-family: 'Tangerine', serif;
}
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
</style>


<header class="w3-container w3-white">
<div class="w3-row">
  <div class="w3-col s6 w3-white w3-center">
  <p><img src="logo.png" style="padding:20px"></p>
  <p class="fa fa-spinner w3-spin" style="font-size:80px"></p>
  <p class="w3-small w3-tangerine"><b>  “Be the change that you wish to see in the world”</b></p></div>
  <div class="w3-col s6 w3-white w3-center">
  <p>
  <div class="w3-container">
  <div class="w3-panel w3-black">
    <span  class="w3-text-yellow" style="font-size:150px;line-height:0.8em;opacity:0.2">❝</span>
    <p class="w3-xlarge w3-tangerine w3-text-yellow" style="margin-top:-40px"><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non massa vitae risus fermentum ullamcorper.
    Phasellus risus urna, ornare in aliquam id, porttitor sit amet sapien. Nulla facilisi.</i></p>
  </div>


  </p></div>
</div>
</div>
</header>

<body>


<div class="w3-bar w3-yellow">
  <div class="material-icons w3-button">home</div>
  <div class="material-icons w3-button">search</div>
  <div class="material-icons w3-button ">cloud</div>
</div>



<div class="w3-card-4 w3-margin" style="width:30%">
  <img src="m1.png" alt="Nature" style="width:100%">
  <div class="w3-container">
    <h3><b>TITLE HEADING</b></h3>
    <h5>Title description
    <span class="w3-opacity">April 7, 2014</span></h5>
  </div>
  <div class="w3-container">
    <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. </p>
  </div>
</div>





</body>

<div>
<footer class=" w3-teal">
  <h5>Footer</h5>
  <p>Footer information goes here</p>
</footer>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

</body>

</html>