<?php


function generation ($age){

if ($age<18){
	echo "t mineur";
}
else {
	echo "t majeur";
}

}


echo generation($_GET["age"]); // recupere la clé valeur sur le lien ?cle=valeur&cle2=valeur2

