<?php
	
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'prebecine';

	$conn = mysqli_connect($host, $user, $pass, $db);
	$query = "SELECT * FROM peliculas;";
	$result = mysqli_query($conn, $query);

	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {?>

			<h1><?= $row['titulo'] . '<br>';?></h1>

			<img  src="<?=$row['imagen'] ?>" >

			<h6><?= $row['descripcion'] . '<br>';?></h6>
			<h6><?= $row['director'] . '<br>';?></h6>
			<h6><?= $row['year'] . '<br>';?></h6>
			<h6><?= $row['duracion'] . '<br>';?></h6>
			<h6><?= $row['clasificacion'] . '<br>';?></h6>
			<h6><?= $row['horarios'] . '<br>';?></h6>

		<?php }
	}
?>
