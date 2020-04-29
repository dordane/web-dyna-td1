<!DOCTYPE html>
<html>
<head>
	<title>Compteur</title>
</head>
<body style="text-align: center; color: #5c5c5c;">
	<h1>Formulateur de texte</h1>
	<form method="POST" style="display: flex; flex-direction: column;">
		<textarea id="message" name="message" rows="5" cols="33" placeholder="Saisissez votre texte"><?php 
		if (!empty($_POST)){
			echo ($_POST['message']);
		}?></textarea>
		<select name="methodechoix">
			<option value="1"<?php if (!empty($_POST)){if ($_POST['methodechoix'] == 1){echo"selected";}}?>>1er lettre en MAJ</option>

			<option value="2"<?php if (!empty($_POST)){if ($_POST['methodechoix'] == 2){echo"selected";}}?>>Majuscule</option>

			<option value="3"<?php if (!empty($_POST)){if ($_POST['methodechoix'] == 3){echo"selected";}}?>>Minuscule</option>

			<option value="4"<?php if (!empty($_POST)){if ($_POST['methodechoix'] == 4){echo"selected";}}?>>Ligne BR</option>

			<option value="5"<?php if (!empty($_POST)){if ($_POST['methodechoix'] == 5){echo"selected";}}?>>sha1</option>

			<option value="6"<?php if (!empty($_POST)){if ($_POST['methodechoix'] == 6){echo"selected";}}?>>md5</option>

			<option value="7"<?php if (!empty($_POST)){if ($_POST['methodechoix'] == 7){echo"selected";}}?>>1ere lettres MAJ</option>

			<option value="8"<?php if (!empty($_POST)){if ($_POST['methodechoix'] == 8){echo"selected";}}?>>url encore</option>

			<option value="9"<?php if (!empty($_POST)){if ($_POST['methodechoix'] == 9){echo"selected";}}?>>Entite HTML</option>

			<option value="10"<?php if (!empty($_POST)){if ($_POST['methodechoix'] == 10){echo"selected";}}?>>Cesure chaîne</option>
		</select>
		<input type="submit" value="Valider">
	</form>
	<p>Texte formulé : 
		<?php
		if (!empty($_POST)){
			include("functions.php");
			if ($_POST['methodechoix'] == 1){
				un($_POST['message']);
			}
			if ($_POST['methodechoix'] == 2){
				de($_POST['message']);
			}
			if ($_POST['methodechoix'] == 3){
				tr($_POST['message']);
			}
			if ($_POST['methodechoix'] == 4){
				qr($_POST['message']);
			}
			if ($_POST['methodechoix'] == 5){
				ci($_POST['message']);
			}
			if ($_POST['methodechoix'] == 6){
				sx($_POST['message']);
			}
			if ($_POST['methodechoix'] == 7){
				se($_POST['message']);
			}
			if ($_POST['methodechoix'] == 8){
				hu($_POST['message']);
			}
			if ($_POST['methodechoix'] == 9){
				ne($_POST['message']);
			}
			if ($_POST['methodechoix'] == 10){
				di($_POST['message']);
			}

		}
		?>
	</p>
</body>
</html>