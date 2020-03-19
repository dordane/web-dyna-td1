<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Hello</title>
</head>

<body>
<form action="ex3.php" method="POST">
<label for="color">Color : </label>
<input type="color" id="html5colorpicker" onchange="clickColor(0, -1, -1, 5)" value="#ff0000" name="Color">
<label for="size">Size : </label>
<input type="number" value="" name="size" id="size">
<label for="contenue">Contenue du message</label>
<input type="text" value="" name="message" id="message">
<input type="submit" value="Valider">
</form>
  <a href="?Color=%23ff0000&size=15&message=Bonjour">Message 1</a>
  <a href="?Color=%2339ff00&size=30&message=ça">Message 2</a>
  <a href="?Color=%230080ff&size=50&message=Marche">Message 3</a>
  <a href="?&message=Sans couleurs">Sans couleur sans sizee</a>
  <?php
  if (empty($_POST)) {
    echo "Erreur ! Veuillez entrer des paramètres";
  }
  if (empty($_POST["size"] and $_POST["Color"])) {
    echo "<div style='font-size: 12px; color: black'>{$_POST["message"]}</div>";
  }
  else {
    echo "<div style='font-size: {$_POST["size"]}px; color: {$_POST["Color"]}'>{$_POST["message"]}</div>";
  }
  ?>
</body>
</html>
