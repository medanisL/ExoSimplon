<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>faker-profil</title>
	<link rel="stylesheet" href="">
	<style>
		body{
			background-image:url("<?php echo $faker->imageUrl($width = 640, $height = 480); ?>");
			background-size:cover;
			background-repeat: no-repeat;
			}
			

	</style>
</head>
