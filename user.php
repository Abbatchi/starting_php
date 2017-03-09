
<!DOCTYPE html>
<html>
<head>
	<title>Exos PHP</title>
	<link rel="stylesheet" href="style/css/style.css">
</head>
<body>

<?php 

echo "<h1 class='rainbow'>Exo1 <br> </h1>";

	if (isset($_GET["nom"])&&($_GET["prenom"])) {
		echo 'Bonjour ' . $_GET["prenom"] ." ". $_GET["nom"].'!';
	}


echo "<h1 class='rainbow'>Exo2 <br> </h1>";

	if (isset($_POST["nom"])&&($_POST["prenom"])) {
		echo 'Bonjour ' . $_POST["prenom"] ." ". $_POST["nom"].'!';
	}


echo "<h1 class='rainbow'>Exo3 <br> </h1>";

	if (isset($_POST["nom"])&&($_POST["prenom"])&&($_POST["choix"])) {
		echo 'Bonjour ' . $_POST["prenom"] ." ". $_POST["nom"]. "" . $_POST["choix"] . '!';
				header('Location:formulaire.php');
	}


echo "<h1 class='rainbow'>Exo4 <br> </h1>";

	   if (isset($_GET["nom"])&&($_GET["prenom"])&&($_GET["choix"])) {
		echo 'Bonjour ' . $_GET["prenom"] ." ". $_GET["nom"]. " " . $_GET["choix"] . '!';
	}
	else { 
		header('Location: formulaire.php');
		}


echo "<h1 class='rainbow'>Exo5 <br> </h1>";

	   if (isset($_GET["nom"])&&($_GET["prenom"])&&($_GET["choix"])&&($_GET["choix"])) {
		echo 'Bonjour ' . $_GET["prenom"] ." ". $_GET["nom"]. " " . $_GET["choix"] . $_GET["file"] .'!';
	}
	else { 
		header('Location: formulaire.php');
		}


echo "<h1 class='rainbow'>Exo6 <br> </h1>";

	   if (isset($_GET["nom"])&&($_GET["prenom"])&&($_GET["choix"])&&($_GET["file"])) {
		
		$info = new SplFileInfo($_GET["file"]);

            if( $info->getExtension() == "pdf"){
            	echo 'Bonjour ' . $_GET["prenom"] ." ". $_GET["nom"]. " " . $_GET["choix"] . $_GET["file"] .'!';
                $PDF = true;
            }else{
                $PDF = false;

                echo '<script>alert("Pas PDF !");</script>';
            }
	}
	else { 
		header('Location: formulaire.php');
		}


 ?>
