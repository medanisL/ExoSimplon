<?php
include 'parts/header.php'; // inclu dans la page directement
?>

<p>contenu sur la page index</p>
<br>

<?php    // chargment dynamique 

if ($_GET["page"]=="contact"){
	include 'parts/contact.php';
}

if ($_GET["page"]=="home"){
	include 'parts/home.php';
}

?>



<?php

include 'parts/footer.php';

?>

<!-- $pages = ["contact", "home"];   autre facon de faire
$cul = $_GET["page"];


if (in_array($cul, $pages)){
    include 'parts/'.$cul. '.php';
} -->