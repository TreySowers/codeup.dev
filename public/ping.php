<?php

function pageController() {
	if(isset($_GET['counter'])) {
		$counter = $_GET['counter'];
	} else {
		$counter = 0;
	}

return($_GET);
}

extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>PING PONG</h1>
	<h2><?=$counter?></h2>
		<a href="pong.php?hit=hit&counter=<?= $counter+1 ?> ">Hit</a>
		<a href="ping.php?hit=miss&counter=<?= $counter=0 ?> ">Miss</a>
	
	
</body>
</html>