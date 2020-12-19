<?php
// people.php
session_start();

if(!isset($_SESSION['UserName'])) {
    $_SESSION['msg'] = 'You must log in first!';
    header('Location: login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['UserName']);
    header('Location: login.php');
}
// start includes here
include('includes/config.php');
include('includes/header.php');

?>
<?php
    if(isset($_SESSION['UserName'])) : ?>
    <div class="welcome-logout">
    <h3> Welcome, 
        
    <?php echo $_SESSION['UserName']; ?>

    </h3>
    
    <a href="index.php?logout='1'">Log out!</a>
    </div>

    <?php endif ?>
    
<div id="wrapper">

<main>

    <h1><?php echo $mainHeadLine;  ?></h1>

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

<label>Which top five show is your favorite?</label>

<!-- logic = we are still asking if post currency was set  -->

<ul>
<li>
<input type="radio" name="show" value="Mandalorian">
<?php if(isset($_POST['show']) && $_POST['show'] == 'Mandalorian') echo 'checked="checked"'; ?>
    <li>Mandalorian </li>
    <input type="radio" name="show" value="Normal People">
<?php if(isset($_POST['show']) && $_POST['show'] == 'Normal People') echo 'checked="checked"'; ?>
    <li>Normal People </li>
    <input type="radio" name="show" value="High Fidelity">
<?php if(isset($_POST['show']) && $_POST['show'] == 'High Fidelity') echo 'checked="checked"'; ?>
    <li>High Fidelity </li>


</ul>
<span><?php echo $showError; ?></span>

<label>Which is your favorite streamer?</label>

<ul>
<li>
<input type="radio" name="media[]" value="Netflix">
<?php if(isset($_POST['media']) && $_POST['media'] == 'Netflix') echo 'checked="checked"'; ?>
    <li>Netflix </li>
    <input type="radio" name="media[]" value="Disney Plus">
<?php if(isset($_POST['radio']) && $_POST['media'] == 'Disney Plus') echo 'checked="checked"'; ?>
    <li>Disney Plus</li>
    <input type="radio" name="media[]" value="Hulu">
<?php if(isset($_POST['media']) && $_POST['media'] == 'Hulu') echo 'checked="checked"'; ?>
    <li>Hulu</li>

</ul>
<span><?php echo $showError; ?></span>

<label>Comments</label>
<textarea name="comments"> <?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ; ?>

</textarea>
<span><?php echo $commentsError; ?></span>

<input type="radio" name="privacy" value="true" <?php if(isset($_POST['privacy'])) echo 'checked="checked"';          ?>>
I agree to your Privacy Policy
<span><?php echo $privacyError; ?></span>
<input type="submit" value="Send it!">
<p><a href="">Reset me!</a></p>
</fieldset>
</form>
</main>

<aside>
<h3>Tell us about your favorite shows!</h3>
<?php echo randImages1($photos); ?>

<p>
Cras pellentesque nisl vel suscipit sagittis. Curabitur lobortis vestibulum feugiat. Ut nulla purus, volutpat vitae cursus at, eleifend mattis metus. Proin porttitor faucibus convallis. Suspendisse rutrum vel dolor vitae malesuada. Nam hendrerit tempus tortor, at aliquam risus bibendum quis. Aliquam in aliquet leo. Mauris consequat massa placerat tortor varius, a hendrerit sem luctus. Mauris quis ligula ornare, mattis eros luctus, pellentesque lectus.

</p>
</aside>

  
<?php
include('includes/footer.php');
?>