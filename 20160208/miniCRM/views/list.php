<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/semantic.min.css">
</head>
<body>

<ul>
	<?php foreach ($tableauPeople as $p) : ?>

	<li><a href="?id=<?php echo $p->id; ?>"><?php echo $p->nom; ?><?php echo $p->prenom; ?></a></li>
	<?php endforeach; ?>
</ul>

<a href="../views/add.php">add new user</a>
</body>
</html>