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
</header><br><br>
<br><br>
<article>
<section id="one" >  <form method="get" action="ani1.php"><br><br>
<label id="lng" for="Language">Select College</label>
 <label id="lng1" for="theatre">Select Fest</label>
 <br><br> <select   name="hello"  id="Language" onchange="theatreChange(this);">

    <option value="empty">Select </option>
    <option value="TSEC">TSEC</option>
    <option value="VJTI">VJTI</option>
    <option value="IIT-B">IIT-B</option>

	
	</select>

<select name="college_select" id="theatre"  >
    <option value="0">Select Fest</option>
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
 playLists["empty"] = ["Select a fest"]; 
 playLists["TSEC"] = ["TECHNEXT - Tech", "RUBIX - Tech", "ELAN - Tech", "HACKATHON - Tech","TRIFLES - Cul","AVALANCHE - Cul","JOY OF GIVING - Soc","BLOOD DONATION - Soc"]; 
 playLists["VJTI"] = ["PRATIBIMB - Cul", "TECHNOVANZA - Tech"]; 
 playLists["IIT-B"] = ["MOOD INDIGO - Cul", "TECHFEST - Tech"]; 
 
 
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
if(text=="TECHNEXT - Tech")
{document.getElementById("demo").innerHTML = "Unwind the technical spirals to resolve and explore the dimensions in the world of technology with #TECHNEXT18 .";
	document.getElementById("theImage").src= "TECHNEXT2.jpg";
	document.getElementById("theImage").style= "width:360px;height:350px;";
	document.getElementById("demoa").innerHTML = "COMPUTER SOCIETY OF INDIA-TSEC | #TechSetGo ";
	document.getElementById("demob").innerHTML = "Venue:NB FOYER,TSEC | Date:7th & 8th SEPT ";
	document.getElementById("democ").value= "BOOK NOW";
	document.getElementById("democ").style= "color:white; font-family:comic sans MS; font-size:150%; background-color:black;";
	document.getElementById("two").style= "background: rgba(0, 0, 0, 0.5);height:50%;";
	} 
else if(text=="RUBIX - Tech")
{document.getElementById("demo").innerHTML = "Time to test your technical skills or improve them with various workshops and fun coding competitions!";
	document.getElementById("theImage").src= "RUBIX.jpg";
	document.getElementById("theImage").style= "width:360px;height:350px;";
	document.getElementById("demoa").innerHTML = "COMPUTER SOCIETY OF INDIA-TSEC | #SimplyComplex  ";
	document.getElementById("demob").innerHTML = "Venue:NB FOYER,TSEC | Date:17th & 18th FEB  ";
	document.getElementById("democ").style= "color:white; font-family:comic sans MS; font-size:150%; background-color:black;";
	document.getElementById("two").style= "background: rgba(0, 0, 0, 0.5);height:50%;";
	document.getElementById("democ").value= "BOOK NOW";
	}
else if(text=="ELAN - Tech")
{document.getElementById("demo").innerHTML = "Get an exciting, fun and technical diversion from the rigors of campus life by joining us during ELAN!";
	document.getElementById("theImage").src= "ELAN2.jpg";
	document.getElementById("theImage").style= "width:360px;height:350px;";
	document.getElementById("demoa").innerHTML = "IETE-TSEC | #LetTheGamesBegin ";
	document.getElementById("demob").innerHTML = " Venue:NB FOYER,TSEC | Date:29th SEPT";
	document.getElementById("democ").style= "color:white; font-family:comic sans MS; font-size:150%; background-color:black;";
	document.getElementById("two").style= "background: rgba(0, 0, 0, 0.5);height:50%;";
	document.getElementById("democ").value= "BOOK NOW";
	}
else if(text=="HACKATHON - Tech")
{document.getElementById("demo").innerHTML = "Brace your coding skills and get set go to do some programming for the very first Hackathon at TSEC.";
	document.getElementById("theImage").src= "HACKATHON.jpg";
	document.getElementById("theImage").style= "width:360px;height:350px;";
	document.getElementById("demoa").innerHTML = "TSEC CodeStorm-Campus Chapter of CodeChef | # ";
	document.getElementById("demob").innerHTML = " Venue: TSEC | Date:22nd & 23rd SEPT";
	document.getElementById("democ").style= "color:white; font-family:comic sans MS; font-size:150%; background-color:black;";
	document.getElementById("two").style= "background: rgba(0, 0, 0, 0.5);height:50%;";
	document.getElementById("democ").value= "BOOK NOW";
	}
