<?php
// people.php
include('config.php');
include('includes/header.php');
// WE ARE CONNECTING TO THE DATABASE!

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];

} else {
    header('location:ps5.php');
}

$sql = 'SELECT * FROM PS5 WHERE GameID = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
// we extract the data here

$result = mysqli_query($iConn, $sql) or die(myerror(__FILE__,__LINE__, mysqli_error($iConn)));

// do we have more than 0 rows //

if(mysqli_num_rows($result) > 0 ) { // show the records
    while($row = mysqli_fetch_assoc($result)) {
    // this array will display the contents of your row
    echo '<ul>'; // use a similar a href's value as we used for switch assignment
    echo '<li class="bold"><h2>'.$row['GameName'].'</h2></li>';
    echo '<li>'.$row['ReleaseDate'].'</li>';
    echo '<li>'.$row['Console'].'</li>';
    echo '<li>'.$row['Description'].'</li>';

    echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"/>';

        echo '</ul>';
    } // closing the while loop

} else { // what if there are no people

    echo 'There is no game matching this ID';

}

 // close the else

// release the web server

@mysqli_free_result($result);

// close the connection

@mysqli_close($iConn);
?>
</main>


</aside>
<?php
include('includes/footer.php');