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
		elseif ($age >= 18 && $age <= 100) {
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

	









 ?>

<html>
<head>
	<title>Exos 2 PHP</title>
	<link rel="stylesheet" href="style/css/style.css">
</head>
<body>


	
</body>
</html>