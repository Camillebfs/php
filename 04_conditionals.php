<?php
/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to


$age = '20';

if ($age == 18) {
    echo 'You are old enough to vote';
    echo $age;
} else {
    echo 'Sorry, you are too young to vote';
    echo $age;
}




$today = date("F j, Y, g:i a");
echo $today;

$time = date('H');
if ($t <12) {
    echo 'Have a good morning';
} elseif ($t < 17) {
    echo 'Have a good afternoon';
    echo $age;
} else {
    echo 'Have a good evening';
}

$postsExist = !empty($posts[0]) ? $posts[0] : 'There are no posts';


$_posts =[];

if (!empty($posts[0])) {
    echo $_posts[0];
} else {
    echo 'There are no posts';
}

echo !empty($_posts[0])? $_posts[0] : 'There are no posts';

*/

$favcolor='red';

switch ($favcolor) {
    case'red':
        echo 'Your favorite color is red';
        break;
    case 'blue':
        echo 'Your favorite color is blue';
        break;
    case 'green':
        echo 'Your favorite color is green';
        break;
    default:
        echo 'Your favorite color is not red, blue, or green';
        break;
}