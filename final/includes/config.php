<?php
if(session_status() == PHP_SESSION_NONE){
    header('Location: login.php');
}
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
    ob_start(); // prevents header errors before reading the whole page
    define('DEBUG', 'TRUE'); // we want to see our errors

    include('credentials.php');

    // our gallery php





    switch(THIS_PAGE) {
        case  'index.php' : 
        $title = 'TV Planet';
        //$mainHeadLine = 'TV Planet';
        $center = 'center';
        $body = 'home';
        $htmlValidator ="http://ameercodes.com/it261/final/index.php";
        $cssValidator ="http://jigsaw.w3.org/css-validator/validator?uri=ameercodes.com/it261/final";
        break;

        case  'login.php' : 
            $title = 'Login for TV Planet';
            $mainHeadLine = 'Member\'s Login Portal';
            $center = 'center';
            $body = 'login';
            $htmlValidator ="http://ameercodes.com/it261/final/login.php";
            $cssValidator ="http://jigsaw.w3.org/css-validator/validator?uri=ameercodes.com/it261/final/login.php";
            break;

        case  'about.php' : 
            $title = 'About Page';
            // $mainHeadLine = 'Welcome to our wonderful about page';
            $center = 'center';
            $body = 'about inner';
            break;

        case  'daily.php' : 
            $title = 'Daily Page';
            $mainHeadLine = 'Favorite Show for Today';
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
            $title = 'Our thank you page';
            $mainHeadLine = 'Thank you for filling out our form!';
            // $center = 'center';
            $body = 'contact inner';
            break;


        case  'gallery.php' : 
            $title = 'Check out our gallery';
            $mainHeadLine = 'Welcome to the PS5 video games page';
            $center = 'center';
            $body = 'gallery inner';
            break;

        case  'shows.php' : 
            $title = 'Check out the year\'s best shows!';
            $mainHeadLine = 'Welcome to the Top Shows page';
            $center = 'center';
            $body = 'shows';
            break;

        case  'register.php' : 
            $title = 'Registration page';
            $mainHeadLine = 'Welcome to the Top Shows page';
            $center = 'center';
            $body = 'register';
            break;

    } // end switch

    $nav['index.php'] = "Home";
    $nav['about.php'] = "About";
    $nav['daily.php'] = "Daily";
    $nav['shows.php'] = "Shows";
    $nav['contact.php'] = "Contact";
    $nav['gallery.php'] = "Gallery";

    function makeLinks($nav) {
    $myReturn = '';
    foreach($nav as $key => $value) {
    if(THIS_PAGE == $key) {
    $myReturn .= '<li><a href="'.$key.'" class="active">'.$value.'</a></li>';

    } else {
        $myReturn .= '<li><a href="'.$key.' "> '.$value.'</a></li>';

    } // end else

    } // end forreach
    // always remember to return myReturn

    return $myReturn;
    } // end function

    // randImages function for Contact Form

    // randImages Function for Contact Page
    $photos[0] = 'photos1';
    $photos[1] = 'photos2';

    function randImages1($photos) {
        $i = rand(0, count($photos)-1);
        $selectedImages = 'images/' .$photos[$i]. '.jpg';
        return '<img src="'.$selectedImages.'">';
    }

    // randImages function for Candidates

        $candidates[0] = 'trump';
        $candidates[1] = 'biden';
        $candidates[2] = 'clint';
        $candidates[3] = 'sande';
        $candidates[4] = 'warre';
        $candidates[5] = 'harri';
        $candidates[6] = 'booke';
        $candidates[7] = 'ayang';
        $candidates[8] = 'butti';
        $candidates[9] = 'klobu';
        $candidates[10] = 'castr';

        function randImages2($candidates) {
            $i = rand(0, count($candidates)-1);
            $selectedImages = 'images/' .$candidates[$i]. '.jpg';
            return '<img src="'.$selectedImages.'">';
        }




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

        // if(empty($_POST['telephone'])) {
        //     $telError = 'Please enter your telephone';
        // } else {
        //     $tel = $_POST['telephone'];
        // }


        // if(is_null($_POST['privacy'])) {
        //     $privacyError = 'Please agree to our privacy rules';
        // } else {
        //     $privacy = $_POST['privacy'];
        }
    // if end user checks the checkboxes, all of them, we want to know
    // implode the array of wines - create a function for that!

    function myFavoriteMedia() {
        $myReturn = '';
        if(!empty($_POST['media'])) {
            $myReturn = implode(', ', $_POST['media']);
        }
        return $myReturn; 
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
        $_POST['email'],
        $_POST['tel'],
        $_POST['comments']) && $_POST['privacy'] == 'true') {

            $to = 'amir.kiani1025@gmail.com';
            $subject = 'Test email' .date('m/d/y');
            $body = ''.$firstName.' has filled out your form' .PHP_EOL.'';
            $body .= 'Email: '.$email.' '.PHP_EOL.'';
            $body .= 'Your Phone Number: '.$tel.' '.PHP_EOL.'';
            $body .= 'Your Favorite: '.$dcOrMarvel.' '.PHP_EOL.'';
            $body .= 'Preferred media: '.myFavoriteMedia().' '.PHP_EOL.'';
            $body .= 'Agreed to Privacy: ' .$_POST['privacy'].' '.PHP_EOL.'';
            $body .= 'Comments:'.$comments.'';

            $headers = array(
                'from' => 'no-reply@ameercodes.com',
                'Reply-to' => ''.$email.'');
            

            mail($to, $subject, $body, $headers) ;
                header('Location: thx.php');
            

        } //end isset
    
        //close if $_SERVER request method


    //PLEASE REMEMBER -THIS IS PLACED AT THE VERY BOTTOM OF YOUR CONFIG FILE
    function myerror($myFile, $myLine, $errorMsg) {

        if(defined('DEBUG') && DEBUG) {
            echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
            echo 'Error message <b> '.$errorMsg.' </b>';
            die();
        
        } else {
            echo 'Houston, we have a problem!';
            die();
        }
    }

// ?>