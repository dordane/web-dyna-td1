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
    <textarea id="message" name="message"
    rows="5" cols="33" placeholder="Saisissez votre texte">>
  </textarea>
  <input type="submit" value="Valider">
</form>
<?php
if (empty($_POST)) {
  echo "Erreur ! Veuillez entrer des paramètress";
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
