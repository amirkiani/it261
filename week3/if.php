<?php
// the if statement!!!

$salary = 150000;

// if($salary >= 200000) {
//     echo 'Yippy and Skippy!!!';
// }

// else {
//     echo 'Not too happy!';
// }


if($salary >= 200000) {
    echo 'Yippy and Skippy, and life is good!!!';
}
elseif($salary >= 100000) {
    echo 'Not bad, still happy';
}
else{
    echo 'I may need to work harder';
}


echo '<br>';
// date function that we are going to echo

echo date('Y');
echo '<br>';

echo date('h:i a');

echo '<h2>Reset the timezone</h2>';

date_default_timezone_set('America/Los_Angeles');

echo "The real time is " .date('h:i a');

// if it is the morning, say good morning
    // if it is the afternoon, say good afternoon
    // if it is the evening, say good evening

echo '<br>';
echo date('H: i a');
echo '<br>';
echo date('H: i:sa');
echo '<br>';

$correct_time = date('H: i a');

if($correct_time < 10) {
    echo 'Good morning!';
} 
elseif($correct_time < 18) {
    echo 'Good afternoon!';
}
else {
    echo 'Good evening';
}

/*
if the name input field is empty, do something!!!
else, then we are happy!
if the email input field is empty, the do something will be a message to the user to fill out the input field
In the world of php, we have variables, we also have arrays, and we also have GLOBAL variables!!!
$_POST['name'], $_POST['email], $_POST['wines']... etc


if(empty($_POST['name'])) {
$name_err = 'Please fill out your name';
}
else {
    $name= $_POST['name'];
}



*/