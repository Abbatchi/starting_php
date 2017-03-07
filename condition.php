<?php 
$age = 151;
$iseasy = false;
$genre = "femme";


echo "<h1 class='rainbow'>Exo1 <br> </h1>";

	if ($age < 18) {
		echo "Vous etes mineur";
	}
	elseif ($age >= 18 && $age <= 100) {
		echo "Vous etes Majeur";
	}
	else{
		echo "Vous etes Décédé";
	}


echo "<h1 class='rainbow'>Exo2 <br> </h1>";

	if ($iseasy) {
		echo "C`est facile";
	}
	else{
		echo "putain de merde! C`est pas facile!!!";
	}

echo "<h1 class='rainbow'>Exo3 <br> </h1>";

	if ($genre == "homme") {
		if ($age < 18) {
		echo "Vous etes un Homme mineur";
		}
		elseif ($age >= 18 && $age <= 150) {
			echo "Vous etes un Homme Majeur";
		}
		else{
			echo "Vous etes un Homme qui est deja Décédé";
		}
	}

	else{
		if ($age < 18) {
		echo "Vous etes une Femme mineur";
		}
		elseif ($age >= 18 && $age <= 100) {
			echo "Vous etes une Femme Majeur";
		}
		else{
			echo "Vous etes une Femme qui est deja Décédé";
		}
	}

echo "<h1 class='rainbow'>Exo4 <br> </h1>";

	$magnitude = 5;
		$tableau = ["Micro-séisme impossible à ressentir.", "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.". "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.", "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.", "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.", "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.", "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.", "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.", "Séisme capable de tout détruire sur une très vaste zone."];
		echo $tableau[$magnitude -1];








 ?>

<html>
<head>
	<title>Exos 2 PHP</title>
	<link rel="stylesheet" href="style/css/style.css">
</head>
<body>


	
</body>
</html>