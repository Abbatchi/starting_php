<?php 


echo "<h1 class='rainbow'>Exo6 <br> </h1>";


	if (isset($_GET["batiment"])&&($_GET["salle"])) {
		$hello = htmlspecialchars('# de batiment - ' . $_GET["batiment"] . ", # de salle - " . $_GET["salle"] . '!');
		echo $hello;
	}
	else{
		echo "pas de donnes";
	}
 ?>

    <html>
<head>
	<title>Exos PHP</title>
	<link rel="stylesheet" href="../style/css/style.css">
</head>
<body>


	
</body>
</html>