<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Tienes que iniciar sesión antes";
  	header('location:  registration/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: registration/login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home | PrebeCine</title>
  <link href="https://fonts.googleapis.com/css?family=Creepster|Anton" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style_Home.css">
</head>
<body>

  <?php  if (isset($_SESSION['username'])) : ?>
        <center><h4 id="username">Bienvenido, @<strong> <?= $_SESSION['username'] ?></strong></h4></center>
    <?php endif ?> 
  
    <div class="loader">
      <h1>Movies<h1>
    </div>

   

  <div class="container">
    <div class="box"></div>
  </div>
    <?php  if (isset($_SESSION['username'])) : ?>
        <center><div class="logout"> <a href="index.php?logout='1'" id="textL">Logout</a> </div></center>
    <?php endif ?> 

    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

  <?php include 'movies.php'; ?>
</body>
</html>