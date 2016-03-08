<?php

$numbers = array(1, 2, 3, 4, 5);
var_dump($numbers);
print_r($numbers);

$numbers = [1, 2, 3, 4, 5];
var_dump($numbers);
print_r($numbers);

echo $numbers[3];

$person1 = [
	'first_name' => 'Trey',
	'last_name' => 'Sowers',
	'email' => 'Trey@Trey.com',
	'phone' => '555-555-5555'
];

$person2 = [
	'first_name' => 'Jon',
	'last_name' => 'Doe',
	'email' => 'Jon@missing.com',
	'phone' => '555-555-6666'
];

$person3 = [
	'first_name' => 'Jessi',
	'last_name' => 'Box',
	'email' => 'Jessi@Jessi.com',
	'phone' => '555-777-8888'
];

$test = [
'person1' => $person1,
'person2' => $person2,
'person3' => $person3
];