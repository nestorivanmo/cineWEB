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

			<h3><?= $row['titulo'] . '<br>';?></h3>

			<img src="<?=$row['imagen'] ?>">


		<?php }
	}
?>
