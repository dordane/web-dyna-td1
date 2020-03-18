<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hello</title>
</head>

<!--
Pour obtenir des couleurs facilement

<form method="GET">
    <label for="color">Color : </label>
    <input type="color" id="html5colorpicker" onchange="clickColor(0, -1, -1, 5)" value="#ff0000" name="Color">
    <label for="size">Size : </label>
    <input type="number" value="" name="size" id="size">
    <input type="submit" value="Valider">
</form>
-->

<body>
<a href="?Color=%23ff0000&size=15&message=Bonjour">Message 1</a>
<a href="?Color=%2339ff00&size=30&message=ça">Message 2</a>
<a href="?Color=%230080ff&size=50&message=Marche">Message 3</a>
    <?php
    echo "<div style='font-size: {$_GET["size"]}px; color: {$_GET["Color"]}'>{$_GET["message"]}</div>";
    ?>
</body>
</html>
