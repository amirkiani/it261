<?php

// $var1 = 'test';
// if(isset($vvar1)) {
//     print_r(isset($var1));
// }
// else {
//     echo 'It has not been set';
// }

// is today set, if today is et, yippy skippy
//else the date function for the day will be assigned to today

if(isset($_GET['today'])) {

    $today = $_GET['today'];
}
else {
    $today = date('l');
}

switch($today) {
    case 'Friday' :
        $coffee = 'Friday is latte Day';
        $pic = 'latte.jpg';
        $alt = 'Latte';
        $content = 'Lattee content in at least one paragraph';
break;
case 'Saturday' :
    $coffee = 'Saturday is regular joe day';
    $pic = 'joe.jpg';
    $alt = 'Regular Joe';
    $content = 'Regular joe day';
break;
case 'Sunday' :
    $coffee = 'Sunday is Cappucino Day';
    $pic = 'cap.jpg';
    $alt = 'Cappucino';
    $content = 'Cappucino day';
break;
case 'Monday' :
    $coffee = 'Monday is Frappucino day';
    $pic = 'frap.jpg';
    $alt = 'Frappucino';
    $content = 'Frappuccino is a trademarked brand of the Starbucks Corporation for a line of iced, blended coffee drinks. It consists of coffee or crème base, blended with ice and other various ingredients, usually topped with whipped cream and flavored syrups';
break;

case 'Tuesday' :
    $coffee = 'Tuesday is Americano';
    $pic = 'americano.jpg';
    $alt = 'Americano';
    $content = 'Americano day';
break;
case 'Wednesday' :
    $coffee = 'Wednesday is Pumpkin Latte Day';
    $pic = 'pumpkin.jpg';
    $alt = 'Pumpkin Latte';
    $content = "Pumpkin spice latte";
break;
case 'Thursday' :
    $coffee = 'Thursday is Mocha Day';
    $pic = 'mocha.jpg';
    $alt = 'Mocha';
    $content = "Mocha day";
break;
}



?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Switch page</title>
<style> 
body {
    background-color: coral;
}
</style>

</head>

<body>
<h1><?php echo $coffee; ?></h1>
<p>Please click below</p>
<p><?php echo $content; ?></p>
<ul>
<li><a href="switch.php?today=Sunday">Sunday</a></li>
<li><a href="switch.php?today=Monday">Monday</a></li>
<li><a href="switch.php?today=Tuesday">Tuesday</a></li>
<li><a href="switch.php?today=Wednesday">Wednesday</a></li>
<li><a href="switch.php?today=Thursday">Thursday</a></li>
<li><a href="switch.php?today=Friday">Friday</a></li>
<li><a href="switch.php?today=Saturday">Saturday</a></li>

</ul>

<img src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
</body>
</html>