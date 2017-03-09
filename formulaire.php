

<!DOCTYPE html>
<html>
<head>
	<title>Exos PHP</title>
	<link rel="stylesheet" href="style/css/style.css">
</head>
<body>
<?php  echo "<h1 class='rainbow'>Exo1 <br> </h1>";?>

<form action="user.php" method="get">
<p>
	<p>nom <input type="text" placeholder="Julien" name="nom" /></p>
    <p>prenom <input type="text" placeholder="neiluJ" name="prenom" /></p>
    <input type="submit" value="Valider" />
</p>
</form>

<?php echo "<h1 class='rainbow'>Exo2 <br> </h1>";?>

<form action="user.php" method="post">
<p>
	<p>nom <input type="text" placeholder="Julien" name="nom" /></p>
    <p>prenom <input type="text" placeholder="neiluJ" name="prenom" /></p>
    <input type="submit" value="Valider" />
</p>
</form>

<?php echo "<h1 class='rainbow'>Exo3 <br> </h1>";?>

<form action="user.php" method="get">
<p>
	<p>nom <input type="text" placeholder="Julien" name="nom" /></p>
    <p>prenom <input type="text" placeholder="neiluJ" name="prenom" /></p>
    <select name="choix">
    <option value=""></option>
    <option value="mr">Mr</option>
    <option value="mme">Mme</option>
	</select>
    <input type="submit" value="Valider" />
</p>
</form>

<?php echo "<h1 class='rainbow'>Exo4 <br> </h1>";?>

<form action="user.php" method="get">
<p>
	<p>nom <input type="text" placeholder="Julien" name="nom" /></p>
    <p>prenom <input type="text" placeholder="neiluJ" name="prenom" /></p>
    <select name="choix">
    <option value=""></option>
    <option value="mr">Mr</option>
    <option value="mme">Mme</option>
	</select>
    <button type="submit"> OK </button>	
 
</p>
</form>


<?php echo "<h1 class='rainbow'>Exo5 <br> </h1>";?>

<form action="user.php" method="get" enctype="multipart/form-data">
<p>
	<p>nom <input type="text" placeholder="Julien" name="nom" /></p>
    <p>prenom <input type="text" placeholder="neiluJ" name="prenom" /></p>
    <select name="choix">
    <option value=""></option>
    <option value="mr">Mr</option>
    <option value="mme">Mme</option>
	</select>
      <button type="submit"> OK </button>	<br>
 	<input type="file" name="file" />


</p>
</form>



	
</body>
</html>