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
// WE ARE CONNECTING TO THE DATABASE!
?>
<main>
<?php
$sql = 'SELECT * FROM PS5';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
// we extract the data here

$result = mysqli_query($iConn, $sql) or die(myerror(__FILE__,__LINE__, mysqli_error($iConn)));

// do we have more than 0 rows //

if(mysqli_num_rows($result) > 0 ) { // show the records
    while($row = mysqli_fetch_assoc($result)) {
    // this array will display the contents of your row
    echo '<ul>'; // use a similar a href's value as we used for switch assignment
    echo '<li class="bold">For more information <a href="ps5-view.php?id='.$row['GameID'].' ">'.$row['GameName'].' </a></li>';
    echo '<li>'.$row['ReleaseDate'].'</li>';
    echo '<li>'.$row['Console'].'</li>';
    echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"/>';

        echo '</ul>';
    } // closing the while loop

} else { // what if there are no people

    echo 'Nobody home!';

}

 // close the else

// release the web server

@mysqli_free_result($result);

// close the connection

@mysqli_close($iConn);
?>
</main>

<aside>
<h3>PS5 Release Games Available!</h3>
<p>PlayStation 5 (PS5) is a home video game console developed by Sony Interactive Entertainment. Announced in 2019 as the successor to the PlayStation 4, the PS5 was released on November 12, 2020 in Australia, Japan, New Zealand, North America, Singapore, and South Korea, and November 19, 2020 onwards in other major markets except China and India.

The platform was launched in two variants: a base model with an Ultra HD Blu-ray-compatible optical disc drive, and a Digital Edition lacking this drive, serving as a lower-cost model for those who prefer to buy games through digital download.

The PlayStation 5's main features include a solid-state drive customized for high-speed data streaming to enable significant improvements in storage performance, an AMD GPU capable of 4K resolution display at up to 120 frames per second, hardware-accelerated ray tracing for realistic lighting and reflections, the Tempest Engine allowing for 3D audio effects, and backward compatibility with most PlayStation 4 and PlayStation VR games.</p>

</aside>
<?php
include('includes/footer.php');