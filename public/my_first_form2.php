<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>My First HTML Form</title>
</head>
	<body>
	<section class="login">
		<h2>User Login</h2>
		<form method="POST" action="/my_first_form.php">
	    	<p>
		        <label for="username">Username</label>
		        <input id="username" name="username" type="text" placeholder="Enter your username">
		    </p>
		    <p>
		        <label for="password">Password</label>
		        <input id="password" name="password" type="password" placeholder="Enter your password">
		    </p>
		    <p>
		        <button type="submit">Login</button>
		    </p>
		</form>	
	</section>

	<section class"compose_email">
		<h2>Compose an email</h2>
		<form>
			
			<p>
				<label for="to">To</label>
				<input type="text" id="to" name="to" placeholder="Recipients:">
			</p>
			<p>	
				<label for="from">From</label>
				<input type="text" id="from" name="from" placeholder="From:">
			</p>
			<p>
				<label for="subject">Subject</label>
				<input type="text" id="subject" name="subject" placeholder="Subject:">
			</p>		
				<label for="Body">Body</label>
				<textarea id="email_body" name="email_body" rows="5" cols="40">Place Email Here</textarea>
			<p>
				<button type="submit">Send</button>
			</p>
			<p>
				<input type="checkbox" id="save_copy" name="save_copy" value="yes" checked>
				<label for="save_copy">Would you like to save a copy?</label>	
			</p>		
		</form>
	</section>

	<section class="multiple_choice_test">
		<h2>Multiple Choice Test</h2>
		<form method="POST" action="/my_first_form.php">
			<p>In what city were the Rockets Founded?</p>			
			<p><label><input type="radio" name="q1" value="houston">Houston</label></p>
			<p><label><input type="radio" name="q1" value="san_diego">San Diego</label></p>
			<p><label><input type="radio" name="q1" value="dallas">Dallas</label></p>
			<p><label><input type="radio" name="q1" value="orlando">Orlando</label></p>
			<p><button type="submit">Submit</button></p>
		</form>
			
		<form>
			<p>Which Texas city has an NHL team?</p>
			<p><label><input type="radio" name="q1" value="austin">Austin</label></p>
			<p><label><input type="radio" name="q1" value="houston">Houston</label></p>
			<p><label><input type="radio" name="q1" value="dallas">Dallas</label></p>
			<p><label><input type="radio" name="q1" value="san_antonio">San Antonio</label></p>
			<p><button type="submit">Submit</button></p>
		</form>

		<form>
			<p>What gaming systems have you used?</p>
			<p><label><input type="checkbox" id="gs1" name="gs[]" value="nintendo"> Nintendo</label></p>
			<p><label><input type="checkbox" id="gs2" name="gs[]" value="xbox">Xbox</label></p>
			<p><label><input type="checkbox" id="gs3" name="gs[]" value="playstation">Playstation</label></p>
			<p><label><input type="checkbox" id="gs4" name="gs[]" value="atari">Atari</label></p>
			<p><button type="submit">Submit</button></p>
		</form>

		<form>
			<label for="sports">What sports have you played?</label>
			<select id="sports" name="sports[]">
				<p><option value="basketball">Basketball</option></p>
				<p><option value="hockey">Hockey</option></P>
				<p><option value="soccer">Soccer</option></p>
				<p><option value="baseball">Baseball</option></p>
			</select>
			<p><button type="submit">Submit</button></p>
		</form>
	</section>

	<section class="select_testing">
		<h2>Select Testing</h2>
		<form>
			<label for="challenging">Is Codeup challenging?</label>
			<select id="challenging" name ="challenging">
				<option value="1">Yes</option>
				<option value="0" selected>No</option>
			</select>
			<p><button type="submit">Submit</button></p>
		</form>
	</section>
	</body>
</html>