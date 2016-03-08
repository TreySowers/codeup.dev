<?php

function pageController() {
	$favoriteThings = ['Sleep', 'Basketball', 'Movies', 'Food', 'Skating'];
	return array(
		'favoriteThings' => $favoriteThings);
}

extract(pageController());
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Favorite Things</h1>
	
		<?php foreach($favoriteThings $favoriteThing) : ?>
			<tr><td><?= $favoriteThing; ?></td></tr>
		<?php endforeach; ?>
		

	
</body>
</html>