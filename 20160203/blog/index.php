
<?php


// menu listant tous les poste dynamiquemen
// 1ere ligne titre dans le fichier markdown et la recuperer en php

// ajouter des fichier md avec un formulaire (editier les markdown)

require __DIR__ . '/vendor/autoload.php'; 
use \Michelf\Markdown;

function menu (){
$dossier = 'posts/*.md';  // variable qui pointe vers le dossier posts
$list = glob($dossier); //  // on utilise glob pour recuperer ce qui a dans dossier et le mettre dans liste

foreach ($list as $key):
    echo '<li><a href="?page=' . $key . '">' . $key . '</a></li>';
endforeach;

}


function loadPost ($page){   // traduire les donné du markdown en html
    $text = file_get_contents($page);
    $html = Markdown::defaultTransform($text);
    return $html;
}

function selectPage(){
    $page = 'posts/home.md'; // le load pardefaut 
    if(isset($_GET['page'])) { // c'est pour voir si $_GET 'page' renvoi quelque chose , si oui on l'assigne a la variable page 
    $page = $_GET['page'];
    }
return loadPost($page);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test</title>
</head>
<body>

	<menu>
        <ul><?php menu(); ?></ul>
    </menu>

    <h1>Hello SUNSHINE!!!!</h1>
    <?php
            # Put HTML content in the document
    echo selectPage();
    ?>
</body>
</html>

 
  <!--  <ul >
  autre methode sans fonction : pour charger les doc avec le titre en extrait
	    <?php foreach ($liste as $key): ?>
	    	<li>
	    		<?php 
	    		$op=fopen("$key","r");  // ouvrir le key et pointer sur la premiere ligne avec "r"
	    		$ligne=fgets($op); // recuperer la premiere ligne ensuite on l'affiche comme titre du post
	    		?>
				<a href="<?php echo $key; ?>"> <?php echo $ligne ?> </a> 
				
			</li>
		<?php endforeach; ?>
	</ul>
 -->