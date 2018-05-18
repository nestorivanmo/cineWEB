<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Inicia Sesión | PrebeCine</title>
  <link href="https://fonts.googleapis.com/css?family=Creepster|Anton" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
  <div class="header">  
    <h2>Inicia Sesión</h2>
  </div>
   
  <form method="post" action="login.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Usuario</label>
      <input type="text" name="username" >
    </div>
    <div class="input-group">
      <label>Contraseña</label>
      <input type="password" name="password">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="login_user">Login</button>
    </div>
    <p id="redirigeR">
     ¿No eres fan aún? <a href="register.php" id="registrateL">Regístrate</a>
    </p>
  </form>
</body>
</html>