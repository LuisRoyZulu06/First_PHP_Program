<?php
session_start();

$errors = array();
$serverHost = "localhost";
$user = "root";
$password = "";
$DB = "form";

$conn = new mysqli($serverHost, $user, $password, $DB);

// CONFIRMING CONNECTION TO DATABASE
/*if($conn -> connect_error){
	die("Connection Failed").$conn -> connect_error;
}else{
	echo "Connected!";
}
*/

//<!--SENDING DATA TO DB-->
if(isset($_POST['loggedin'])){
  session_start();
  $username = mysql_real_escape_string($_POST['username']);
  $email = mysql_real_escape_string($_POST['email']);
  $password = mysql_real_escape_string($_POST['password']);
  $password_1 = mysql_real_escape_string($_POST['password_1']);

  if($password != $password_1){
        array_push($errors, "The Two Passwords Do Not Match");
    }

if($password == $password_1){
  //createUser
  $password = md5($password);
  $sql = "INSERT INTO users(username, email, password) VALUES('$username','$email','$password')";
  mysqli_query($conn,$sql); 

  $_SESSION['username'] = $username;
  $_SESSION['success'] = "You are now logged in";
  header("location: index.php"); //redirects to home page
	}
}



//log user-in from login page
if(isset($_POST['loginbtn'])){
    $username = mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string($_POST['password']);

    if(count($errors)==0){
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username = '$username' AND password='$password'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result)==1){
            //Log user in
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location:index.php'); //Redirecting/Going to home page
        }else{
            array_push($errors, "Wrong username/password");   
        }
    }
}

///Logout
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location: signup.php');
  }
?>