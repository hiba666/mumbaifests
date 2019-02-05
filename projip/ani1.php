<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport"content="width=device-width, minimum-scale=1.0, initial-scale=1">
<body>
<style>

body {
overflow-x:hidden;
background-image:url('theatre.jpg');
}
h2 {
color:yellow;
background-color:#454E0A;
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
.dropdown:hover .dropdown-content {display: block;}
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



.wiggle {
 padding-left:60px;
  width:300px;
  height:300px;
  box-shadow:4px 4px 8px 4px rgba(0,0,0,.15);
}

.wiggle:hover {
  -webkit-animation:none;
}

.short-animate {
  -webkit-transition:.5s ease-in-out;
  -moz-transition:.5s ease-in-out;
  -ms-transition:.5s ease-in-out;
  -o-transition:.5s ease-in-out;
  transition:.5s ease-in-out;
}

.long-animate {
  -webkit-transition: .5s .5s ease-in-out;
  -moz-transition: .5s .5s ease-in-out;
  -ms-transition: .5s .5s ease-in-out;
  -o-transition:.5s .5s ease-in-out;
  transition:.5s .5s ease-in-out;
}

.lightbox {
  width:600px;
 
  height:max-height;
  margin-left:700px;
  position:fixed;
  top:-100%;
  bottom:100%;
  left:0;
  right:0;

 background: linear-gradient(rgba(5,5,5,.7), rgba(5,55,25,.5)), url("collg.png");
  background-repeat: no-repeat;
background-size: cover;
  
}

.lightbox img {height:max-height;
  position:absolute;
  margin:auto;
  top:0;
  left:0;
  right:0;
  bottom:0;
  max-width:0%;
  max-height:0%;
}

#lightbox-controls {
  position:fixed;
  height:70px;
  width:70px;
  top:-70px;
  right:0;
  z-index:502;
  background:rgba(0,0,0,.1);
}

#close-lightbox {
  display:block;
  position:absolute;
  overflow:hidden;
  height:50px;
  width:50px;
  text-indent:-5000px;
  right:10px;
  top:10px;
  -webkit-transform:rotate(45deg);
  -moz-transform:rotate(45deg);
  -ms-transform:rotate(45deg);
  -o-transform:rotate(45deg);
  transform:rotate(45deg);
}

#close-lightbox:before {
  content:'';
  display:block;
  position:absolute;
  height:0px;
  width:3px;
  left:24px;
  top:0;
  background:white;
  border-radius:2px;
  -webkit-transition: .5s .5s ease-in-out;
  -moz-transition: .5s .5s ease-in-out;
  -ms-transition: .5s .5s ease-in-out;
  -o-transition:.5s .5s ease-in-out;
  transition:.5s .5s ease-in-out;
}

#close-lightbox:after {
  content:'';
  display:block;
  position:absolute;
  width:0px;
  height:3px;
  top:24px;
  left:0;
  background:white;
  border-radius:2px;
  -webkit-transition: .5s 1s ease-in-out;
  -moz-transition: .5s 1s ease-in-out;
  -ms-transition: .5s 1s ease-in-out;
  -o-transition:.5s 1s ease-in-out;
  transition:.5s 1s ease-in-out;
}

.lightbox:target {
  top:0%;
  bottom:0%;
  opacity:1;
}

.lightbox:target img {
  max-width:50%;
  max-height:50%;
}

.lightbox:target ~ #lightbox-controls {
  top:0px;
}

.lightbox:target ~ #lightbox-controls #close-lightbox:after {
  width:50px;
}

.lightbox:target ~ #lightbox-controls #close-lightbox:before {
  height:50px;
}

