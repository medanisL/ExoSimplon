<?php 

function getFont() {
	if(isset($_GET['font'])) {
		return $_GET['font'];
	} 
	return 'Inconsolata';
}

 
//on creer le menu pour faciliter la tache du get quand on clique sur un element

function makeMenu(){
	$fonts = [
		'Inconsolata', 
		'Indie Flower', 
		'Roboto',
		'Great Vibes',
		'Cookie'
	];
	foreach($fonts as $font){
		echo '<a href="?font=' . $font . '">' . $font . '</a>';
	}
}


 ?>
