
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: final_login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: final_login.php");
  }
?><!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport"content="width=device-width, minimum-scale=1.0, initial-scale=1">
<style>#headbb{width:1250px;height:250px;}
#mum{    width:900px;height:250px;}
#ss{width:1200px;height:450px}
#ig{width:900px;height:150px;}
body {
background-image:url('try22.jpg');
}
#myVideo{width:900px}
h2 {
color:yellow;
background-color:rgba(10, 50, 80, 0.5);
}


header{
background-color:black;
}
.container{
position:realtive;
}
.left{
position: absolute;

right:70px;
padding-left:20px;
padding-right:20px;
padding-top:10px;}

.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    cursor: pointer;
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}
.dropdown:hover .dropdown-content {display: block;}
.show {
    display: block;
}
.mySlides {display: none;}
img {vertical-align: middle;}
.slideshow-container {

  position: relative;
  margin: auto;
}
.text {
  color:yellow;
  font-size: 30px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  right:60px;
  text-align: center;
}
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 30px}
}


/* Style the buttons */
.btn {
    border: none;
    outline: none;
    padding: 12px 16px;
    background-color: #881409;
    cursor: pointer;
}

.btn:hover {
    background-color: #CE2919;
}


.btn.active {
    background-color: #CE2919;
    color: white;
}
h2 a{color:white;
text-decoration:none;}
.fa {
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}
.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}
table{
text-align:center;
color:yellow;
}
th{
font-size:30;
color:white;}
footer{width:1250px;
background-color:#333;
}
h3{
color:white;
}
.row {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    padding: 0 10px;
}

/* Create four equal columns that sits next to each other */
.column {
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
    max-width: 50%;
    padding: 0 4px;
}

.column img {
    margin-top: 8px;
    vertical-align: middle;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
    .column {
        -ms-flex: 50%;
        flex: 50%;
        max-width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column {
        -ms-flex: 100%;
        flex: 100%;
        max-width: 100%;
    }
}



@media only screen and (max-width: 415px) {
body {width:360px;
overflow-x:hidden;
}#mum{ width:300px;height:150px;}
#ss{width:300px;height:250px}
header{width:380px;}#myVideo{width:300px;}
#ig{width:300px;height:150px;}
	#headbb{width:380px;height:150px;}
	.navbar {width:380px;
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}
.navbar a {
    float: left;
    font-size: 17px;
    color: white;
    text-align: center;
    padding: 16px 16px;
    text-decoration: none;
}
.left{
position: absolute;
padding-left:8px;
padding-right:8px;
padding-top:10px;}
footer{width:360px;
background-color:#333;
}
.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    cursor: pointer;
    font-size: 20px;    
    border: none;
    outline: none;
    color: white;
    padding: 16px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 8px 8px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}
.dropdown:hover .dropdown-content {display: block;}
.show {
    display: block;
}	.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    cursor: pointer;
    font-size: 17px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 50px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}
.dropdown:hover .dropdown-content {display: block;}
.show {
    display: block;
}}










</style>
<body>
<header><div class="container">
       <img src="bghhh.jpg" id='headbb'>
</div>
        <div class="navbar">
  <a href="prac.php">Home</a>
  
  <div class="dropdown">
    <button class="dropbtn" onclick="myFunction()">Festival Options
  
    </button>
    <div class="dropdown-content" id="myDropdown">
    	  <a href="theatre.php">Theatre Festivals</a>
		  <a href="college.php">College Festivals</a>
      <a href="art.php">Art Festivals</a>
      <a href="food.php">Food Festivals</a>

	    
    </div>
  </div> 
  
  <a href="kform.php" >Feedback</a>
  <a href="about_us.html">About Us</a>
  <a href="prac.php#contact">Contact Us</a>
  <?php  if (isset($_SESSION['username'])) : ?>
    <a  href="prac.php?logout='1'"style="float:left;left:50px;">logout</a>
    	 
    <?php endif ?>
</div>
</header>
<br>
<article>
<center><video autoplay muted loop id="myVideo" >
  <source src="vide.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video></center>
</br>
<center><img src="bgii.png" id="mum"></center>
<div class="slideshow-container">
</br>
<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <center><a href="art.php"><img src="bgf.jpg" id="ss"></center></a>

  <div class="text">ART FESTIVALS</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <center><a href="theatre.php"><img src="bgs.jpg" id="ss"></center></a>
  <div class="text">THEATRE</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <center><a href="food.php"><img src="bgt.jpg" id="ss"></center></a>
  <div class="text">FOOD FEST</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">4/4</div>
  <center><a href="college.php"><img src="bgfi.jpg" id="ss"></center></a>
  <div class="text">COLLEGE FEST</div>
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>  
  <span class="dot"></span> 
</div>

</article>

<marquee><h3 style="color:orange">*************NSS JOY OF GIVING RECENT EVENT CLICK FOR MORE INFORMATION*******************</marquee>
</br></br>

<h2>PAGE INFORMATION</h2>
<p style="color:#14E6F9; font-family:verdana; font-size:150%; background-color:#08454B;">  Mumbai Fest gives you a platform to explore the various fun and exciting events around the city.Indulge in college, arts, food, theatre and cultural fests. From Concerts to Technical competitions, from theatre arts to delicious food in the city, Mumbai Fest will take you to all.</p>
</br></br><center><img src="bgiii.png" id="ig"></center>
</br></br><div style="background:color url("div.jpg");"><div class="row"> 
<div class="column">
    <img src="ig2.png" style="width:300px;height:300px;">
    <img src="ig3.jpg" style="width:300px;height:370px;">
    <img src="ig4.png" style="width:300px;height:300px;">
    <img src="ig10.jpg" style="width:300px;height:300px;">

  </div>
  <div class="column">
   
    <img src="ig9.jpg" style="width:300px;height:300px;">
    <img src="ig6.png" style="width:300px;height:400px;">
    <img src="ig8.jpg" style="width:500px;height:300px;">
   
  </div></div></div>
<footer ><br><br><br><br>
<table style="width:100%">
<tr>
<th>Related links</th>
<th>About Us</th>
<th>Other Options</th>
</tr>
<tr>
<td><a href="https://www.foodpanda.in" target="_blank" style="text-decoration:none;color:yellow;">FoodPanda</td></a>
<td><a href="about_us.html#komal"  style="text-decoration:none;color:yellow;">Komal Aswani</td></a>
<td>Copyrights link</td></tr>
<tr>
<td><a href="https://www.trivago.in" target="_blank" style="text-decoration:none;color:yellow;">Trivago</td></a>
<td><a href="about_us.html#hiba"  style="text-decoration:none;color:yellow;">Mahima Gupta</td></a>
<td>Blog</td></tr>
<tr>
<td><a href="https://festpav.com" target="_blank" style="text-decoration:none;color:yellow;">festpav</td></a>
<td><a href="about_us.html#mahima"  style="text-decoration:none;color:yellow;">Hiba Hussain</td></tr></a>
</table>
<div id='contact'><h3>Contact Us</h3>
<a href="https://www.facebook.com/hiba.hussain.1257"target="_blank" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a><br>
<center><h3>@Copyrights 2018</h3></center>
</footer>
<script>
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
  }
}
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
    setTimeout(showSlides, 1500); // Change image every 2 seconds
}
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// List View
function listView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "100%";
  }
}

// Grid View
function gridView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "30%";
  }
}

/* Optional: Add active class to the current button (highlight it) */
var container = document.getElementById("btnContainer");
var btns = container.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
</body>
</html>