@-webkit-keyframes wiggle {
    0% {
      -webkit-transform:rotate(2deg);
  }
  20% {-webkit-transform:rotate(-2deg);}
  40% {-webkit-transform:rotate(2deg);}
  60% {-webkit-transform:rotate(-2deg);}
  80% {-webkit-transform:rotate(2deg);}
    100% {-webkit-transform:rotate(-2deg);}
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

h3{
color:white;
}
#headbb{width:1250px;height:250px;}
#ii{width:400px; height:400px; }
@media only screen and (max-width: 415px) {
	
body {width:360px;
overflow-x:hidden;
}header{width:380px}

	#headbb{width:414px;height:150px;}
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
#ii{width:280px; height:300px;position:static; right:10px;}
.wiggle {

  box-shadow:4px 4px 8px 4px rgba(0,0,0,.15);
}

.wiggle:hover {
  -webkit-animation:none;
}

.short-animate {
  -webkit-transition:.5s ease-in-out;
  -moz-transition:.5s ease-in-out;
  -ms-transition:.5s ease-in-out;
  -o-transition:.5s ease-in-out;
  transition:.5s ease-in-out;
}

.long-animate {
  -webkit-transition: .5s .5s ease-in-out;
  -moz-transition: .5s .5s ease-in-out;
  -ms-transition: .5s .5s ease-in-out;
  -o-transition:.5s .5s ease-in-out;
  transition:.5s .5s ease-in-out;
}

.lightbox {
  width:300px;
 
  height:660px;
  margin-left:0px;
  position:fixed;
  top:-100%;
  bottom:100%;
  left:70;
  right:0;

 background: linear-gradient(rgba(5,5,5,.7), rgba(5,55,25,.5)), url("collg.png");
  background-repeat: no-repeat;
background-size:cover;
  
}

.lightbox img {height:max-height;
  position:absolute;
  margin:auto;
  top:0;
  left:0;
  right:0;
  bottom:0;
  max-width:0%;
  max-height:0%;
}

#lightbox-controls {
  position:fixed;
  height:70px;
  width:70px;
  top:-70px;
  right:0;
  z-index:502;
  background:rgba(0,0,0,.1);
}

#close-lightbox {
  display:block;
  position:absolute;
  overflow:hidden;
  height:50px;
  width:50px;
  text-indent:-5000px;
  right:10px;
  top:10px;
  -webkit-transform:rotate(45deg);
  -moz-transform:rotate(45deg);
  -ms-transform:rotate(45deg);
  -o-transform:rotate(45deg);
  transform:rotate(45deg);
}

#close-lightbox:before {
  content:'';
  display:block;
  position:absolute;
  height:0px;
  width:3px;
  left:24px;
  top:0;
  background:white;
  border-radius:2px;
  -webkit-transition: .5s .5s ease-in-out;
  -moz-transition: .5s .5s ease-in-out;
  -ms-transition: .5s .5s ease-in-out;
  -o-transition:.5s .5s ease-in-out;
  transition:.5s .5s ease-in-out;
}

#close-lightbox:after {
  content:'';
  display:block;
  position:absolute;
  width:0px;
  height:3px;
  top:24px;
  left:0;
  background:white;
  border-radius:2px;
  -webkit-transition: .5s 1s ease-in-out;
  -moz-transition: .5s 1s ease-in-out;
  -ms-transition: .5s 1s ease-in-out;
  -o-transition:.5s 1s ease-in-out;
  transition:.5s 1s ease-in-out;
}

.lightbox:target {
  top:0%;
  bottom:0%;
  opacity:1;
}

.lightbox:target img {
  max-width:50%;
  max-height:50%;
}

.lightbox:target ~ #lightbox-controls {
  top:0px;
}

.lightbox:target ~ #lightbox-controls #close-lightbox:after {
  width:50px;
}

.lightbox:target ~ #lightbox-controls #close-lightbox:before {
  height:50px;
}

@-webkit-keyframes wiggle {
    0% {
      -webkit-transform:rotate(2deg);
  }
  20% {-webkit-transform:rotate(-2deg);}
  40% {-webkit-transform:rotate(2deg);}
  60% {-webkit-transform:rotate(-2deg);}
  80% {-webkit-transform:rotate(2deg);}
    100% {-webkit-transform:rotate(-2deg);}
}

