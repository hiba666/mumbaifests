
<?php include('server.php') ?>
<!Doctype html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport"content="width=device-width, minimum-scale=1.0, initial-scale=1">
<head>
<title>MUMBAI FEST</title>
</head>
<style>#headbb{width:1250px;height:250px;}
body 
{overflow-x:hidden;
   background-image: url("try211.jpg");
   background-repeat:no-repeat;
  background-size: cover;
}
h1
{
color:white;
font-family:Comic Sans MS;
font-size: 230%;
background-color:black;

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

#one{margin-left:300px;padding-left:40px;background: rgba(0, 0, 0, 0.5);width:600px;height:1000px;}



@media only screen and (max-width: 415px) {
body {width:360px;
overflow-x:hidden;
}
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
}
#one{margin-left:0px;padding-left:40px;background: rgba(0, 0, 0, 0.5);width:300px;height:1000px;}}


</style>
<body>
<header><div class="container">
       <img src="bghhh.jpg" id="headbb">

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
  
  <a href="kform.php" >Feedback</a>
  <a href="about_us.html">About Us</a>
  <a href="kform.php#contact">Contact Us</a>

</div>

</header>
<br>
	<center><p style="color:white; font-family:comic sans MS;font-size:200%;">Welcome <?php echo $_SESSION['username']; ?></p></center>
<section id="one" >
<FORM name="Reg" method="post">

    <legend><font face="Garamond" color="white" size='6'><b>Review</b><br></font></legend>
    <br><font color="white" size=5 > 
	Which event did you attend?<br>
     <select name="Events" style="color:white; font-family:comic sans MS; font-size:100%; background-color:#4f3b5b;width: 210px;height:40px;margin: 10px;border-radius:10px 10px 10px 10px;">
  <option value="Kalaghoda">Kalaghoda</option>
  <option value="Trifles">Trifles</option>
  <option value="Joy_of_giving">Joy of Giving</option>
  <option value="Technext">Technext</option>
</select>
 <br><br>

    Overall,how entertaining was the event?<br><br>

<input id="slider1" type="range" min="100" max="500" step="10" /> <br><br>
    After the event, how did you feel?<br>
  <font color="#F4FF00" size=5> <input type="radio"
     name="feel" value="Boring"/>Boring<br>
<input type="radio"
     name="feel"value="Exciting">Exciting<br>
<input type="radio"
     name="feel"value="Excellent"/>Excellent
</font><br><br>

Do you feel the day provided value for money?<br><br>
<font color="yellow" size=5>
<input type="radio"
     name="value" value="YES">YES<br>
<input type="radio"
     name="value"value="NO"/>NO</font><br>

 <p>Ratings</p>
 <font color="yellow" size=5>
 <input type="radio" name="ratingquality" value="5stars">5 stars<br>
 <input type="radio" name="ratingquality" value="4stars">4 stars<br> 
 <input type="radio" name="ratingquality" value="3stars">3 stars<br> 
 <input type="radio" name="ratingquality" value="2stars">2 stars<br>
 <input type="radio" name="ratingquality" value="1star">1 star<br>
</font></font>




<center><input type="submit" name="feed_user" text="Submit" style="color:blue; font-family:comic sans MS; font-size:150%; background-color:#CFB7FB;width: 250px;"></font></center>
</form>

</FORM>
</section>
<footer ><br><br><br><br>
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
var e = document.getElementById("Events");
var strUser = e.options[e.selectedIndex].text;
</script>

</BODY>
</HTML>

