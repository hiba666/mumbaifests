<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport"content="width=device-width, minimum-scale=1.0, initial-scale=1">
</head>
<style> #headbb{width:1250px;height:250px;}
body {
overflow-x:hidden;
background-image:url('theatre.jpg');
}
h2 {
color:yellow;
background-color:#454E0A;
}

header{top:0px;
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
.dropdown:hover .dropdown-content {display: block;}
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
footer{
background-color:#333;
}
h3{
color:white;
}#demo{color:white;font-size:20px;position:static;bottom:400px;padding-left:150px;width:600px;}

#lng1{padding-left:160px;color:white; font-family:comic sans MS; font-size:150%;}
#lng{padding-left:40px;color:white; font-family:comic sans MS; font-size:150%; }
#theImage{float:right;padding:30px;width:0px;}
#demoa{position:static;bottom:150px;padding-left:200px;color:white;font-size:20px;font-family:comic sans MS;}
#demob{position:bottom;bottom:150px;color:white;padding-left:200px;font-size:20px;font-family:comic sans MS;}
#Language{position:absolute;color:white; font-family:comic sans MS; font-size:100%; background-color:#4f3b5b;width: 210px;height:40px;margin: 10px;border-radius:10px 10px 10px 10px;}
#theatre{position:relative;left:370px;color:white; font-family:comic sans MS; font-size:100%; background-color:#4f3b5b;width: 210px;height:40px;margin: 10px;border-radius:10px 10px 10px 10px;}
#one{position:relative;left:300px;background: rgba(0, 0, 0, 0.5);width:600px;height:250px;font-family: Arial, Helvetica, sans-serif;}

@media only screen and (max-width: 415px) {
body {width:360px;
overflow-x:hidden;
}header{width:360px}

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


#lng1{padding-left:60px;color:white; font-family:comic sans MS; font-size:100%;}
#lng{padding-left:40px;color:white; font-family:comic sans MS; font-size:100%; }
#theImage{position:relative;left:30px;padding:30px;width:0px;}
#demoa{position:static;padding-left:0px;color:white;font-size:20px;font-family:comic sans MS;}
#demob{color:white;padding-left:0px;font-size:20px;font-family:comic sans MS;}
#demo{color:white;padding-left:0px;font-size:20px;position:static;bottom:400px;width:360px;}
#Language{position:absolute;color:white; font-family:comic sans MS; font-size:70%; background-color:#4f3b5b;width: 160px;height:40px;margin: 10px;border-radius:10px 10px 10px 10px;}
#theatre{position:relative;left:200px;color:white; font-family:comic sans MS; font-size:70%; background-color:#4f3b5b;width: 160px;height:40px;margin: 10px;border-radius:10px 10px 10px 10px;}
#one{position:relative;left:0px;background: rgba(0, 0, 0, 0.5);width:380px;height:250px;font-family: Arial, Helvetica, sans-serif;}
footer{width:360px;
background-color:#333;
}
	}
</style>
<body>
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
  <a href="theatre.php#contact">Contact Us</a>
 <?php  if (isset($_SESSION['username'])) : ?>
    <a  href="prac.php?logout='1'"style="float:left;left:50px;">logout</a>
    	 
    <?php endif ?>
</div>
</header><br>
<br><br>
<section id="one" >  <form method="get" action="ani.php"><br><br>
<label id="lng" for="Language">Select Language</label>
 <label id="lng1" for="theatre">Select play</label>
 <br><br> <select   name="hello"  id="Language" onchange="theatreChange(this);">

    <option value="empty">Select </option>
    <option value="English">English</option>
    <option value="Hindi">Hindi</option>
    <option value="Marathi">Marathi</option>
  </select>

<select name="theatre_select" id="theatre"  >
    <option value="0">Select a play</option>
  </select><br><br>

  <center><button style="color:white; font-family:comic sans MS; font-size:150%; background-color:black;"type="button" onclick="myFunction1()">PROCEED</button></center><br><br><br>
</section><br><br><section id="two" style="width:0px;">
 <img  id="theImage" src="greya.jpg" ><br><br><br>
<p id="demoa"></p> 
 <p id="demob"></p>
 <p id="demo"></p>
 <br><br>
   <center><input style="  height:0px;width:0px;"type='submit' value='' id='democ'/></center>
</form><br><br><br><br></section>
    <br>
	<br><br><br>
<footer><br><br><br><br>
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
}
function theatreChange(selectObj) { 
 var playLists = new Array(10) 
 playLists["empty"] = ["Select a play"]; 
 playLists["English"] = ["Detective Nau do gyarah", "Mirror Mirror", "3 and a half men"]; 
 playLists["Hindi"] = ["Jab Khuli Kitaab", "Dreams Seher"]; 
 playLists["Marathi"] = ["Tera Divas Premache", "Sakhar Khallela Manus"]; 
 
 var idx = selectObj.selectedIndex; 
 var which = selectObj.options[idx].value; 
 cList = playLists[which]; 
 var cSelect = document.getElementById("theatre"); 
 var len=cSelect.options.length; 
 while (cSelect.options.length > 0) { 
 cSelect.remove(0); 
 } 
 var newOption; 
 // create new options 
 for (var i=0; i<cList.length; i++) { 
 newOption = document.createElement("option"); 
 newOption.value = cList[i];  // assumes option string and value are the same 
 newOption.text=cList[i];  // add the new option 
 try { 
 cSelect.add(newOption);  // this will fail in DOM browsers but is needed for IE 
 } 
 catch (e) { 
 cSelect.appendChild(newOption); 
 } 
 } 
 } 
