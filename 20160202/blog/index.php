
<?php





// menu listant tous les poste dynamiquemen
// dans le fichier markdown 1ere ligne du titre 

// ajouter des fichier md avec un formulaire editionner 

require __DIR__ . '/vendor/autoload.php'; // la librarie michelf/php-markdown pour parser du markdown en html

use \Michelf\Markdown;

$page = $_GET["page"];  // recuperer les fichiers markdown avec $_GET


$text = file_get_contents("posts/".$page); //transformer les fichier markdown en html  !! en utilisan 
$html = Markdown::defaultTransform($text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test</title>
</head>
<body>
    <?php
    echo $html;  // afficher les pages transformer en changean le lien 
    ?>

</body>
</html>

 