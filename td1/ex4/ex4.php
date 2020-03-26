<!DOCTYPE html>
<html>
<head>
	<title>ex4</title>
</head>
<body>
	<a href="?nblignes=2&nbColonnes=2">2x2</a>
	<a href="?nblignes=2&nbColonnes=2">5x5</a>
	<a href="?nblignes=2&nbColonnes=2">10x8</a>
	<?php
	echo "<div style='font-size: {$_GET["size"]}px; color: {$_GET["Color"]}'>{$_GET["message"]}</div>";

	?>
		<table border='1'>
	<tbody>
	<tr>
	<td>1-1</td>
	<td>1-2</td>
	</tr>
	<tr>
	<td>2-1</td>
	<td>2-2</td>
	</tr>
	</tbody>
	</table>
</body>
</html>