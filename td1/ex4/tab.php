<!DOCTYPE html>
<html>
<head>
	<title>ex4</title>
</head>
<body>
	<a href="?nblignes=2&nbColonnes=2">2x2</a>
	<a href="?nblignes=5&nbColonnes=5">5x5</a>
	<a href="?nblignes=10&nbColonnes=8">10x8</a>
	<hr>
	<hr>
	<hr>
	
	<?php
	echo "<p>{$_GET["nbColonnes"]}-{$_GET["nblignes"]}</p>";
	echo "<table border='1'>
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
	</table>"
	?>
		
</body>
</html>