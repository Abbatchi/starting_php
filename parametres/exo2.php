<?php 


echo "<h1 class='rainbow'>Exo1 <br> </h1>";


	if (isset($_GET["age"])) {
		echo 'Bonjour ' . $_GET["prenom"] ." ". $_GET["nom"].'!';
	}
	else{
		echo "pas d`age";
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