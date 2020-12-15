<?php 

$name = '';
$email = '';
$amount = '';
$bank = '';
$currency = '';

$nameError = '';
$emailError = '';
$amountError = '';
$bankError = '';
$currencyError = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // we need to declare our errors, i.e. if a field is empty, do something
    
    
    
    if(empty($_POST['name'])) {
        $nameError = 'Please fill out your name';
    } else {
        $name = $_POST['name'];
    }

    if(empty($_POST['email'])) {
        $emailError = 'Please fill out your email';
    } else {
        $email = $_POST['email'];
    }

    if(empty($_POST['amount'])) {
        $amountError = 'Show me the money';
    } else {
        $amount = $_POST['amount'];
    }
    if($_POST['bank'] == 'NULL') {
        $bankError = 'Please choose your institution';
    } else {
        $bank = $_POST['bank'];
    }
    if(empty($_POST['currency'])) {
        $currencyError = 'Please choose your currency';
    } else {
        $currency = $_POST['currency'];
    }
}
    //close if $_SERVER request method
?>  
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Currency Form</title>
<style>
    form {
        width: 350px;
        margin: 0 auto;

    }

    input {
        margin-bottom: 10px;
    }

    input[type=text] {
        width: 100%;
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
    border: 1px solid green;
}

select {
    margin-bottom: 10px;
}

span {
    display: block;
    color: red;
    font-style: italic;
}
</style>
</head>

<body>
<form action="" method="post">
<fieldset>
<label>Name</label>
<input type="text" name="name" value= "<?php
  if(isset($_POST['name'])) echo $_POST['name'] ; ?>">
  <span><?php echo $nameError; ?></span>
<label>Email</label>
<input type="email" name="email" value="<?php
  if(isset($_POST['email'])) echo $_POST['email'] ; ?>">
  <span><?php echo $emailError; ?></span>
<label>How Much Money Do You have?</label>
<input type="text" name="amount" value= "<?php
  if(isset($_POST['amount'])) echo $_POST['amount'] ; ?>">
  <span><?php echo $amountError; ?></span>


<label>Choose your Banking Institution</label>
<select name="bank">
<option value="null"
<?php if(isset($_POST['bank']) && $_POST == 'NULL') {
    echo 'selected = "unselected"';
}
       ?>>Select one</option>
<option value="Bank of America"
<?php if(isset($_POST['bank']) && $_POST['bank'] == 'Bank of America') {
    echo 'selected = "selected"';
}
       ?>>Bank of America</option>

<option value="Chase Bank"
<?php if(isset($_POST['bank']) && $_POST['bank'] == 'Chase Bank') {
    echo 'selected = "selected"';
}
       ?>>Chase Bank</option>

<option value="Boeing Credit Union"
<?php if(isset($_POST['bank']) && $_POST['bank'] == 'Boeing Credit Union') {
    echo 'selected = "selected"';
}
       ?>>Boeing Credit Union</option>


<option value="Wells Fargo"
<?php if(isset($_POST['bank']) && $_POST['bank'] == 'Wells Fargo') {
    echo 'selected = "selected"';
}
       ?>>Wells Fargo</option>

<option value="Mattress"
<?php if(isset($_POST['bank']) && $_POST['bank'] == 'Mattress') {
    echo 'selected = "selected"';
}
       ?>>Mattress</option>

</select>
<span><?php echo $bankError; ?></span>
<label>Choose your currency</label>

<!-- logic = we are still asking if post currency was set  -->

<ul>
<li>
<input type="radio" name="currency" value="0.013"
<?php if(isset($_POST['currency']) && $_POST['currency'] == '0.013') echo 'checked="checked"'; ?>
    >Rubles </li>
<li>
<input type="radio" name="currency" value="0.76"
<?php if(isset($_POST['currency']) && $_POST['currency'] == '0.76') echo 'checked="checked"'; ?>
>Canadian dollars </li>
<li>
<input type="radio" name="currency" value="1.28"
<?php if(isset($_POST['currency']) && $_POST['currency'] == '1.28') echo 'checked="checked"'; ?>
>Pounds </li>
<li>
<input type="radio" name="currency" value="1.18"
<?php if(isset($_POST['currency']) && $_POST['currency'] == '1.18') echo 'checked="checked"'; ?>
>Euros </li>
<li>
<input type="radio" name="currency" value="0.0094"
<?php if(isset($_POST['currency']) && $_POST['currency'] == '0.0094') echo 'checked="checked"'; ?>
>Yen </li>
</ul>
<span><?php echo $currencyError; ?></span>
<input type="submit" value="Convert it">
<p><a href="">Reset me!</a></p>
</fieldset>
</form>

    <?php


if(isset($_POST['amount'],
$_POST['currency']) &&
is_numeric($_POST['amount'])&&
is_numeric($_POST['currency'])) {

$amount = $_POST['amount'];
$currency = $_POST['currency'];
$total = $amount * $currency;
$total_f = number_format($total, 2);

?>
<div class="box">
<?php

echo '<h2>Thank you, '.$name.' for filling out our form! Your money will be wired to '.$bank.' within 24 hours</h2>';
    echo '<p>'.$name.', you now have $ '.$total_f.' American dollars</p>';
    echo '<p>We will be getting back to you via your email: '.$email.'</p>';
}
 // close main if statement

    ?>
    </div>
</body>
</html>