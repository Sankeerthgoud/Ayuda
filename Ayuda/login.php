<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ayuda</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/admin.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">AYUDA</a>
        </div>
      </div>
    </div>


<?php $message=""; ?>

    <div id="main">
    <h1>Admin Login</h1>
    <div id="login">
    <h2>Login Form</h2>
    <form name="frmUser" method="post" action="">
    <div class="message"><?php if($message!="") echo $message; ?></div>
    <label>UserName :</label>
    <input id="name" name="username" placeholder="username" type="text">
    <label>Password :</label>
    <input id="password" name="password" placeholder="**********" type="password">
    <input name="submit" type="submit" value="Login">
    </form>
    </div>
    </div>


  <?php
      session_start(); // Starting Session
     // Variable To Store Error Message
      if (isset($_POST['submit'])) {
      if (empty($_POST['username']) || empty($_POST['password'])) {
      $message = "Username or Password is invalid";
      echo $message;
      }
      else
      {
      // Define $username and $password
      $username=$_POST['username'];
      $password=$_POST['password'];
      // Establishing Connection with Server by passing server_name, user_id and password as a parameter
      $conn = new mysqli("localhost","root","","ayuda");
      // SQL query to fetch information of registerd users and finds user match.
      $query = $conn->query("SELECT * FROM login WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
      $rows = mysqli_num_rows($query);
      if ($rows == 1) {
      $_SESSION['username']=$username; // Initializing Session
      header("location: admin.php"); // Redirecting To Other Page
      } else {
      $message = "Username or Password is invalid";
      echo $message;
      }
      $conn->close(); // Closing Connection
      }
      }
      ?>

    <!-- Fixed footer -->
    <div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
    	<div class="container">
    		<div class="navbar-text pull-left">
    			<p>© Sankeerth</p>
    		</div>
    		<div class="navbar-text pull-right">
          <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
    			<a href="#"><i class="fa fa-twitter fa-2x"></i></a>
    			<a href="#"><i class="fa fa-google-plus fa-2x"></i></a>
    		</div>
    	</div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
