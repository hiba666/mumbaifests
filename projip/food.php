<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<link rel="shortcut icon" href="FOOD1.jpg" type="image/jpg">
<title>FOOD FEST</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.4/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
#headbb{width:1250px;height:250px;}
    .bs-example{
		text-align: center;
    overflow: hidden;
    padding-left: 6%;
    }

    .modal-content iframe{
        margin: 0 auto;
        display: block;
    } 
	img:hover {
       cursor: pointer;
   }
   input[type=submit] {
       display: none;
   }
   body {
background-image:url('theatre.jpg');}

header{
background-color:black;
}
.container{
position:realtive;
overflow: hidden;
}
.left{
position: absolute;

right:70px;
padding-left:20px;
padding-right:20px;
padding-top:10px;}
form.example input[type=text] {
    font-size: 17px;
    border: 1px solid grey;
    float: left;
    width: 68%;
    background: #f1f1f1;
}

form.example button {
   float:right;
    width: 20%;
	
    padding: 3px;
    background: blue;

}

form.example::after {
    content: "";
    clear: both;
    display: table;
}
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

.show {
    display: block;
}
.mySlides {display: none;

overflow: hidden;
}
img {vertical-align: middle;}
.slideshow-container {
  max-width: 1000px;
  position: relative;
  padding: 10px;
  margin: auto;
}
.text {
  color:#B6F9F3;
  font-size: 30px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
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

.column {
    float: left;
    width: 50%;
    padding: 30px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
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
  font-size: 25px;
  width: 50px;
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
footer{
background-color:#333;
}
h3{
color:white;
}

.images{
  width:39%;
  height: 320px;
  margin-left: 3%;
  margin-right: 3%;
  float: left;
  margin-top: 50px;
  margin-bottom: 50px;
}


@media(max-width: 480px){
#headbb{width:380px;height:150px;}
.tit{
  font-size: 40px;
}

.bs-example{
  width: 100%;
  margin: 0%;
  padding: 0%;
   }

.images{
  width:90%;
  height: 250px;
  margin-left: 2.5%;
  padding: 0%;
  float: left;
  margin-top: 20px;
  margin-bottom: 20px;
}

}
.tit{

  font-size: 80px;
  color: blue;
}

@media (max-width: 450px){

.tit{
  font-size: 40px;
}
}
</style>

</head>
<body>
<header><div class="container">
       <img src="bghhh.jpg" id="headbb"></div>
<div class= "left">
<form class="example"  style="max-width:300px">
  <input type="text" placeholder="Search.." name="search2">
  <button type="submit" >OK</button>
</form></div></div>
        <div class="navbar">
  <a href="prac.php">Home</a>
  
  <div class="dropdown">
    <button class="dropbtn" onclick="myFunction()">Festival Options
  
    </button>
    <div class="dropdown-content" id="myDropdown">
      <a href="college.php">College Festivals</a>
      <a href="art.php">Art Festivals</a>
      <a href="food.php">Food Festivals</a>
	  <a href="theatre.php">Theatre Festivals</a>
    </div>
  </div> 
  
  <a href="kform.php">Feedback</a>
  <a href="about_us.html">About Us</a>
  <a href="food.php#contact">Contact Us</a>
<?php  if (isset($_SESSION['username'])) : ?>
    <a  href="prac.php?logout='1'"style="float:left;left:50px;">logout</a>
    	 
    <?php endif ?>

</div>
</header><br>
  <h1 class="tit"  align="center">FOOD FESTIVAL</h1>
<article>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="Food7.png" style="width:100%;height:300px">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="Food6.jpg" style="width:100%;height:300px">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="Food5.jpg" style="width:100%;height:300px">
</div>
<div class="mySlides fade">
  <div class="numbertext">4/ 5</div>
  <img src="Food8.jpg" style="width:100%;height:300px">
</div>
<div class="mySlides fade">
  <div class="numbertext">5/ 5</div>
  <img src="Food9.jpg" style="width:100%;height:300px">
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

</article>

<div class="bs-example" style="overflow: hidden; text-align: center;">

    <!-- Button HTML (to Trigger Modal) -->
    <div class="images">
	<img src="FOOD1.jpg" href="#myModal" style="height:100%; width:100%;border:2px solid purple;margin-left:2.5%;margin-right:2.5%; " data-toggle="modal"/>
  </div> 
    <div id="myModal" class="modal fade" style="padding: 0px;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="border:none;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
					<div class="row" style="border:none;">
						<img src="FOOD1.jpg" style="border: 3px solid purple; width:90%; height:90%; ">
					</div>
                
                <div class="modal-body" style="border: 0px;">
					<div class="col-md-11">
					
						<h2 style="text-align: center; border: none; margin: 0px;padding: 0px;"> Unlimited Chinese Week</h2>
						<h5 class="modal-body" style="text-align: center; margin: 0px; padding: 0px;"><i class="fa fa-calendar" style="font-size:20px;padding: 0px;"></i> Sun, 21 Oct 2018 12:00PM - 1:00PM</h5>
						<!--location icon-->
						<h5 class="modal-body" style="margin-left:30px; text-align: center; padding: 0px;"><a href="#"><span class="glyphicon glyphicon-map-marker"></span></a> Dumpling Khang</h5>		
						<h5 class="modal-body" style="text-align:center; margin-left: 10px;padding: 0px;"><i class="fa fa-rupee rup" style="font-size:16px;margin-right: 0px;margin-left: 10px; padding: 0px;"></i> Rs 750</h5>
					</div>    
                </div>
                <div class="modal-footer" style="border: none;">
					<button type="button" class="btn btn-danger" onclick="location.href ='http://localhost/FEST/anifood4.php';" data-dismiss="modal" style="margin-right: 221px;background-color: purple !important; border-color: purple !important">INTERESTED</button>
				</div>
			</div>
        </div>
    </div>
	

  <div class="images">
	<img src="FOOD2.jpg" href="#myModal2" style="height:100%; width:100%;border:2px solid purple;margin-left:2.5%;margin-right:2.5%;" data-toggle="modal"/>
</div>
    <!-- Modal HTML -->
    <div id="myModal2" class="modal fade" style="padding: 0px;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="border:none;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="float: right;">&times;</button>
                    </div>
					<div class="row" style="border:none;">
						<img src="FOOD2.jpg" style="border: 3px solid purple; width:90%; height:100%; ">
					</div>
                
                <div class="modal-body" style="border: 0px;">
					<div class="col-md-11">
					
						<h2 style="text-align: center; border: none; margin: 0px;padding: 0px;"> Creed Oktober Fest</h2>
						<h5 class="modal-body" style="text-align: center; margin: 0px; padding: 0px;"><i class="fa fa-calendar" style="font-size:20px;padding: 0px;"></i> Sat, 27 Oct 5:00PM - Sun, 28 Oct 12:30AM</h5>
						<!--location icon-->
						<h5 class="modal-body" style="margin-left:35px; text-align: center; padding: 0px;"><a href="#"><span class="glyphicon glyphicon-map-marker"></span></a> Chitrarth Studio, Powai</h5>		
						<h5 class="modal-body" style="text-align:center; margin-left: 15px;padding: 0px;"><i class="fa fa-rupee rup" style="font-size:16px;margin-right: 0px;margin-left: 10px; padding: 0px;"></i> Rs 100</h5>
					</div>    
                </div>
                <div class="modal-footer" style="border: none;">
					<button type="button" class="btn btn-danger" onclick="location.href ='http://localhost/FEST/anifood3.php';" data-dismiss="modal" style="margin-right: 221px;background-color: purple !important; border-color: purple !important">INTERESTED</button>
				</div>
			</div>
        </div>
    </div>					



<div class="images">
	<img src="FOOD3.jpg" href="#myModal3" style="height:100%; width:100%;border:2px solid purple;margin-left:2.5%;margin-right:2.5%; " data-toggle="modal"/> 
</div>
    <div id="myModal3" class="modal fade" style="padding: 0px;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="border:none;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
					<div class="row" style="border:none;">
						<img src="FOOD3.jpg" style="border: 3px solid purple; width:90%; height:100%; ">
					</div>
                
                <div class="modal-body" style="border: 0px;">
					<div class="col-md-11">
					
						<h2 style="text-align: center; border: none; margin: 0px;padding: 0px;"> Pani Puri Eating Competition</h2>
						<h5 class="modal-body" style="text-align: center; margin: 0px; padding: 0px;"><i class="fa fa-calendar" style="font-size:20px;padding: 0px;"></i>Sat, 24 Nov 12:00PM - 6:00PM </h5>
						<!--location icon-->
						<h5 class="modal-body" style="margin-left:35px; text-align: center; padding: 0px;"><a href="#"><span class="glyphicon glyphicon-map-marker"></span></a> St Anthonys Girls High School</h5>		
						<h5 class="modal-body" style="text-align:center; margin-left: 15px;padding: 0px;"><i class="fa fa-rupee rup" style="font-size:16px;margin-right: 0px;margin-left: 10px; padding: 0px;"></i> Rs 200</h5>
					</div>    
                </div>
                <div class="modal-footer" style="border: none;">
					<button type="button" class="btn btn-danger" onclick="location.href ='http://localhost/FEST/anifood2.php';" data-dismiss="modal" style="margin-right: 221px;background-color: purple !important; border-color: purple !important">INTERESTED</button>
				</div>
			</div>
        </div>
    </div>



<div class="images">
	<img src="FOOD4.png" href="#myModal4" style="height: 100%;width:100%;border:2px solid purple;margin-left:2.5%;margin-right:2.5%; " data-toggle="modal"/>
  </div> 
    <div id="myModal4" class="modal fade" style="padding: 0px;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="border:none;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
					<div class="row" style="border:none;">
						<img src="FOOD4.png" style="border: 3px solid purple; width:90%; height:100%; ">
					</div>
                
                <div class="modal-body" style="border: 0px;">
					<div class="col-md-11">
					
						<h2 style="text-align: center; border: none; margin: 0px;padding: 0px;"> This Crazy Food Festival</h2>
						<h5 class="modal-body" style="text-align: center; margin: 0px; padding: 0px;"><i class="fa fa-calendar" style="font-size:20px;padding: 0px;"></i> 	Sat, 8 Dec 1:00PM</h5>
						<!--location icon-->
						<h5 class="modal-body" style="margin-left:35px; text-align: center; padding: 0px;"><a href="#"><span class="glyphicon glyphicon-map-marker"></span></a> Mahalakshmi Race Course , Mumbai</h5>		
						<h5 class="modal-body" style="text-align:center; margin-left: 15px;padding: 0px;"><i class="fa fa-rupee rup" style="font-size:16px;margin-right: 0px;margin-left: 10px; padding: 0px;"></i> Rs 300 onwards</h5>
					</div>    
                </div>
                <div class="modal-footer" style="border: none;">
					
					
					
					<button type="submit" onclick="location.href ='http://localhost/FEST/anifood1.php';" class="btn btn-danger" name="interested4" value="This Crazy Food Festival" data-dismiss="modal" style="margin-right: 221px;background-color: purple !important; border-color: purple !important" >INTERESTED</button>
					
				</div>
			</div>
        </div>
    </div>
	
	
	
</div>
<footer><br><br><br>
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
<a href="https://www.facebook.com/mahima.gupta.39794895"target="_blank" class="fa fa-facebook"></a>
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
    setTimeout(showSlides, 2000); // Change image every 2 seconds
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