<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$name    = "";
$phoneno    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '16111998', 'mumbai');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $phoneno = mysqli_real_escape_string($db, $_POST['phoneno']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
$password_2= mysqli_real_escape_string($db, $_POST['password_2']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
   if (empty($name)) { array_push($errors, "Name is required"); }
     if (empty($phoneno)) { array_push($errors, "Number is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
   if (empty($password_2)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM customers WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO customers (`name`,`username`, `email`, `password`,`phone_no.`) 
  			  VALUES('$name','$username', '$email', '$password','$phoneno');";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: final_login.php');
  }
}

// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM customers WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: prac.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }

}



// Payment
if (isset($_POST['pay_btn'])) {
  
  $x= $_SESSION['username']; 
  $number= $_POST['ratingquality']; 
  $pay= $_POST['pay']; 
 $vop= $_GET['theatre_select'];  
 $_SESSION['vop']=$vop;
   $result = mysqli_query($db,"SELECT price FROM theatre WHERE event_name = '$vop'");
   $row = mysqli_fetch_row($result);
$user=$row[0];
$price1=$number*$user;
  	$query = "INSERT INTO billdetails VALUES('$x', '$vop','$number', '$price1','$pay');";
  	mysqli_query($db, $query);
	$queryw = "SELECT tickets_no FROM theatre WHERE event_name='$vop' LIMIT 1";
  	$results = mysqli_query($db, $queryw);
$row = mysqli_fetch_array($results);
$tick = $row['tickets_no'];
	$new=$tick-$number;
	$queryo = "UPDATE theatre SET tickets_no = '$new' where event_name='$vop'";
  	mysqli_query($db, $queryo);
	$queryt= "UPDATE customers SET  events_reg= '$vop' where username='$x'";
  	mysqli_query($db, $queryt);
  	header('location: bill.php');
}
if (isset($_POST['payc_btn'])) {
  
  $x= $_SESSION['username']; 
  $number= $_POST['ratingquality']; 
  $pay= $_POST['pay']; 
 $vop1= $_GET['college_select'];  
 $_SESSION['vop1']=$vop1;
   $result = mysqli_query($db,"SELECT price FROM college WHERE event_name = '$vop1'");
   $row = mysqli_fetch_row($result);
$user=$row[0];
$price1=$number*$user;
  	$query = "INSERT INTO billdetails VALUES('$x', '$vop1','$number', '$price1','$pay');";
  	mysqli_query($db, $query);
	$queryw = "SELECT tickets_no FROM college WHERE event_name='$vop1' LIMIT 1";
  	$results = mysqli_query($db, $queryw);
$row = mysqli_fetch_array($results);
$tick = $row['tickets_no'];
	$new=$tick-$number;
	$queryo = "UPDATE college SET tickets_no = '$new' where event_name='$vop1'";
  	mysqli_query($db, $queryo);
	$queryt= "UPDATE college SET  events_reg= '$vop1' where username='$x'";
  	mysqli_query($db, $queryt);
  	header('location: bill1.php');
}



if(isset($_POST['theatre_events']))
{  $event=$_SESSION['vop'];

$result = mysqli_query($db,"SELECT * FROM billdetails where username='".$_SESSION['username']."' and event_name='$event'");
echo '<div id="bill">';
while($row = mysqli_fetch_array($result))
	
  {
	  echo '<p style="color:yellow; font-family:verdana; font-size:120%; ">&nbsp;&nbsp;Username&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row[0].' </p>';
echo '<p style="color:yellow; font-family:verdana; font-size:100%; ">&nbsp;&nbsp;Event Name&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;'.$row[1].' </p>';
echo '<p style="color:yellow; font-family:verdana; font-size:120%; ">&nbsp;&nbsp;Total Tickets&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;'.$row[2].' </p>';
echo '<p style="color:yellow; font-family:verdana; font-size:120%; ">&nbsp;&nbsp;Price&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row[3].' </p>';
echo '<p style="color:yellow; font-family:verdana; font-size:120%; ">&nbsp;&nbsp;Payment mode&nbsp;:&nbsp;'.$row[4].' </p>';

  }

echo '</div>';


  	
}
if(isset($_POST['college_events']))
{  $event=$_SESSION['vop1'];

$result = mysqli_query($db,"SELECT * FROM billdetails where username='".$_SESSION['username']."' and event_name='$event'");
echo '<div id="bill">';
while($row = mysqli_fetch_array($result))
	
  {
	  echo '<p style="color:yellow; font-family:verdana; font-size:120%; ">&nbsp;&nbsp;Username&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row[0].' </p>';
echo '<p style="color:yellow; font-family:verdana; font-size:100%; ">&nbsp;&nbsp;Event Name&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;'.$row[1].' </p>';
echo '<p style="color:yellow; font-family:verdana; font-size:120%; ">&nbsp;&nbsp;Total Tickets&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;'.$row[2].' </p>';
echo '<p style="color:yellow; font-family:verdana; font-size:120%; ">&nbsp;&nbsp;Price&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row[3].' </p>';
echo '<p style="color:yellow; font-family:verdana; font-size:120%; ">&nbsp;&nbsp;Payment mode&nbsp;:&nbsp;'.$row[4].' </p>';

  }

echo '</div>';


  	
}





 


// FEEDBACK USER


if(isset($_POST['feed_user'])){
$selected_val = $_POST['Events']; 
$vop_val= $_POST['value']; 
$review_val= $_POST['feel']; 
$rating_val= $_POST['ratingquality'];  // Storing Selected Value In Variable
$x=$_SESSION['username'];
  	$query = "INSERT INTO feedback2 (`username`,`event`, `vop`, `review`,`rating`) 
  			  VALUES('$x', '$selected_val', '$vop_val','$review_val','$rating_val');";
  	mysqli_query($db, $query);
  	$_SESSION['success'] = "Feedback recorded";
	echo $_SESSION["success"];
  	header('location: prac.php');
  }


//bill

?>