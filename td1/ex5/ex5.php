<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<label for="contenue">C*L</label>
		<input id="colonnes" name="colonnes" placeholder="Colonnes"></input>
		<input id="lignes" name="lignes" placeholder="Lignes"></input>
	<input type="submit" value="Valider">
</form>
<?php
include("functions.php");
createHtmlTable($_POST["lignes"]-1,$_POST["colonnes"]-1);
?>
</body>
</html>