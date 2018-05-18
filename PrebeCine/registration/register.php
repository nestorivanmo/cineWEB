<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
  <title>Regístrate | PrebeCine</title>
  <link href="https://fonts.googleapis.com/css?family=Creepster|Anton" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
  <div class="header2">
  	<h2>Regístrate</h2>
  </div>

  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Usuario</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Correo</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Contraseña</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirmación contraseña</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Regístrate</button>
  	</div>
  	<p id="redirigeR">
  		¿Ya eres fan? <a href="login.php" id="registrateL">Inicia sesión</a>
  	</p>
  </form>
</body>
</html>