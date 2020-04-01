<?php
function element($titre, $contenu, $niveau=1){
	echo "<h",$niveau,">",$contenu,"/h1>";
	echo $niveau;
	echo $contenu;
	echo $niveau;
}
?>

<h1> </h1>