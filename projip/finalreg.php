
<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<meta name="google-signin-client_id" content="914487027823-fbaf2if63p3nbci337e911279qhts148.apps.googleusercontent.com">
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="s.js"></script>
<style>.data{display:none;}</style>
</head>

<body>

<div class="g-signin2" data-onsuccess="onSignIn"></div>
<div class="data" style="display:none;"><p> Profile Details</p>
<img id="pic" class="img-circle" width="100" height="100"/>
<p> Email Address</p>
<p id="email" class="alert alert-danger"></p>
<button onclick="signOut()" class="btn btn-danger">Sign Out</button></div>


</body>
</html>

