<?php
// The beginning of our php - the world of variables!!



//Think about a variable as a container for content!!!

//$firstName = 'Ameer';
// Ameer is assigned to the variable $firstName
//$firstName = 'Sara';
//$firstName = 'Elizabeth';

$lastName= 'Kiani';
echo $lastName;
echo '<br>';

$firstName[] = 'Sara';
$firstName[] = 'Elizabeth';
$firstName[] = 'Kamala';
$firstName[] = 'Gretchen';

$firstName = ['Ameer', 'Sara', 'Elizabeth', 'Kamala', 'Gretchen'];
$firstName = array('Ameer', 'Sara', 'Elizabeth', 'Kamala', 'Gretchen');

print_r($firstName);
echo '<br>';

echo $firstName[3];

$show = array
    ('Name' => 'The Crown', 
    'Actor' => 'Dexter', 
    'Genre' =>'Historical Fiction');

$showName = 'The Crown';
$showActor = 'Clair Foy';
$showGenre = 'Historical Fiction';

echo '<p>My favorite show is '.$showName.', starring '.$showActor.' which is a '.$showGenre.'</p>';

//echo $firstName. ' ' .$lastName;
//echo '<br>';

//echo '<h2> '. $firstName.'  </h2>';

//echo "<h1>$firstName </h1>";

$begAlpha = 'abc';
$begAlpha2 = "def";
echo '<br>';
echo $begAlpha . $begAlpha2;

echo '<br>';

$begAlpha = 'abc';
$begAlpha = 'def';

echo $begAlpha;

echo '<br>';

$begAlpha = 'abc';
$begAlpha .= 'def';

echo $begAlpha;

echo '<br>';

$x = 5;
echo $x;
$x *= 5;
echo '<br>';
echo $x;
$y = 100;
$y *= .0957;
echo '<br>';
echo $y;
echo '<br>';
$y_num = number_format($y, 2);
echo '<br>';
echo 'My tax rate for 100 dollars is $'.$y_num.'';

$a = 20;
$a /= 2;
echo '<br>';
echo $a;
