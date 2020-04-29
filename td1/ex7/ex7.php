<!DOCTYPE html>
<html>
<head>
	<title>Compteur</title>
</head>
<body style="text-align: center; color: #5c5c5c;">
	<h1>Compteur de caractères et de mots</h1>
	<form method="POST" style="display: flex; flex-direction: column;">
		<textarea id="message" name="message" rows="5" cols="33" placeholder="Saisissez votre texte"><?php 
		if (!empty($_POST)){
			echo ($_POST['message']);
		}?></textarea>


		<input type="texte" name="caract" placeholder="Caractère" value="<?php 
		if (!empty($_POST)){
			echo ($_POST['caract']);
		}?>">
		<select name="methodechoix">
			<option value="1"<?php if (!empty($_POST)){if ($_POST['methodechoix'] == 1){echo"selected";}}?>>Mots</option>
			<option value="2"<?php if (!empty($_POST)){if ($_POST['methodechoix'] == 2){echo"selected";}}?>>Caractère</option>
		</select>
		<input type="submit" value="Valider">
	</form>
	<p>
		<?php
		if (!empty($_POST)){
			include("functions.php");
			if ($_POST['methodechoix'] == 1){
				if (empty($_POST['message'])){
					echo("Case texte non remplie");
				}
				else{
					echo("Nombre de mots: ");
					wordCount($_POST['message']);
				}
			}
			if ($_POST['methodechoix'] == 2){
				if (empty($_POST['caract'])){
					echo("Case caractère non remplie");
				}
				else{
					echo ("Nombre de '");
					echo ($_POST['caract']);
					echo ("' dans le texte: ");

					charCount($_POST['message'],$_POST['caract']);
				}
			}
		}
		?>
	</p>
</body>
</html>