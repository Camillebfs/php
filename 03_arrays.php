<?php
//** 
echo $numbers = [1, 2, 3, 4, 5];
echo $colors = ['red', 'blue', 'green'];

echo $numbers[0];
echo $numbers[3];

var_dump($numbers);
var_dump($colors);

$colors = [
    1 => 'red',
    2 => 'blue',
    3 => 'green', 
    ];
    
echo $colors[1];

$hex = [
    'red' => '#f00',
    'green' => '#0f0',
    'blue' => '#00f',
];

echo $hex['red'];
var_dump($hex);

$user1 = [
    'first_name' => 'Camille',
    'last_name' => 'Beaufils',
    'email' => 'beaufilscamille@yahoo.fr',
];

$users = [
    $user1 = // [...$user1]
    [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'johne@yahoo.fr',
    ],
    [
        'first_name' => 'Jane',
        'last_name' => 'Dog',
        'email' => 'jane@yahoo.fr',
    ],
];

var_dump($users);

echo $people[0]['first_name'];
echo $people[2]['email'];

var_dump(json_encode($users));