function myFunction1() {
var sel = document.getElementById("theatre");
var text= sel.options[sel.selectedIndex].text;
if(text=="Mirror Mirror")
{document.getElementById("demo").innerHTML = "Renowned Bollywood actor Minissha Lamba takes the stage for the first time in a story of sibling rivalry that traces the relationship between identical twins Minal and Maanya. It is a riveting story of a woman placed in the most extraordinary circumstances that forever change her destiny.";
	document.getElementById("theImage").src= "mirror.png";
	document.getElementById("theImage").style= "width:360px;height:350px;";
	document.getElementById("demoa").innerHTML = "Mirror, MirrorDrama | English | 1hr 15mins ";
	document.getElementById("demob").innerHTML = "01 Oct Onwards  Multiple Venues | ₹500 Onwards ";
	document.getElementById("democ").value= "BOOK NOW";
	document.getElementById("democ").style= "color:white; font-family:comic sans MS; font-size:150%; background-color:black;";
		document.getElementById("two").style= "background: rgba(0, 0, 0, 0.5);height:50%;";
	} 
else if(text=="Detective Nau do gyarah")
{document.getElementById("demo").innerHTML = "Set in the mesmerizing Mumbai of the black and white era, Shekhar Kumar’s shocking adventure tale is a ridiculous whirlwind of romance, murder, deceit, and suspense. A casual evening at the theatre quickly turns into a fast-paced chase sequence for the unsuspecting hero when gunshots are fired at the legendary Opera House during a performance.";
	document.getElementById("theImage").src= "detect.png";
	document.getElementById("theImage").style= "width:360px;height:350px;";
	document.getElementById("demoa").innerHTML = "Drama | Hindi, English | 1hr 30mins | Age 6+ ";
	document.getElementById("demob").innerHTML = "02 Oct Onwards  Prithvi Theatre | ₹710 Onwards ";
	document.getElementById("democ").value= "BOOK NOW";
	document.getElementById("democ").style= "color:white; font-family:comic sans MS; font-size:150%; background-color:black;";
		document.getElementById("two").style= "background: rgba(0, 0, 0, 0.5);height:50%;";
	}
else if(text=="3 and a half men")
{document.getElementById("demo").innerHTML = "Ethiros Theater Group presents 'Three and a half men' a comedy sketch. Three and a half men comprise of a series of a short hilarious scene, which will be performed by hilarious comic actors. The sketches will revolve around day today's situations that you go through!";
	document.getElementById("theImage").src= "3nhalf.png";
	document.getElementById("theImage").style= "width:360px;height:350px;";
	document.getElementById("demoa").innerHTML = "Comedy | Hindi, English | 1hr | Age 5+ ";
	document.getElementById("demob").innerHTML = " 29 Sep Onwards The Cuckoo Club:Bandra|₹299";
	document.getElementById("democ").value= "BOOK NOW";
	document.getElementById("democ").style= "color:white; font-family:comic sans MS; font-size:150%; background-color:black;";
		document.getElementById("two").style= "background: rgba(0, 0, 0, 0.5);height:50%;";
	}
else if(text=="Jab Khuli Kitaab")
{document.getElementById("demo").innerHTML = "Jab Khuli Kitaab is a family comedy-drama that follows a couple, desperately seeking divorce at the very fag end of their life to the paradoxical point of them reuniting through the process of separation.";
document.getElementById("theImage").src= "kitaab.png";
document.getElementById("theImage").style= "width:360px;height:350px;";
document.getElementById("demoa").innerHTML = "Jab Khuli Kitaab  |Family Drama | Hindi | 1hr 15mins |  ";
	document.getElementById("demob").innerHTML = " 29 Oct  Multiple Venues ₹300 Onwards";
	
	document.getElementById("democ").value= "BOOK NOW";
	document.getElementById("democ").style= "color:white; font-family:comic sans MS; font-size:150%; background-color:black;";
		document.getElementById("two").style= "background: rgba(0, 0, 0, 0.5);height:50%;";
	}
else if(text=="Dreams Seher")
{document.getElementById("theImage").src= "sahar.png";
document.getElementById("theImage").style= "width:360px;height:350px;";
document.getElementById("demo").innerHTML = "Professor Saheb arrives in a quaint town of Kasauli for a quiet weekend, when he is pulled in by the mysterious sister in search. As he tries to help he is engulfed into a dream or a shocking reality .";
document.getElementById("demoa").innerHTML = "Dreams Seher| Family Drama | Hindi | 1 hour";
	document.getElementById("demob").innerHTML = " 02 Nov  Ravindra Bharathi| ₹250 Onwards";
	
	document.getElementById("democ").value= "BOOK NOW";
	document.getElementById("democ").style= "color:white; font-family:comic sans MS; font-size:150%; background-color:black;";
		document.getElementById("two").style= "background: rgba(0, 0, 0, 0.5);height:50%;";
	}

else if(text=="Tera Divas Premache")
{document.getElementById("demo").innerHTML = "A satirical comical situation that emerges out of a grim scenario. "; 
document.getElementById("demoa").innerHTML = "Drama | Marathi | 2hrs 15mins | Age 3";
	document.getElementById("demob").innerHTML = "28 Sep Onwards  Multiple Venues | ₹250 Onwards";
	document.getElementById("theImage").src= "13.png";
	document.getElementById("theImage").style= "width:360px;height:350px;";
	document.getElementById("democ").value= "BOOK NOW";
document.getElementById("democ").style= "color:white; font-family:comic sans MS; font-size:150%; background-color:black;";
		document.getElementById("two").style= "background: rgba(0, 0, 0, 0.5);height:50%;";
	}

else if(text=="Sakhar Khallela Manus")
{document.getElementById("demo").innerHTML = "The play, apparently can be said as the sequel to Prashant's last play, 'Karti Kaljat Ghusli'.";
document.getElementById("demoa").innerHTML = "Sakhar Khallela Manus Drama | Marathi | 2hrs 15mins";
	document.getElementById("theImage").src= "sugar.png";
	document.getElementById("theImage").style= "width:360px;height:350px;";
	document.getElementById("demob").innerHTML = " 03 Nov  Bal Gandharva Rang Mandir| ₹250 Onwards";
	
	document.getElementById("democ").value= "BOOK NOW";
	document.getElementById("democ").style= "color:white; font-family:comic sans MS; font-size:150%; background-color:black;";
		document.getElementById("two").style= "background: rgba(0, 0, 0, 0.5);height:50%;";
	}
}
</script>
</body>
</html>
