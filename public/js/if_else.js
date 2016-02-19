// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
"use strict";

var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'red'; // TODO: change this to your favorite color from the list
// TODO: Create a block of if/else statements to check for every color except indigo and violet.
// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.
// TODO: Have a final else that will catch indigo and violet.
// TODO: In the else, log: I do not know anything by that color.
// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.

if (color == "red") {
	console.log("Blood is red.");
} else if (color == "orange") {
	console.log("Basketballs are orange.");
} else if (color == "yellow") {
	console.log("Bananas are yellow.");
} else if (color == "green") {
	console.log("Yoda is green.");
} else if (color == "blue") {
	console.log("Yondu is blue.");
} else {
	console.log("I know nothing about that color.");
}

(color == favorite) ? console.log("That's my favorite color in this array!") : console.log("Nope, not my favorite");

