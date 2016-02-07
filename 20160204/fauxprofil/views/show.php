<?php
	require_once 'vendor/fzaninotto/faker/src/autoload.php';
	$faker = Faker\Factory::create();
	include "views/header.php"
?>

<body>
	<h1>
	<?php
		echo $faker->name;
	?>	
	</h1>
	<h2>
	<?php
		echo $faker->address;
	?>	
	</h2>
	<p>
	<?php
		echo $faker->text;
	?>	
	</p>
	
<?php
	include "views/footer.php"
?>
