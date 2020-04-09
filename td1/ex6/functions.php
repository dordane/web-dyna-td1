<form method="POST">
	<input type="submit" name="choix" value="1" />
	<input type="submit" name="choix" value="2" />
	<input type="submit" name="choix" value="3" />


	<?php function graph($choix,$graph){
		echo "style='display:";
		if ($choix == $graph){
			echo "block";
		}
		else{
			echo "none";
		}
		echo ";'";
	}
	?>

	<div <?php  graph($_POST["choix"], 1) ?> > je suis le graph 1</div>
	<div <?php  graph($_POST["choix"], 2) ?> > je suis le graph 2</div>
	<div <?php  graph($_POST["choix"], 3) ?> > je suis le graph 3</div>


	<p class=""></p>

	<p style="display: block;"></p>

	<?php
	function projet($valeur){
		$db = new SQLite3("enquete.db");

		$results = $db->query("SELECT modalite, count(*) FROM enquete E, codage C
			WHERE C.variable = '".$valeur."'
			And C.code = E.".$valeur."
			GROUP BY ".$valeur."
			ORDER BY ".$valeur.";"
		);
		
		echo "['".$valeur."', 'Population observée'],";
		while ($row = $results->fetchArray()){
			echo '["' . $row[0] . '",' . $row[1] . "],\n";
		}
		$db ->close();
	}