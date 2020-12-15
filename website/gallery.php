<?php
include('config.php'); 
include('includes/header.php');
?>


<div id="wrapper">

<main>

    <h1><?php echo $mainHeadLine;  ?></h1>
<table class="ps5">
<?php foreach($ps5 as $fullName => $image) :   ?>
<tr>
<td>
<img src="images/<?php echo substr($image, 0, 5)  ?>.png" alt="<?php echo $fullName;   ?>">
</td>

<td><?php echo str_replace('_', ' ', $fullName) ; ?></td>

<td><?php echo substr($image, 6) ; ?></td>
</tr>
<?php endforeach ; ?>
</table>
</main>

<aside>
<h3>Welcome to our PS5 Gallery Page!</h3>
<p>Included on the table are the hottest PS5 video games!</p>

<h3>Listed below is the link to check for PS5 availability!</h3>
<a href="https://www.cnet.com/how-to/more-ps5-preorders-coming-soon-says-sony-check-inventory-at-amazon-walmart-gamestop-and-more/">PS5 Stock Checker</a>

</aside>

  
<?php
include('includes/footer.php');
?>