<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


<h1>

mon parametre 


<?php 

	$var = $_GET["param"]; // prend les parametre de la requete get et les remplacer  
	echo $var;

	$var2 = $_GET["page"][0];
	echo $var2;
	$var3 = $_GET["page"][1];
	echo $var3;

 ?>


 </h1>



</body>
</html>