else if(text=="TRIFLES - Cul")
{document.getElementById("demo").innerHTML = "This March, get set to shake legs as a few stunning and gorgeous performances burn the arena with the PRONITES in TRIFLES 2hazaar18 presented by TSEC Students' Council.</br>Bollywood Night:Arko Pravo Mukherjee, Yasser Desai, Navraj Hans, Priyanka Negi , Shuchismita Das.</br>EDM Night: TeriMiko and Candice Redding.</br>Comedy Night: presented by Shark&Ink, featuring Varun Thakur & Anirban Dasgupta.";
	document.getElementById("theImage").src= "TRIFLES.jpg";
	document.getElementById("theImage").style= "width:360px;height:350px;";
	document.getElementById("demoa").innerHTML = "TSEC Students Council | #TRIFLES2hazaar18 |#EkAakhriBaar";
	document.getElementById("demob").innerHTML = " Venue: National College Court & Audi| Date:22nd-25th MAR";
	document.getElementById("democ").style= "color:white; font-family:comic sans MS; font-size:150%; background-color:black;";
	document.getElementById("two").style= "background: rgba(0, 0, 0, 0.5);height:50%;";
	document.getElementById("democ").value= "BOOK NOW";
	}
else if(text=="AVALANCHE - Cul")
{document.getElementById("demo").innerHTML = "Put on your armor for a fight, it's a battle of freeze against your light. The war of branches is the talent test where victory comes only to the best. This is the friendly strife which will give you companions for life. The TSEC Students' Council presents to you, Avalanche 2018: Fight the freeze!";
	document.getElementById("theImage").src= "AVALANCHE.jpg";
	document.getElementById("theImage").style= "width:360px;height:350px;";
	document.getElementById("demoa").innerHTML = "TSEC Students Council | #FightTheFreeze ";
	document.getElementById("demob").innerHTML = " Venue: TSEC | Date:2Oth & 21st AUG";
	document.getElementById("democ").style= "color:white; font-family:comic sans MS; font-size:150%; background-color:black;";
	document.getElementById("two").style= "background: rgba(0, 0, 0, 0.5);height:50%;";
	document.getElementById("democ").value= "BOOK NOW";
	}
else if(text=="JOY OF GIVING - Soc")
{document.getElementById("demo").innerHTML = " It was rightly said by James Russell Miller,</br>Nothing else in all life is such a maker of joy and cheer as the privilege of doing good.</br>NSS-TSEC is organising an event wherein you can witness the JOY OF GIVING.</br>This event is not only for the NSS volunteers but for anyone who wants to help the needy.";
	document.getElementById("theImage").src= "JOYOF.jpg";
	document.getElementById("theImage").style= "width:360px;height:350px;";
	document.getElementById("demoa").innerHTML = "NSS_TSEC  | #JoyOfGiving ";
	document.getElementById("demob").innerHTML = " Venue:NB FOYER,TSEC  | Date:24th -28th SEPT";
	document.getElementById("democ").style= "color:white; font-family:comic sans MS; font-size:150%; background-color:black;";
	document.getElementById("two").style= "background: rgba(0, 0, 0, 0.5);height:50%;";
	document.getElementById("democ").value= "BOOK NOW";
	}
else if(text=="BLOOD DONATION - Soc")
{document.getElementById("demo").innerHTML = "NSS-TSEC 2018-19 presents </br>Blood Donation Drive with the Tata Memorial Hospital. Along with the drive, NSS-TSEC has organized a Free Thalassemia Health Check-up with Lions Club for one and all in and around college.</br>Blood is meant to circulate, pass it around! DONATE BLOOD, SAVE LIVES!</br>Remember, you dont need to be a DOCTOR to save lives.• Precautions should be taken before donation.";
    document.getElementById("theImage").src= "BLOODDON.jpg";
	document.getElementById("theImage").style= "width:360px;height:350px;";
	document.getElementById("demoa").innerHTML = "NSS_TSEC | #EveryDropCounts ";
	document.getElementById("demob").innerHTML = " Venue:SL, NB,TSEC.  | Date:4th OCT |Timing : 9 am - 5 pm";
	document.getElementById("democ").style= "color:white; font-family:comic sans MS; font-size:150%; background-color:black;";
	document.getElementById("two").style= "background: rgba(0, 0, 0, 0.5);height:50%;";
	document.getElementById("democ").value= "BOOK NOW";
}
else if(text=="TECHNOVANZA - Tech")
{document.getElementById("demo").innerHTML = "The motto of Technovanza is to educate people about the principles of Engineering and thus spreading the knowledge of Engineering and Technology to the society at large.The event's popularity has grown in leaps and bounds over the years and last year close to 35000 people from all over the country attended the event, leading to its grand success. To the under-privileged students in schools the social initiative, Pratigya inspires them to become innovative engineers of tomorrow and to make Mumbai a better place to live, Mission Mumbai gives innovative solutions as future engineers to empower the society. Reaching out to students, industry and the society in general, Technovanza 2017 promises to be bigger than ever!";
	document.getElementById("theImage").src= "TECHNOVANZA.jpg";
	document.getElementById("theImage").style= "width:360px;height:350px;";
	document.getElementById("demoa").innerHTML = " IEEE STUDENT BRANCH | #gotechno  ";
	document.getElementById("demob").innerHTML = " Venue:VJTI | Date:28th-30th DEC";
	document.getElementById("democ").style= "color:white; font-family:comic sans MS; font-size:150%; background-color:black;";
	document.getElementById("two").style= "background: rgba(0, 0, 0, 0.5);height:50%;";
	document.getElementById("democ").value= "BOOK NOW";
	}
