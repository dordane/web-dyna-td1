<!DOCTYPE html>
<html>
<head>
	<title>ex4</title>
</head>
<body>
	<a href="?nblignes=2&nbColonnes=2">2x2</a>
	<a href="?nblignes=5&nbColonnes=5">5x5</a>
	<a href="?nblignes=10&nbColonnes=8">10x8</a>

	
	<?php
	echo "<table border='1'>
	<tbody>";
	for($l=0;$l<=$_GET["nblignes"];$l++){

		if (($l % 2) == 0){
			$gras = "bold";
		}
		else{
			$gras = "normal";
		}
		echo "<tr>"; 
		for($c=0;$c<=$_GET["nbColonnes"];$c++){ 
			echo "<td align='center'><p style='font-weight: $gras;'>$l-$c</p></td>"; 
		} 
		echo "</tr>"; 
	} 

	echo "</tbody>
	</table>";

	?>

</body>
</html>