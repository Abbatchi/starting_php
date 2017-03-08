<?php 

echo "<h1 class='rainbow'>Exo1 <br> </h1>";


	function exo1(){
			return "<p style=\"color: green;\">true";
		}
		echo exo1();

echo "<h1 class='rainbow'>Exo2 <br> </h1>";

	
	function exo2($fer){
			echo "$fer";
		}
		exo2("Chaine crosshair");
		
echo "<h1 class='rainbow'>Exo3 <br> </h1>";

	
	function exo3($a, $b){
		
		echo $a . $b;
		
	}
		exo3("rainbow - ", "light") ;


echo "<h1 class='rainbow'>Exo4 <br> </h1>";


	function exo4($f, $z){
		if ($f > $z) {
			return "1 plus grande";
		}
		elseif ($f < $z) {
			return "2 plus grande";
		}
		else{
			return "nb1 = nb2";
		}
	}
		echo exo4(4, 4);


echo "<h1 class='rainbow'>Exo5 <br> </h1>";


	function exo5($w, $j){
		
		echo $w . $j;
		
	}
		exo3("rainbow - ", 1) ;


echo "<h1 class='rainbow'>Exo6 <br> </h1>";


	function exo6($name, $surn, $age){
		
		echo "Bonjour " . $name . " " . $surn . " et toi " . $age . " age.";
		
	}
		exo6("Alex", "Darell", 34) ;
	

echo "<h1 class='rainbow'>Exo7 <br> </h1>";


	function exo7($genre, $age){
		if ($genre == "homme") {
			if ($age < 18) {
				echo "Homme mineur";
			}
			else{
				echo "Homme majeur";
			}
			
		}
		else {
			if ($age < 18) {
				echo "Femme mineur";
			}
			else{
				echo "Femme majeur";
			}
		}
		
	}
		exo7("homme", 34) ;
	

echo "<h1 class='rainbow'>Exo8 <br> </h1>";

	function exo8($t, $y, $u){
		echo $t+$y+$u;
	}
		exo8(4, 4, 4);



 ?>


  <html>
<head>
	<title>Exos PHP</title>
	<link rel="stylesheet" href="style/css/style.css">
</head>
<body>


	
</body>
</html>