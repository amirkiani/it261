<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case  'index.php' : 
    $title = 'Homepage for our new website';
    $mainHeadLine = 'Welcome to our Home page';
    $center = 'center';
    $body = 'home';
    break;

    case  'about.php' : 
        $title = 'About page for our new website';
        $mainHeadLine = 'Welcome to our wonderful about page';
        $center = 'center';
        $body = 'about inner';
        break;

    case  'daily.php' : 
        $title = 'Daily Page';
        $mainHeadLine = 'Welcome to the daily page';
        $center = 'center';
        $body = 'daily inner';
        break;
    case  'customers.php' : 
        $title = 'Our very important customers';
        $mainHeadLine = 'Hello customers- good to see you!';
        $center = 'center';
        $body = 'customers inner';
        break;

    case  'contact.php' : 
        $title = 'Contact us today';
        $mainHeadLine = 'Welcome to our contact page';
        // $center = 'center';
        $body = 'contact inner';
        break;

    case  'thx.php' : 
        $title = 'Our thahnk you page';
        $mainHeadLine = 'Thank you for filling out our form!';
        // $center = 'center';
        $body = 'contact inner';
        break;


    case  'gallery.php' : 
        $title = 'Check out our gallery';
        $mainHeadLine = '';
        $center = 'center';
        $body = 'gallery inner';
        break;
} // end switch

$nav['index.php'] = "Home";
$nav['about.php'] = "About";
$nav['daily.php'] = "Daily";
$nav['customers.php'] = "Customers";
$nav['contact.php'] = "Contact";
$nav['gallery.php'] = "Gallery";

function makeLinks($nav) {
$myReturn = '';
foreach($nav as $key => $value) {
if(THIS_PAGE == $key) {
$myReturn .= '<li><a href="'.$key.' "class="active">'.$value.'</a></li>';

} else {
    $myReturn .= '<li><a href="'.$key.' "> '.$value.'</a></li>';

} // end else

} // end forreach
// always remember to return myReturn

return $myReturn;
} // end function




// this is the php for my form

$firstName = '';
$lastName = '';
$email = '';
$phone = '';
// $gender = '';
$dcOrMarvel = '';
$dc = '';
$marvel = '';
$privacy = '';
$comments = '';
$tel = '';

$firstNameError = '';
$lastNameError = '';
$emailError = '';
$phoneError = '';
// $genderError = '';
$dcOrMarvelError = '';
$privacyError = '';
$commentsError = '';
$telError = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // we need to declare our errors, i.e. if a field is empty, do something
    
    
    
    if(empty($_POST['firstName'])) {
        $firstNameError = 'Please fill out your first name';
    } else {
        $firstName = $_POST['firstName'];
    }

    if(empty($_POST['lastName'])) {
        $lastNameError = 'Please fill out your last name';
    } else {
        $lastName = $_POST['lastName'];
    }

    if(empty($_POST['email'])) {
        $emailError = 'Please fill out your email';
    } else {
        $email = $_POST['email'];
    }

    if(empty($_POST['dcOrMarvel'])) {
        $dcOrMarvelError = 'Please check one!';
    } else {
        $dcOrMarvel = $_POST['dcOrMarvel'];
    }
    
    if($dcOrMarvel == 'DC') {
        $dc = 'checked';

    }elseif($dcOrMarvel == 'Marvel') {
        $marvel= 'checked';

    }
    if(empty($_POST['dcOrMarvel'])) {
        $dcOrMarvelError = 'Choose between DC and Marvel!';
    } else {
        $dcOrMarvel = $_POST['dcOrMarvel'];
    }
    if(empty($_POST['comments'])) {
        $commentsError = 'Please include your comments!';
    } else {
        $comments = $_POST['comments'];
    }
    if(empty($_POST['privacy'])) {
        $privacyError = 'Please agree to our privacy rules';
    } else {
        $privacy = $_POST['privacy'];
    }
// if end user checks the checkboxes, all of them, we want to know
// implode the array of wines - create a function for that!

function myWines() {
    $myReturn = '';
    if (!empty($_POST['wines'])) {
    $myReturn = implode(',', $_POST['wines']);

    } return $myReturn;  // end if

} // end function

if(empty($_POST['tel'])) {  // if empty, type in your number
    $telError = 'Your phone number please!';
    } elseif(array_key_exists('tel', $_POST)){
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['tel']))
    { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
    $telError = 'Invalid format!';
    } else{
    $tel = $_POST['tel'];
    }
    }


    if(isset($_POST['firstName'],
    $_POST['lastName'],
    $_POST['gender'],
    $_POST['wines'],
    $_POST['comments'],
    $_POST['tel'],
    $_POST['privacy'])) {

        $to = 'amir.kiani1025@gmail.com';
        $subject = 'Test email' .date('m/d/y');
        $body = ''.$firstName.' has filled out your form' .PHP_EOL.'';
        $body .= 'Email: '.$email.' '.PHP_EOL.'';
        $body .= 'Your Phone Number: '.$tel.' '.PHP_EOL.'';
        $body .= 'Your Wines: '.myWines().' '.PHP_EOL.'';
        $body .= 'Gender: '.$gender.' '.PHP_EOL.'';
        $body .= 'Comments:'.$comments.'';

        $headers = array(
            'from' => 'no-reply@ameercodes.com',
            'Reply-to' => ''.$email.'');
        

        mail($to, $subject, $body, $headers) ;
            header('Location: thx.php');
        

    } //end isset
}
    //close if $_SERVER request method
?>  