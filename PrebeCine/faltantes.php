<div class='movie-container'>
			    <div class='header'>
			    <h1><?= $row['titulo'] ?></h1>
			    <span class='year'>( <?= $row['year'] ?> )</span>
			    </div>
    <div class='content'>
    <div class='left-column'>
    <!-- Image width and height multiplied by 1.3 (to make them a bit bigger) -->
    <img width='<?php 67*1.3 ?>' height='<?= 98*1.3 ?>' src='<?= $row['imagen'] ?>'>

			<h1><?= $row['titulo'] . '<br>';?></h1>

			<h6><?= $row['descripcion'] . '<br>';?></h6>
			<h6><?= $row['director'] . '<br>';?></h6>
			<h6><?= $row['year'] . '<br>';?></h6>
			<h6><?= $row['duracion'] . '<br>';?></h6>
			<h6><?= $row['clasificacion'] . '<br>';?></h6>
			<h6><?= $row['horarios'] . '<br>';?></h6>
