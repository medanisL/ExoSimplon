<!DOCTYPE html>
<html>
<head>
	<title>server</title>
</head>
<body>
<?php 
	$v= $_POST["prenom"]; // le fichier est sur le serveur 
	echo $v; 

	$v2= $_POST["mdp"];
	echo $v2;
 ?>


</body>
</html>