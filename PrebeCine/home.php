<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Tienes que iniciar sesión antes";
  	header('location:  login.php');
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
</head>
<body>

  
  <?php  if (isset($_SESSION['username'])) : ?>
        <p> <a href="index.php?logout='1'" style="color: red;">Logout</a> </p>
      <?php endif ?>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>

    <!--<?php include 'movies.php'; ?>-->
</body>
</html>