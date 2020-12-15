<?php

// config for credentials.php

ob_start(); // prevents header errors before reading the whole page
define('DEBUG', 'TRUE'); // we want to see our errors

include('credentials.php');










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