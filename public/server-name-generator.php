<?php
$title = "Server Name Generator";


function getRandomElement($array) {
	$key = array_rand($array);  //array_rand built in PHP function
	$value = $array[$key];
	return $value;
}

function generateServerName($nouns, $adjectives) {
	return getRandomElement($adjectives) . ' ' . getRandomElement($nouns);
}

function pageController() {
	$adjectives = ['Tired', 'Hungry', 'Tall', 'Pretty', 'Shiny', 'Dull', 'Energetic', 'Clumsy', 'Bored', 'Anxious'];
	$nouns = ['Students', 'Teams', 'Vehicle', 'Hippos', 'Movie', 'Desk', 'Gems', 'Beast', 'Hero', 'Villain'];
	$data = [];
	$data['serverName'] = generateServerName($nouns, $adjectives);
	return $data;
}

extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
	<title><?= $title; ?></title>
	<style>
		body  {
			background-color: gray;
			color: red;
		}

	</style>
</head>
<body>
	<h1><?= $title; ?><h1>
	<h2><?= $serverName; ?></h2>

</body>
</html>