<?php
// people view page
include('config.php');
// do you remember the isset $_GET['today']\\

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];

} else {
    header('location:people.php');
}

$sql = 'SELECT * FROM People WHERE PeopleID = '.$id.'';

// connect to the database

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
// we extract the data here

$result = mysqli_query($iConn, $sql) or die(myerror(__FILE__,__LINE__, mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0 ) { // show the records
    while($row = mysqli_fetch_assoc($result)) {
        $FirstName = stripslashes($row['FirstName']);
        $LastName = stripslashes($row['LastName']);
        $Occupation = stripslashes($row['Occupation']);
        $Email = stripslashes($row['Email']);
        $BirthDate = stripslashes($row['BirthDate']);
        $Description = stripslashes($row['Description']);
        $FeedBack = '';
    }

} else {
    $Feedback = 'Sorry, no candidates - they are partying';
}

include('includes/header.php'); ?>

<main>
<h2>Welcome to <?php echo $FirstName;?>'s Page</h2>
<?php
if($Feedback == '') {
    echo '<ul>';
    echo '<li> <b>First Name: </b> '.$FirstName.'</li>';
    echo '<li> <b>Last Name: </b> '.$LastName.'</li>';
    echo '<li> <b>Occupation: </b> '.$Occupation.'</li>';
    echo '<li> <b>Email: </b> '.$Email.'</li>';
    echo '<li> <b>Birthdate: </b> '.$BirthDate.'</li>';

    echo '<ul>';
    echo '<p>'.$Description.'</p>';
    echo '<br>';
    echo '<p><a href="people.php">Go back to the people page!</a></p>';


} else {
    echo $FeedBack;

    

}


?>
</main>

<aside>
<?php
 if($FeedBack == '') {

    echo '<img src="uploads/people'.$id.'.jpg" alt="'.$FirstName.'">';
 } else {
     echo $FeedBack;
 }

 // release the web server

@mysqli_free_result($result);

// close the connection

@mysqli_close($iConn);

?>

</aside>

<?php
include('includes/footer.php');