footer{width:380px;
background-color:#333;
}
	}
</style>

<header><div class="container">
       <img src="bghhh.jpg" id="headbb">
</div>
        <div class="navbar">
  <a href="prac.php">Home</a>
  
  <div class="dropdown">
    <button class="dropbtn" onclick="myFunction()">Festival Options
  
    </button>
    <div class="dropdown-content" id="myDropdown">
    	  <a href="theatre.php">Theatre Festivals</a>
      <a href="art.php">Art Festivals</a>
      <a href="food.php">Food Festivals</a>

	    <a href="college.php">College Festivals</a>
    </div>
  </div> 
  
  <a href="kform.php">Feedback</a>
  <a href="about_us.html">About Us</a>
  <a href="ani.php#contact">Contact Us</a>
 <?php  if (isset($_SESSION['username'])) : ?>
    <a  href="prac.php?logout='1'"style="float:left;left:50px;">logout</a>
    	 
    <?php endif ?>
</div>
</header><br>

<a href="#image1" class="wiggle"><img src="booknow1.jpg" id="ii"name="m" /></a>
 <div class="lightbox short-animate" id="image1">
    <img class="long-animate" src=""/>
    <CENTER><H1><font face="Garamond" color="white"><?php echo $_GET['college_select'];?></H1></CENTER></font>
<br><br>
<FORM name="Reg" method="post">
    <font face="Garamond" color="white" size=6><b>How many ticketss?</b></font><br>
    <font color="white" size=5>
 <input type="radio" name="ratingquality" value="1"> 
 <input type="radio" name="ratingquality" value="2">  
 <input type="radio" name="ratingquality" value="3">  
 <input type="radio" name="ratingquality" value="4"> 
 <input type="radio" name="ratingquality" value="5">
<br>
&nbsp;1&nbsp;  2&nbsp;  3  &nbsp;4 &nbsp; 5 
</font><br>
 
<br>
   



    <font face="Garamond" color="white" size=6 ><b>Payment mode</b></font><br>
 <font color="white" size=5>
 <input type="radio" name="pay" value="Debit card">Debit card<br>
 <input type="radio" name="pay" value="Credit card">Credit card<br> 
 <input type="radio" name="pay" value="Paytm">Paytm<br> 
 <input type="radio" name="pay" value="Phonepe">Phonepe<br>
 <input type="radio" name="pay" value="AmazonPay">AmazonPay<br>
</font>
</fieldset>

 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
 <font face=" Bookman" color="black"><input type="submit" name="payc_btn" value="Pay" style="width:150px;margin-left:150px; color:white; font-family:comic sans MS; font-size:150%; background-color:Transparent;"></font>
</form>

</div>


  <div id="lightbox-controls" class="short-animate">
    <a id="close-lightbox" class="long-animate" href="#!">Close Lightbox</a>
  </div>
</div>
</article><br><br><br><br>
<footer style="background-color:#333;" >
<table style="width:100%">

<tr>
<th>Related links</th>
<th>About Us</th>
<th>Other Options</th>
</tr>
<tr>
<td><a href="https://festpav.com" target="_blank" style="text-decoration:none;color:yellow;">festpav</td></a>
<td><a href="about_us.html#mahima"  style="text-decoration:none;color:yellow;">Hiba Hussain</td></tr></a>
<tr>
<td><a href="https://www.foodpanda.in" target="_blank" style="text-decoration:none;color:yellow;">FoodPanda</td></a>
<td><a href="about_us.html#komal"  style="text-decoration:none;color:yellow;">Komal Aswani</td></a>
<td>Copyrights link</td></tr>
<tr>
<td><a href="https://www.trivago.in" target="_blank" style="text-decoration:none;color:yellow;">Trivago</td></a>
<td><a href="about_us.html#hiba"  style="text-decoration:none;color:yellow;">Mahima Gupta</td></a>
<td>Blog</td></tr>

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
}</script>
</body>
</html>
