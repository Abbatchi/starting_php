<?php 
	
	echo "<h1 class='rainbow'>Exo1 <br> </h1>";	

	echo "Server ip: ".$_SERVER["SERVER_ADDR"];
	echo "<br>";
	echo "User agent: ".$_SERVER["HTTP_USER_AGENT"];
	echo "<br>";
	echo "Server host: ".$_SERVER["HTTP_HOST"];
	echo "<br>";
	echo "User ip: ".$_SERVER["REMOTE_ADDR"];

	echo "<h1 class='rainbow'>Exo2 <br> </h1>";	



		session_start();


		$_SESSION['nom'] = 'Formateur';
		$_SESSION['prenom']   = 'Julien';
		$_SESSION['age']     = 100;

		echo '<br /><a href="superglobal2.php">page2</a>';


	echo "<h1 class='rainbow'>Exo2 <br> </h1>";	

if (isset($_GET['login'])) {
	
	$login = $_GET['login'];
	$pass = $_GET['pass'];

			setcookie("login", $login, time()+3600);
			setcookie("pass", $pass, time()+3600);
			header('Location:superglobal2.php');
}

 ?>



<!DOCUMENT HTML>
<html>
		<head>
			<title>Exos PHP</title>
			<link rel="stylesheet" href="style/css/style.css">
		</head>
	<body>

		<form action="superglobal.php" method="get">
		<p>
			<p>Login <input type="text" placeholder="LOGIN" name="login" /></p>
		    <p>Password <input type="password" placeholder="PASSWORD" name="pass" /></p>
		    <input type="submit" value="Valider" />
		</p>
		</form>
		
	</body>
</html>