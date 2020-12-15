<?php
include('config.php'); 
include('includes/header.php');
?>


<div id="wrapper">
    <h1 class="<?php echo $center ;    ?>"><?php echo $mainHeadLine;  ?></h1>

<?php $photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';

$i = rand(0, count($photos)-1);
$selectedImages = 'images/'.$photos[$i].'.jpg';
echo '<img src="'.$selectedImages.'">';
?>

    <blockquote>
"Curabitur tempor sagittis nibh. Sed id felis ac dolor condimentum mattis id eget libero. Vestibulum mi ligula, mollis quis justo nec, vehicula pellentesque ligula. Vivamus aliquam faucibus nibh, sit amet iaculis lorem mattis non. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. "

</blockquote>

  
<?php
include('includes/footer.php');
?>