<?php

// $prenom="anis";
// $nom="lakhdar";

// premiere fonction ; ucfirst () pour mettre la premiere lettre en majuscule

// echo ucfirst($prenom);
// echo "\n";


function concatNom($prenom,$nom){

	$fullname = ucfirst($prenom)." " .ucfirst($nom);
	return $fullname;

}

echo concatNom("anis","lakhdar");