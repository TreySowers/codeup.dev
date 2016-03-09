<?php

session_start();

var_dump($_SESSION);

 $username = 'guest';
 $password =  'password';
 $message = "";

 $attemptedUsername = isset($_POST['username']) ? $_POST['username'] : '';
 $attemptedPassword = isset($_POST['password']) ? $_POST['password'] : '';

if (isset($_SESSION['LOGGED_IN_USER']) && $_SESSION['LOGGED_IN_USER'] != "") {
	header('Location: /authorized.php');
	die();
} elseif ($attemptedPassword == $password && $username == $attemptedUsername) {
	//create a session key
	//save value as the username
	$_SESSION['LOGGED_IN_USER'] = $username;
	header("Location: authorized.php");
	die();
} elseif ($attemptedUsername != '' || $attemptedPassword != '') {
	$message = "Incorrect login or password";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>Log-In</h1>
    <form method="POST">
        <label>Username</label>
        <input type="text" name="username"><br>
        <label>Password</label>
        <input type="password" name="password"><br>
        <input type="submit" name="submit">
    </form>
    
    
</body>
</html>