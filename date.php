<?php 
echo "<h1 class='rainbow'>Exo1 <br> </h1>";	

	echo "today is - " .date('d/m/Y');
	echo "<br>";

echo "<h1 class='rainbow'>Exo2 <br> </h1>";	

	echo "today is - " .date('d-m-Y');
	echo "<br>";

echo "<h1 class='rainbow'>Exo3 <br> </h1>";	
	
	
	setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
	echo "Date du jour : ", strftime("%A %d %B %m %Y");
	echo "<br>";

echo "<h1 class='rainbow'>Exo4 <br> </h1>";	
	
	echo time(). "<br>";
	echo mktime(15, 34, 12, 03, 2, 2016);
	echo "<br>";

echo "<h1 class='rainbow'>Exo5 <br> </h1>";	

	$julien = time();
	$aymeric = mktime(1, 1, 1, 05, 16, 2016);
	echo "# jours ".floor(($julien - $aymeric) / 86400);

	echo "<br>";

	$julien = new DateTime("2016-05-16");
	$aymeric = new DateTime();
	$interval = $julien->diff($aymeric);
	echo $interval->format("%a jour"). "<br>";


echo "<h1 class='rainbow'>Exo6 <br> </h1>";	

	$number = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
	echo $number;

echo "<h1 class='rainbow'>Exo7 <br> </h1>";	

	echo date('d.m.Y', strtotime("+20 days"));

echo "<h1 class='rainbow'>Exo8 <br> </h1>";	

	echo date('d.m.Y', strtotime("-22 days"));

echo "<h1 class='rainbow'>Exo9 <br> </h1>";	

	echo "POSE!!!!!";











 ?>

<!DOCUMENT HTML>
<html>
		<head>
			<title>Exos PHP</title>
			<link rel="stylesheet" href="style/css/style.css">
		</head>
	<body>


	</body>
</html>