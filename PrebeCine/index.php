<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Tienes que inicia sersión antes";
  	header('location: registration/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: registration/login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>PrebeCine</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

   <div class="topnav" id="myTopnav">
    <a href="#home" class="active">Home</a>
    <a href="#news">News</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
    <?php  if (isset($_SESSION['username'])) : ?>
        <p> <a href="index.php?logout='1'" style="color: red;">Logout</a> </p>
      <?php endif ?>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>

    <?php  include 'movies.php'; ?>
    
</body>
</html>