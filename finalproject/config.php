<?php

// config for credentials.php

ob_start(); // prevents header errors before reading the whole page
define('DEBUG', 'TRUE'); // we want to see our errors

include('credentials.php');

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
case 'login.php' :
$body = 'login';
$title = 'Best TV Shows of 2020 Login Page!'
break;

case 'register.php' :
$body = 'register';
$title = 'Best TV Shows of 2020 Register Page!'
break;

case 'index.php' :
$body = 'home';
$title = 'Best TV Shows of 2020 Home Page!'
break;


case 'about.php' :
$body = 'about';
$title = 'Best TV Shows of 2020 About Page!'
break;

case 'daily.php' :
$body = 'daily';
$title = 'Best TV Shows of 2020 Daily Page!'
break;

case 'shows.php' :
$body = 'shows';
$title = 'Best TV Shows of 2020 Login Page!'
break;

}

// Our nav
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['shows.php'] = 'Shows';
$nav['contact.php'] = 'Contact';

function makeLinks($nav) {
        $myReturn = '';
        foreach($nav as $key => $value) {
                if(THIS_PAGE == $key) {
                        $myReturn .= '<li><a href=" '.$key.' " class="active"> '.$value.' </a></li>';

                
                } else {
                        $myReturn .= '<li><a href=" '.$key.' "> '.$value.' </a></li>'; 
                }
        }
        return $myReturn;
}

// INSERT php for form




//PLEASE REMEMBER -THIS IS PLACED AT THE VERY BOTTOM OF YOUR CONFIG FILE
function myerror($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
echo"Error in file: <b>".$myFile."</b> on line: <b>".$myLine."</b><br />";
echo"Error Message: <b>".$errorMsg."</b><br />";
die();
}else{
        echo "I'm sorry, we have encountered an error. ";
        die();
}
}