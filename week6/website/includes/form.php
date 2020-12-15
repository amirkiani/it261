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

<label>Are you a DC or Marvel fan?</label>

<!-- logic = we are still asking if post currency was set  -->

<ul>
<li>
<input type="radio" name="dcOrMarvel" value="DC"
<?php if(isset($_POST['dcOrMarvel']) && $_POST['dcOrMarvel'] == 'DC') echo 'checked="checked"'; ?>
    >DC Dude!!! </li>
    <input type="radio" name="dcOrMarvel" value="Marvel"
<?php if(isset($_POST['dcOrMarvel']) && $_POST['dcOrMarvel'] == 'Marvel') echo 'checked="checked"'; ?>
    >Make Mine Marvel!! </li>


</ul>
<span><?php echo $dcOrMarvelError; ?></span>

<label>Where do you watch your favorite heroes at?</label>

<ul>
<li>
<input type="checkbox" name="media[]" value="Movies"
<?php if(isset($_POST['media']) && $_POST['media'] == 'Movies') echo 'checked="checked"'; ?>
    >Movies </li>
    <input type="checkbox" name="media[]" value="TV"
<?php if(isset($_POST['media']) && $_POST['media'] == 'TV') echo 'checked="checked"'; ?>
    >TV </li>
    <input type="checkbox" name="media[]" value="Comics"
<?php if(isset($_POST['media']) && $_POST['media'] == 'Comics') echo 'checked="checked"'; ?>
    >Comics</li>

</ul>
<span><?php echo $dcOrMarvelError; ?></span>

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