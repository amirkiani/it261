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
    <?php include('includes/form.php') ; ?>
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