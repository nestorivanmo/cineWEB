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

	<div class="container">
			<div class="box">
				<div class="imgBox">
				<img width='<?php 67*1.3 ?>' height='<?= 98*1.3 ?>' src='<?= $row['imagen'] ?>'> 
				<div class="info">
					<div class="content">
						<h1><?= $row['titulo'] . '<br>';?></h1>

						<h5><?= $row['descripcion'] . '<br>';?></h5>
						<h5><strong>Director: </strong><?= $row['director'] . '<br>';?></h5>
						<h5><strong>Año: </strong><?= $row['year'] . '<br>';?></h5>
						<h5><strong>Duración: </strong><?= $row['duracion'] . '<br>';?> min</h5>
						<h5><strong>Clasificación: </strong><?= $row['clasificacion'] . '<br>';?></h5>
						<h5><strong>Horarios: </strong><?= $row['horarios'] . '<br>';?></h5>
					</div>
				</div>
				</div>
			</div>	
	</div>	
		<?php }
	}
?>