else if(text=="PRATIBIMB - Cul")
{document.getElementById("demo").innerHTML = "Pratibimb is the annual national level cultural festival of VJTI. Spread over three days, this mega fest consist of inter and intra college competitions with awards catching the eye of many. Events like street dance, fashion show, flash mob, musical nights have their own appeal and glamour. Of these events, Mumbai's got talent leads the rest. Countless efforts have been put to create cognizance about social and environmental issues through the channel of social drives like Raddi collection, Khushi, cleanliness and tree plantation drives.";
	document.getElementById("theImage").src= "PRATIBIMB.jpg";
	document.getElementById("theImage").style= "width:360px;height:350px;";
	document.getElementById("demoa").innerHTML = " STUDENT COUNCIL| #lightscameraction ";
	document.getElementById("demob").innerHTML = " Venue:VJTI  | Date:19th-21st DEC";
	document.getElementById("democ").style= "color:white; font-family:comic sans MS; font-size:150%; background-color:black;";
	document.getElementById("two").style= "background: rgba(0, 0, 0, 0.5);height:50%;";
	document.getElementById("democ").value= "BOOK NOW";
	}
else if(text=="MOOD INDIGO - Cul")
{document.getElementById("demo").innerHTML = "It is the biggest college cultural fest in Asia.Mood Indigo competitions are based on Music (Singing with the Stars, Western Band, Mantra), Dance (Dancing with the Stars), Theatre (Street Theater, One Act Plays, Skits), Film Making (Director’s Cut), Improvisation (Impromptu Acting, JAM, Extempore), Debate, Stand-up Comedy, Quiz Contests, Poetry, Journalism and other cultural events. Mood Indigo invites celebrities to judge the competitive events. Mood Indigo also offers many non-competitive art and cultural events for visitors to enjoy.";
	document.getElementById("theImage").src= "MOODINDIGO.png";
	document.getElementById("theImage").style= "width:360px;height:350px;";
	document.getElementById("demoa").innerHTML = "CULTURAL | #talentfiesta ";
	document.getElementById("demob").innerHTML = " Venue: IIT-B,POWAI | Date:27th-30th DEC";
	document.getElementById("democ").style= "color:white; font-family:comic sans MS; font-size:150%; background-color:black;";
	document.getElementById("two").style= "background: rgba(0, 0, 0, 0.5);height:50%;";
	document.getElementById("democ").value= "BOOK NOW";
	}

else if(text=="TECHFEST - Tech")
{document.getElementById("demo").innerHTML = "Techfest provides a platform for one and all to witness one of the most beautiful and groundbreaking amalgamation of science and technology with pure delight and enthusiasm. With display of motivating orations, state of the art technology, cut-throat competitions and breathtaking performances for its audience, Techfest for the past 21 years has served to be the ideal destination for the millenials to learn, create and experience the beauty of technology. ";
	document.getElementById("theImage").src= "TECHFEST.jpg";
	document.getElementById("theImage").style= "width:360px;height:350px;";
	document.getElementById("demoa").innerHTML = "STUDENT COMMUNITY | #recognition ";
	document.getElementById("demob").innerHTML = " Venue:IIT-B,POWAI  | Date:14th-16th DEC";
	document.getElementById("democ").style= "color:white; font-family:comic sans MS; font-size:150%; background-color:black;";
	document.getElementById("two").style= "background: rgba(0, 0, 0, 0.5);height:50%;";
	document.getElementById("democ").value= "BOOK NOW";
	}

}
</script>
</body>
</html>