<?php
 var_dump($_POST);

 $username = 'treysowers';
 $password =  'creativepassword';

 $attemptedUsername = isset($_POST['username']) ? $_POST['username'] : '';
 $attemptedPassword = isset($_POST['password']) ? $_POST['password'] : '';

if ($attemptedPassword == $password && $username == $attemptedUsername) {
	header ("Location: authorized.php");
	exit();
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