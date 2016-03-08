<?php

$book1 = [
	'title' => 'Choke',
	'author' => [
		'first_name' => 'Chuck',
		'last_name' => 'Palahnuick'
		],
];

$book2 = [
	'title' => 'A Game of Thrones',
	'author' => [
		'first_name' => 'George', 
		'last_name' => 'RR Martin'
	],
];

$book3 = [
	'title' => 'Moby Dick',
	'author' => [
		'first_name' => 'Herman', 
		'last_name' => 'Melville'
	],
];

$book4 = [
	'title' => 'The Catcher and the Rye',
	'author' => [
		'first_name' => 'JD', 
		'last_name' => 'Salinger'
	],
];

$book5 = [
	'title' => 'The Sun Also Rises',
	'author' => [
		'first_name' => 'Ernest', 
		'last_name' => 'Hemingway'
	],
];

$books = ['book1' => $book1, 'book2' => $book2, 'book3' => $book3, 'book4' => $book4, 'book5' => $book5];
print_r($books);