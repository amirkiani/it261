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
            $mainHeadLine = 'Member Login';
            $center = 'center';
            $body = 'register';
            break;

    } // end switch

    $nav['index.php'] = "Home";
    $nav['about.php'] = "About";
    $nav['daily.php'] = "Daily";
    $nav['shows.php'] = "Shows";
    $nav['contact.php'] = "Contact";
    //$nav['gallery.php'] = "Gallery";

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

// daily php

if(isset($_GET['today'])) {

    $today = $_GET['today'];
}
else {
    $today = date('l');
}

switch($today) {
    case 'Friday' :
        $hookah = 'Friday is Netflix Day';
        $pic = 'netflix.png';
        $alt = 'Netflix';
        $content = 'Netflix is the number one streaming service with over 150 subscribers worldwide.';
break;
case 'Saturday' :
    $hookah = 'Saturday is Blue Mist day';
    $pic = 'mist.jpg';
    $alt = 'Blue Mister';
    $background = 'red';
    $content = 'Starbuzzs flagship shisha flavor and a favorite of hookah newbies and veterans alike, Blue Mist is the coca cola of shisha flavors. Its available everywhere, everyone has tried it, and it continues to be a best seller throughout the years because its just that good. A delicious mix of sweet blueberry and cool mint, Blue Mist is a great flavor to suggest to someone who is just starting in the world of hookah.';
break;
case 'Sunday' :
    $hookah = 'Sunday is Nakhla Double Apple Day';
    $pic = 'apple.jpg';
    $alt = 'Apple';
    $background = 'blue';
    $content = 'Double Apple (also referred to as Two Apples) is the flavor of choice for traditional hookah smokers and is likely the most popular shisha flavor in the world after mint. Nakhlas version is a complete classic, keeping the same recipe for decades, this is a flavor that takes hookah smokers back with each puff. When we speak to hookah smokers about their first experiences an overwhelming number say that Double Apple was their first hookah flavor. Double Apples mix of Anise (similar to black licorice) and a nice light apple flavor is the epitome of what a classic hookah experience should taste like.';
break;
case 'Monday' :
    $hookah = 'Monday is Fakher Double Apple day';
    $pic = 'fakher.jpg';
    $alt = 'Fakher';
    $background = 'green';
    $content = 'Further driving home how popular the Double Apple flavor is, this is its second appearance in our list. Al Fakhers version, which is commonly referred to as Two Apples Flavour, is very similar to Nakhla and when choosing between the two it is generally going to come down to personal preference. If you surveyed 100 Double Apple smokers, my guess is that 50 would say they prefer Nakhla and 50 would say they prefer Al Fakher. At the end of the day, we think both flavors are outstanding and we encourage you all to give them both a try and decide for yourself.';
break;

case 'Tuesday' :
    $hookah = 'Tuesday is Pirates Cave Day';
    $pic = 'cave.jpg';
    $alt = 'Cave';
    $background = 'white';
    $content = 'Pirates Cave is the second Starbuzz flavor in our top 10 list. This is one for the smoker who loves a super sweet, almost candy-like taste when they smoke. Pirates Cave is sort of like a cross between a lemon lime soda and a hard candy. If you are just getting into smoking hookah and havent developed a palate for more traditional fruit flavors, this is a great place to start. Each bowl is enjoyable and anyone new to hookah will love this flavor when you load up a bowl.';
break;
case 'Wednesday' :
    $hookah = 'Wednesday is Absolute Zero Day';
    $pic = 'zero.jpg';
    $alt = 'Zero';
    $background = 'yellow';
    $content = 'We were so happy to see Absolute Zero on the list when all of the number crunching was done. If there was a title of most underrated shisha flavor, this would be our nominee. Social Smoke is a bit less known than the other brands on this list, but dont sleep on their huge selection of great tasting hookah flavors. Absolute Zero is probably the best icy cold mint flavor out there. If you are a fan of icy mint chewing gum that gives you that cooling sensation in your mouth and throat, this is a must try flavor. Mix with almost any other flavor in the world to get an amazing cooling throat hit with every puff.';
break;
case 'Thursday' :
    $hookag = 'Thursday is White Gummi Day';
    $pic = 'gummi.jpg';
    $alt = 'Gummi';
    $background = 'white';
    $content = 'Fumari is one of the newer brands to be featured on this list but they are on the rise big-time. Smokers love Fumari for their delicious, unique, and authentic flavors as well as their innovative resealable packaging which keeps your flavors fresher for longer. White Gummi Bear is a pretty self explanatory flavor name. If you have ever eaten a White Gummi bear before, then you know what to expect. For those unfortunate enough to have never tried these little bite sized candies, expect a sweet and light pineapple candy flavor.';
break;
}
?>
