<?php 
	$variable1 = 0;
	$variable2 = 0;
	$variable2_2 = 10;
	$variable3 = 100;
	$variable3_3 = 10;



echo "<h1 class='rainbow'>Exo1 <br> </h1>";



	while ($variable1 < 10) {
		echo $variable1++;
		echo "<br>";
	}


echo "<h1 class='rainbow'>Exo2 <br> </h1>";

	while ($variable2 <= $variable2_2) {
		echo $variable2 * $variable2_2;
		echo "<br>";
		$variable2++;

	}

echo "<h1 class='rainbow'>Exo3 <br> </h1>";

	while ($variable3 >= 10) {
		echo $variable3 * $variable3_3;
		echo "<br>";
		$variable3--;

	}


echo "<h1 class='rainbow'>Exo4 <br> </h1>";

	$variable4 = 1;
		while ($variable4 <= 10) {
			echo $variable4;
			echo "<br>";
			$variable4*=1.5;
		}



echo "<h1 class='rainbow'>Exo5 <br> </h1>";
		
	for ($i=1; $i <= 15; $i++) { 
		echo "On y arrive presque <br>";
	}
		
		

echo "<h1 class='rainbow'>Exo6 <br> </h1>";

	for ($i=20; $i > 0; $i--) { 
		echo "c`est presque bon <br>";
	}

echo "<h1 class='rainbow'>Exo7 <br> </h1>";

	for ($i=1; $i < 100; $i+=15) { 
		echo "On tient le bon bout! <br>";
	}

echo "<h1 class='rainbow'>Exo8 <br> </h1>";

	for ($i=200; $i > 0; $i-=12) { 
		echo "Enfin!!!!<br> ";
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