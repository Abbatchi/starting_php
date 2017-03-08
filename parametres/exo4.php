<?php 


echo "<h1 class='rainbow'>Exo4 <br> </h1>";


	if (isset($_GET["langage"])&&($_GET["serveur"])) {
		echo 'Language ' . $_GET["langage"] .', Serveur '. $_GET["serveur"].'!';
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