<?php
/* 
function registerUser()
{
    echo'User has been registered!';
}

registerUser();


function registerUser2($username)
{
    echo'User has been registered!';
}
registerUser2('Brad');
*/

function add($num1, $num2)
{
    return ($num1 + $num2);
}

$sum = add(5,5);
echo $sum;

function substract($num1 = 10, $num2 = 5)
{
    return ($num1 - $num2);
}
echo substract();



$add = function ($num1, $num2) {
    return ($num1 + $num2);
};
echo $add(5,5);


$multiply = fn ($num1, $num2) => $num1 * $num2;
echo $multiply(5,5);
