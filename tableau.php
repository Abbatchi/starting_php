<?php 

echo "<h1 class='rainbow'>Exo1 <br> </h1>";

$mois = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre"];

	echo "tableau fait";


echo "<h1 class='rainbow'>Exo2 <br> </h1>";
	
	echo "3-eme ligne - ".$mois[2];


echo "<h1 class='rainbow'>Exo3 <br> </h1>";
	
	echo "index 5 - ".$mois[5];


echo "<h1 class='rainbow'>Exo4 <br> </h1>";

	$mois[3] = "Julien";
	echo $mois[3];


echo "<h1 class='rainbow'>Exo5 <br> </h1>";

	$tab1 = ['02' => "Aisne", '59' => "Nord", '60' => "Oise", '62' => "Pas-de-Calais", '80' => "Somme"];
		
	echo "Tableau fait";


echo "<h1 class='rainbow'>Exo6 <br> </h1>";

	echo $tab1['59'];


echo "<h1 class='rainbow'>Exo7 <br> </h1>";

	$tab1['51'] = 'Marne';
	echo "Marne ajouté";


echo "<h1 class='rainbow'>Exo8 <br> </h1>";

	foreach ($tab1 as $key => $value) {
		echo $value."<br>";
	}


echo "<h1 class='rainbow'>Exo9 <br> </h1>";

	foreach ($tab1 as $key => $value) {
		echo $value. " - ".$key."<br>";
	}


echo "<h1 class='rainbow'>Exo10 <br> </h1>";

	foreach ($tab1 as $key => $value) {
		echo "Le departement de ".$value. ", a le numéro: ".$key."<br>";
	}





 ?>






  <html>
<head>
	<title>Exos PHP</title>
	<link rel="stylesheet" href="style/css/style.css">
</head>
<body>


	
</body>
</html>