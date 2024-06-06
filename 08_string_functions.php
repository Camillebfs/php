<?php

$string = 'Hello World';
echo strlen($string);
echo strpos($string, 'o');
echo strrpos($string, 'o');
echo strrev($string);
echo ucwords($string);
echo str_replace('World', 'Everyone', $string);

echo substr($string, 0, 5);
echo substr($string, 5);

if (str_starts_with($string, 'Hello')) {
    echo 'YES';
}

$string2 = '<h1>Hello Everyone</h1>';
echo htmlentities($string2);
