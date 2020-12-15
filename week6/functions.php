<?php

/*function greeting() {
    echo 'hello';
}
greeting ();*/

function greeting() {
    return 'hello';
}

//$variable = 'greeting'();
//echo $variable;

// lets create a function to find the area of a rectangle

function getArea($width, $height) {
    $calculation = $width * $height;
    return $calculation;
}

$calculation = getArea(100, 205);
echo $calculation;

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

function myNav($nav) {
    $myReturn = implode('.', $nav);
    return $myReturn;
}

echo myNav($nav);


echo '<br>';

function popUpAd1() {
    echo '
    <h2>This is my pop up add number 1</h2>
    <h2>This is my pop up add number 1</h2>
    <h2>This is my pop up add number 1</h2>
    <h2>This is my pop up add number 1</h2>
    
    ';

}

popUpAd1();

echo '<br>';


function popUpAd2() {
    $variable = '<h2>This is my pop up add number 2!!</h2>
    <img src="../images/batman.jpg" alt="batman">;
    <h2>This is Batman</h2>
    
    ';
    return $variable;

}

echo popUpAd2();