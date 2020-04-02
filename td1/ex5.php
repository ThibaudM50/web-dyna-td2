<!DOCTYPE html>
<html>
	<head>
		<title>Ex5</title>
		<meta charset="UTF-8">
	</head>
	<body>

	<?php
	include("file.php");
	?>

	<h2> Création d'un tableau :</h2>
	<form method="POST" >
		<label for="ligne">Lignes : </label>
		<input type="number" value="" name="ligne">
		<label for="col">Colonnes : </label>
		<input type="number" value="" name="col">
		<input type="submit" value="Crée tab">
	</form>
	<br>

	<?php
		$nbLigne=$_POST["ligne"]??10;
		$nbColones=$_POST["col"]??10;
		createHtmlTables($nbLigne,$nbColones);
	?>

	</body>
</html> 