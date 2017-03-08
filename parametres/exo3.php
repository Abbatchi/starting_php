<?php 


echo "<h1 class='rainbow'>Exo3 <br> </h1>";


	if (isset($_GET["dateDebut"])&&($_GET["dateFin"])) {
		echo 'date ' . $_GET["dateDebut"] ." au ". $_GET["dateFin"].'!';
	}
	else{
		echo "pas de date";
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