<?php
/*
for ($x = 20; $x <= 10; $x--) {
    echo "Number: $x <br>";
}


$x=1;
while ($x <= 5) {
    echo "Number: $x <br>";
    $x++;
}

do{
    echo "Number: $x <br>";
    $x++;
} while ($x <= 5);


$posts=['Post One','Post Two','Post Three'];

$numbers = [1,2,3,4,5];
foreach ($numbers as $num) {
    echo "Number: $num <br>";
}
*/

foreach ($posts as $index => $post) {
    echo "{$index} - {$post} <br>";
}

$person = [
    'first_name' => 'Camille',
    'last_name' => 'Beaufils',
    'email' => '<beaufilscamille@yahoo.fr>',
];

