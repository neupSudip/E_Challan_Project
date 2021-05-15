
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Traffic E-challan</title>
    
</head>
<body>
    
<!-- inserting header from header file -->
<?php 
    require "header.php";
?>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="../photo/car.png" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="../photo/car2.png" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="../photo/car3.png" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}



function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}


function myFunction1() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more1");
  var btnText = document.getElementById("myBtn1");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}


</script>


<div class="div-news">


<h2> Top Breaking News </h2> <br>  <div class="div-new">

<h4>Lawmakers get second dose of vaccine while citizens are still waiting for theirs</h4>
<p>Yadav Sharma Dhakal, 65, from Balkot, Bhaktapur, got his first dose of Covishield jab in the second phase of vaccination in early March.
<span id="dots">...</span><span id="more">He was told the second dose would be administered in around two months since his first dose on March 7.

Health officials had told him to keep his ears and eyes open for a government announcement about the second dose. However, the deadline given by the officials has already passed, but there is no indication when will the government start administering the second dose.


</span></p>
<button onclick="myFunction()" id="myBtn">Read more</button>

<br>
<br>

</div>
<div class="div-new">
<h4>Traffic police unveils online payment system for rules violators</h4>
<p>After taking awareness classes for rules violators online, the Metropolitan Traffic Police Division has launched a virtual system to accept traffic fines.
<span id="dots">...</span><span id="more1">With the division office launching its online payment facility on Wednesday, motorists issued traffic tickets no longer need to stand in long queues, officials said.

“We took this decision by assessing the present scenario. This will save the citizens’ time and will also help traffic police become more transparent,” said Senior Superintendent Janak Bhattrai, chief of the division.


</span></p>
<button onclick="myFunction1()" id="myBtn1">Read more</button>

<br>
<br>
</div>
</div>


<!-- inserting footer from footer.php file -->
<?php 
    require "footer.php";
?>

    
</body>
</html>









