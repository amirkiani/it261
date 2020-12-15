<?php 

$firstName = '';
$lastName = '';
$email = '';
//$phone = '';
$gender = '';
$wines = '';
$privacy = '';
$comments = '';
$tel = '';

$firstNameError = '';
$lastNameError = '';
$emailError = '';
//$phoneError = '';
$genderError = '';
$winesError = '';
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

    if(empty($_POST['gender'])) {
        $genderError = 'Please check one!';
    } else {
        $gender = $_POST['gender'];
    }
    
    if($gender == 'male') {
        $male = 'checked';

    }elseif($gender == 'female') {
        $female = 'checked';

    }
    if(empty($_POST['wines'])) {
        $winesError = 'What, no wines?';
    } else {
        $wines = $_POST['wines'];
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
<html lang="en">
<head>
<meta charset="UTF-8">
<title>My Emailable Form</title>
<style>
    form {
        width: 350px;
        margin: 0 auto;

    }

    input {
        margin-bottom: 10px;
    }

    input[type=text],
    input[type=email],
    textarea {
        width: 100%;
        height: 30px;
    }

    textarea{
            height: 120px;
            margin-bottom: 20px;
        }

    fieldset {
        color:#666;
        padding: 10px 15px 10px 10px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

.box {
    width: 600px;
    margin: 20px auto;
    background: beige;
    padding: 20px;
    
}

select {
    margin-bottom: 10px;
}

ul {
    list-style-type: none;
    }

span {
    display: block;
    color: red;
    font-style: italic;
}
</style>
</head>

<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<fieldset>
<label>First Name</label>
<input type="text" name="firstName" value= "<?php
  if(isset($_POST['firstName'])) echo htmlspecialchars($_POST['firstName']) ; ?>">
  <span><?php echo $firstNameError; ?></span>

  <label>Last Name</label>
<input type="text" name="lastName" value= "<?php
  if(isset($_POST['lastName'])) echo htmlspecialchars($_POST['lastName']) ; ?>">
  <span><?php echo $lastNameError; ?></span>

<label>Email</label>
<input type="email" name="email" value="<?php
  if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ; ?>">
  <span><?php echo $emailError; ?></span>

  <label>Telephone</label>
<input type="telephone" name="tel" placeholder="xxx-xxx-xxxx" value="<?php
  if(isset($_POST['tel'])) echo htmlspecialchars($_POST['tel']) ; ?>">
  <span><?php echo $telError; ?></span>

<label>Gender</label>

<!-- logic = we are still asking if post currency was set  -->

<ul>
<li>
<input type="radio" name="gender" value="female"
<?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked="checked"'; ?>
    >Female </li>
    <input type="radio" name="gender" value="male"
<?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked"'; ?>
    >Male </li>


</ul>
<span><?php echo $genderError; ?></span>

<label>Favorite Wines</label>

<ul>
<li>
<input type="checkbox" name="wines[]" value="Cabernet"
<?php if(isset($_POST['wines']) && $_POST['wines'] == 'Cabernet') echo 'checked="checked"'; ?>
    >Cabernet </li>
    <input type="checkbox" name="wines[]" value="Merlot"
<?php if(isset($_POST['wines']) && $_POST['wines'] == 'Merlot') echo 'checked="checked"'; ?>
    >Merlot </li>
    <input type="checkbox" name="wines[]" value="Syrrah"
<?php if(isset($_POST['wines']) && $_POST['wines'] == 'Syrrah') echo 'checked="checked"'; ?>
    >Syrrah</li>
    <input type="checkbox" name="wines[]" value="Malbec"
<?php if(isset($_POST['wines']) && $_POST['wines'] == 'Malbec') echo 'checked="checked"'; ?>
    >Malbec </li>
    <input type="checkbox" name="wines[]" value="Zinfandel"
<?php if(isset($_POST['wines']) && $_POST['wines'] == 'Zinfandel') echo 'checked="checked"'; ?>
    >Zinfandel </li>

</ul>
<span><?php echo $winesError; ?></span>

<label>Comments</label>
<textarea name="comments"> <?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ; ?>

</textarea>
<span><?php echo $commentsError; ?></span>

<input type="radio" name="privacy" value="<?php
if(isset($_POST['privacy'])) echo htmlspecialchars($_POST['privacy']) ; ?>">
I agree to your Privacy Policy
<span><?php echo $privacyError; ?></span>
<input type="submit" value="Send it!">
<p><a href="">Reset me!</a></p>
</fieldset>
</form>

    
</body>
</html>