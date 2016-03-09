<?php

session_start();

var_dump($_SESSION);


$username = ( isset($_SESSION['LOGGED_IN_USER']) ) ? $_SESSION['LOGGED_IN_USER'] : "";

if (! isset($_SESSION['LOGGED_IN_USER']) || $_SESSION['LOGGED_IN_USER'] == "") {
	header('Location: /login.php');
	die();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Authorized</title>
</head>
<body>
	<h1>Hello <?= $username; ?>!</h1>
	<a href="/logout.php">Logout</a>

</body>
</html>