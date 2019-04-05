<?php
include 'config.php';
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Home Page</title>
<link rel="stylesheet" type="text/css" href="css/css.css">
</head>
    <body>
    <div class="header">
        <h2>Home Page</h2>
    </div>
        
    <div class="content">
    <?php if(isset($_SESSION['success'])): ?>
    <div class="error success">
        <h3>
            <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
            ?>
        </h3>
    </div>
    <?php endif ?>

    <?php if(isset($_SESSION["username"])): ?>
        <p>Welcome 
        	<strong><?php echo $_SESSION['username']; ?></strong>
        </p>

        <p>
        	<a href="signup.php?Logout='1'" style="color: red;">Logout</a>
        </p>
        <?php endif ?>
    </div>   

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"> </script>	 
</body>
</html>