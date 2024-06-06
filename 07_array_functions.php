<?php
/* 
$fruits = ['apple', 'banana', 'orange'];
echo count($fruits);
echo '<br>';

echo in_array('banana', $fruits);

$fruits[2] = 'grape';
array_push($fruits, 'mango' , 'pineapple');
array_unshift($fruits, 'kiwi');

echo count($fruits);

array_pop($fruits);
array_shift($fruits);
unset($fruits[2]);


$chunkedArray = array_chunk($fruits, 2);
var_dump($chunkedArray);

$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);
var_dump($arr3);
$arr4 = [...$arr1, ...$arr2];
var_dump($arr4);


$a = ['green', 'blue', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a, $b);

echo $c['green'];

$keys = array_keys($c);
print_r($keys);

$flipped = array_flip($c);
var_dump($flipped);


$numbers = range(1,20);
var_dump($numbers);


$newNumbers = array_map(function($number) {
    return "Number {$number}";
}, $numbers);
var_dump($newNumbers);


$lessThan10 = array_filter($numbers, fn($number) => number <10) ;
*/
/*
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
var_dump($sum);
*/
