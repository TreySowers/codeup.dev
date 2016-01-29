<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<!DOCTYPE html>

<html>
    <head>
	   <title>My First Form</title>
    </head>

    <body>
    <main>

        <section class="user_login">
    	<form method="POST" action="/my_first_form.php">

        <h2>User Login</h2>
            
            <p>
                <label for="username">Username</label>
                <input id="username" name="username" type="text" placeholder="Input username here">
            </p>
            <p>
                <label for="password">Password</label>
                <input  id="password" name="password" type="password" placeholder="Input password here">
            </p>
            <p>
                <button type="submit" >Login</button>
            </p>
        </form>
        </section>

        <section class="compose_an_email">
        <form method="POST" action="/my_first_form.php">

            <h2>Compose an Email</h2>

            <p>
                <label for="to">To</label>
                <input id="to" name="to" type="text" placeholder="Recipient">
            </p>
            <p>
                <label for="from">From</label>
                <input id="from" name="from" type="text" placeholder="Your Email">
            </p>
            <p>
                <label for="subject">Subject</label>
                <input id="subject" name="subject" type="text" placeholder="Place Subject Here">
            </p>
            <p>
                <label for="body">Body</label>
                <textarea id="email_body" name="email_body" rows="5" cols="40" placeholder="Content Here"></textarea>
            </p>
            <p>
                <button type="submit">Send</button>
            </p>
            <p>
            <input type="checkbox" id="save_copy" name="save_copy" value="yes" checked>
            <label for="save_copy">Would you like to save a copy to your sent folder?</label>
            </p>


        </form>
        </section>

        <section class="multiple_choice_test">
        <form>

            <h2>Multiple Choice Test</h2>

            <p>
            <label for="codeup">Do you like Codeup? </label>
            <select id="codeup" name="codeup">
                <option>Of Course</option>
                <option>Not Sure</option>
            </select>
           <br>
                <button type="submit">Submit</button>
            </p>

            <p>
            <label for="weekend">Are you ready for the weekend? </label>
            <select id="weekend" name="weekend">
                    <option>Always</option>
                    <option>No</option>
            </select>
            <br>
                <button type="submit">Submit</button>   
            </p>

            <p>
            <label for="teams">Which Texas City does not have an NFL team?</label>
            <select id="teams" name="teams">
                <option value="1">Houston</option>
                <option value="2">San Antonio</option>
                <option value="3">Dallas</option>
            </select>
            <br>
                <button type="submit">Submit</button>
            </p>

            <p>
            <label for="gs">What gaming systems do you own? </label>
            <select id="gs" name="gs []" multiple>
                <option value="nintendo">Nintendo</option>
                <option value="playstation">Playstation</option>
                <option value="xbox">XBox</option>
                <option value="none_of_the_above">None of the Above</option>
            </select>
            <br>

            <button type="submit">Submit</button>
            </p>

        </form>
        </section>

        <section class="select_testing">
        <form>
            <h2>Select Testing</h2>

            <label for="mac">Do you own a Mac? </label>
            <select id="mac" name="mac">
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
            <br>

            <button type="submit">Submit</button>
         </form>
        </select>
        </section>
    </main>
    </body>
</html>