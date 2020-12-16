<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $title ?></title>
<link rel="stylesheet" text="text/css" href="css/styles.css">

</head>

<body>

<body class="<?php echo $body; ?>">
<header class="<?php echo $center; ?>">
    <div class="inner-header">
        <nav> 
            <ul> 
            <li class="shows">Best Shows of 2020</li> 
                <?php 
                    
                
                echo makelinks($nav);  ?> 
            </ul> 
</nav> 
    </div> 
</header> 