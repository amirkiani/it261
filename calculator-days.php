<?php

$error = 'Please add the following: ';

$miles = '';
$price = '';
$eff = '';
$cost = NULL;
$submit = NULL;
$name = '';
$days = '';
$time = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(empty($_POST['name'])) {
        $error .= 'Name';
    } else {
        $name = $_POST['name'];
    }
    
    
    if(empty($_POST['miles'])) {
        $error .= 'Miles';
       
    } else {
        $miles = $_POST['miles'];
    }

    if (empty($_POST['price'])) {
        $error .= ' Price ';
    } else {
        $price = $_POST['price'];
    }
    
    if (empty($_POST['fuel'])) {
       $error .= ' Efficiency ';
    } else {
        $eff = $_POST['fuel'];
    }
    
    if (empty($_POST['days'])) {
        $error .= ' Days ';
     } else {
         $days = $_POST['days'];
     }
    
    
    if ($error == 'Please add the following: ' ) {
        $cost = ($miles / $eff) * $price;
        $submit = 1;
        $time = ($miles/65) / $days;
    } 

    
}


?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Calculator</title>
    <style>
    form {
        background:lightyellow;
        width: 500px;
        margin: 0 auto;

    }

    .center {
            text-align: center;
        }

    li {
        list-style-type: none;
        line-height: 1em;
        margin-bottom: 5px;
        width: 100%;
        display: inline-block;
    }

    p {
        float: left;
        height: 1em;
        line-height: 1em;
        margin: 0;
    }
    
    input[type="radio"] {
        float: left;
        width:  25px;
        margin: 2.5px 0 0 0;
    }

    .box {
            width: 500px;
            margin: auto;
            padding: 10px;
            border: solid 2px black;
        }

    </style>
    </head>

    <body>

    <h1 class="center">Our Calculator</h1>


        <form action="" method="post">
            <fieldset>
            <label><h2>Your Name</h2></label>
            <input type="text" name="name" value="<?php
                if(isset($_POST['name'])) echo $_POST['name'] ; ?>">
            </fieldset>
            <fieldset>
            <label><h2>How many miles will you be driving</h2></label>
            <input type="text" name="miles" value="<?php
                if(isset($_POST['miles'])) echo $_POST['miles'] ; ?>">
            </fieldset>
            <fieldset>
            <label><h2>How many hours per day would you like to be driving?</h2></label>
            <input type="text" name="days" value="<?php
                if(isset($_POST['days'])) echo $_POST['days'] ; ?>">
            </fieldset>
            <fieldset>
            <label><h2>Price per gallon</h2></label>
        
                <ul>
                    <li>
                        <input type="radio" name="price" value="3.00" <?php if(isset($_POST['price']) && $_POST['price'] == "3.00") echo "checked" ; ?>>
                        <p>$3.00</p>
                    </li>
                    <li>
                        <input type="radio" name="price" value="3.50" <?php if(isset($_POST['price']) && $_POST['price'] == "3.50") echo "checked" ; ?>>
                        <p>$3.50</p>

                    </li>
                    <li>
                        <input type="radio" name="price" value="4.00" <?php if(isset($_POST['price']) && $_POST['price'] == "4.00") echo "checked" ; ?>>
                        <p>$4.00</p>

                    </li>
                </ul>
                
            </fieldset>
            <fieldset>
            <label><h2>Fuel Efficiency</h2></label>
            <select id="efficiency" name="fuel">
                <option value="30">Terrible</option>
                <option value="40">Good</option>
                <option value="50">Excellent</option>
                </select>
            </fieldset>
            <input type="submit" value="Calculate">
            <a href=""><input type="button" value="Reset"></a>

                    </form>
                
        <span class="center">
        <div class="box">
        <?php 
         
            if (is_null($cost) && $error != 'Please add the following: ') { 
                echo '<div class="box">
                <h1 class="center" style="color:red">Error!</h1><h2 class="center">Please fill out the form completely!</h2>    </div>';
        
            } elseif(!is_null($cost) && !is_null($submit)) {
                echo '<h1 class="center" style="color:red">Calculator Results</h1>';
                echo '<p>'.$name.', You have driven '.$miles .' miles</p><br/>';
                echo '<p>Your vehicle has an efficiency rating of '.$eff .' miles per gallon</p><br/>';
                echo '<p>Your total cost for gas will be $'.$cost .' dollars</p><br/>';
                echo '<p>You will be driving a total of '.number_format($time, 2, '.', '') .' days</p>';
            } else {
                // do nothing
            }
            
        
        ?>
        </div>
        </span>


    
    <!-- <?php  
        if (is_null($cost) && $error != 'Please add the following: ') { 
            echo '<p>'.$error .' </p>';
        } elseif(!is_null($cost) && !is_null($submit)) { 
            echo '<p>You have driven '.$miles .' miles</p><br/>';
            echo '<p>Your vehicle has an efficiency rating of '.$eff .' miles per gallon</p><br/>';
            echo '<p>Your total cost for gas will be $'.$cost .' dollars</p>';
        } else {
            // do nothing
        }
            
            
    ?> --> 
    <footer>
        <h3 class="center"><a href="">Reset the page</a></h3>
        <h3 class="center"><a href="calculatorpage.php">Calculator Homepage</a></h3>
    </footer>
    </body>
</html>