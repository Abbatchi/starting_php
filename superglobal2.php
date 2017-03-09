<?php 
session_start();

echo 'Bienvenue sur la page numéro 2<br />';

echo $_SESSION['nom'];
echo $_SESSION['prenom'];
echo $_SESSION['age'];


echo '<br /><a href="superglobal.php">page 1</a>';

	

	echo "<br />votre cookie login est: ".$_COOKIE['login']."<br>";
	echo "votre cookie pass est: ".$_COOKIE['pass'];

echo '<br /><br />modifier<br /><br />';


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