<?php
define ('THIS_PAGE',basename($_SERVER['PHP_SELF']));

if(isset($_GET['today'])) {

    $today = $_GET['today'];
}
else {
    $today = date('l');
}
switch($today) {
    case 'Friday' :
        $hookah = 'Friday is Mint Day';
        $pic = 'mint.jpg';
        $alt = 'Mint';
        $background = 'orange';
        $content = 'Mint can be mixed with nearly every flavor on earth and Al Fakhers version is the best authentic mint flavor around. Others might have a cooler finish, or a stronger flavor, but no one has been able to reproduce that essential fresh mint flavor like Al Fakher. Congrats to Al Fakher Mint on being the most popular shisha flavor of all time.';
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
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link href="css/styles.css" type="text/css" rel="stylesheet">
<title> <?php echo $title;?></title>

</head>

<<body class="<?php echo $body_class;?>">
<body class="<?php echo $background; ?>">
    
<header>
    <div class="row">
    <img id="logo" src="images/logo.png" alt="PHP logo">
         
    </div>
    
    </header>    
    <nav>
        
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="switch.php">Switch - 3</a></li>
            <li><a href="adder.php">Troubleshoot - 4</a></li>
            <li><a href="calculatorpage.php">Calculator - 5</a></li>
            <li><a href="week6/website/index.php">Email - 6</a></li>
            <li><a href="website/gallery.php">Gallery - 7</a></li>
            <li><a href="website/ps5.php">Database - 8</a></li>
        </ul>
    </nav>    