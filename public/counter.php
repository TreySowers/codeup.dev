<?php

if(isset($_GET['counter'])) {
	$counter = $_GET['counter'];
} else {
	$counter = 0;
}

function pageController() {
	$data = [];
	$counter = isset($_GET['counter']) ? $_GET['counter'] : 0;
	$data['counter'] = $counter;
	return $data; 
}

extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
	<title>Counter</title>
</head>
<body>
	<h1>Current Counter: <?= $counter ?></h1>
	<a href="counter.php?counter=<?= $counter+1 ?> ">Up</a>
	<a href="counter.php?counter=<?= $counter-1 ?> ">Down</a>
</body>
</html>