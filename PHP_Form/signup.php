<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sign up</title>

<!--BOOTSTRAP FILES-->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!--<link href="css/css.css" rel="stylesheet">-->
<link href="css/signup.css" rel="stylesheet">
<link href="css/w3.css" rel="stylesheet">
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-7">
				<h3>ONE ACCOUNT GIVES YOU ACCESS TO ALL</h3>
				<img src="img/android.jpg" title="Andoid" alt="android waving hand.">

				<p style="text-align: center;">
				You Already have an account? <a href="#" style="color:rgb(25,25,200);" onclick="document.getElementById('id01').style.display='block'" class="main">Login Here</a>
				<div id="demo" class="collapse"></div>	
				</p>

<!--START-->
<form action="signup.php" method="POST">
<!--LOGIN MODAL-->
<div id="id01" class="w3-modal">
<div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">

<!--AVATAR-->
<div class="w3-center"><br>
<img src="img/Avatar 1.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
</div>

<!--FORM-->
<div class="w3-container">
<div class="w3-section">
        <label class="pull-left" for="email" style="color:rgb(0, 128, 0)">Username</label>
        <input class="w3-input w3-border w3-margin-bottom" name="username" type="text" required="required" placeholder="Enter username">

        <label class="pull-left" style="color:rgb(0, 128, 0)"><b>Password</b></label>
        <input class="w3-input w3-border" type="password" name="password" required="required" placeholder="Enter Password">

        <button class="w3-btn w3-btn-block w3-green" name="loginbtn">Login</button>

        <input class="w3-check w3-margin-top" type="checkbox" checked="checked">
        <b style="color:rgb(0, 128, 0)">Remember me</b>
</div>
</div>

<!--BUTTON-->
<div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
<button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-btn w3-red pull-left">Cancel</button>

<span class="w3-right w3-padding w3-hide-small" style="color:rgb(0, 128, 0)"><a href="#">Forgot password?</a></span>
</div>

</div>
</div>
</form>

<!--FINISH-->
			</div>


			<div class="col-sm-5">
				<h2>REGISTER WITH US HERE</h2>

				<form action="signup.php" method="POST">
					<?php include 'error.php'; ?> 

					 <div class="form-group">
					 <label for="username">Username:</label>
					 <input type="text" class="form-control" name="username" placeholder="Enter username" required="required">	
					 </div>


					 <div class="form-group">
					 <label for="email">Email:</label>
                     <input type="email" class="form-control" name="email" placeholder="Enter email" required="required">
                     </div>


                     <div class="form-group">
                     <label for="password">Password:</label>
                     <input type="password" class="form-control" name="password" placeholder="Enter password" required="required">
                     </div>

                     <div class="form-group">
                     <label for="password">Confirm Password:</label>
                     <input type="password" class="form-control" name="password_1" placeholder="Confirm password" required="required">
                     </div>
                     
                     <button type="submit" class="btn btn-primary" name="loggedin">Submit</button>

				</form>	
			</div>
		</div>
	</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"> </script>	
</body>
</html>