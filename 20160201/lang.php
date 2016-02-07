<?php
$lang = array("javascript"=>true,"html"=>true,"css"=>true,"php"=>true,"pascal"=>false);


foreach ($lang as $cle=>$valeur) {
	echo iKnow($cle,$valeur);

	echo "\n";

}


function iKnow($langage,$known){

if($known==true){

	echo " je connais " . $langage;

} else {

	echo " je ne connais pas " . $langage;
}


}