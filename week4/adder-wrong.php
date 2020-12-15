<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>My Adder Assignment</title>

<style>
        h1 {
        color: green;
        }
        
        form {
            width: 350px;
            border: 1px solid red;
            margin: 20px auto;
            padding: 10px;
        }
        
        .center {
            text-align: center;
        }

</style>

</head>
<body>
<h1 class="center">Adder.php</h1> 
<form action="" method="post">
<label>Enter the first number:</label>
<input type="text" name="num1"><br>
<label>Enter the second number:</label>
<input type="text" name="num2"><br>
<input type="submit" value="Add Em!!"> 
</form>
</body>

<?php     //adder-wrong.php

if (isset($_POST['num1'])){
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$myTotal -= $num1 + $Num2;
echo '<h2>You added '. $num1 .' and '.$num2.'</h2>';
echo '<p> and the answer is <br>;
<style="color:red;">" $myTotal ."!"</p>;
echo '<p><a href="">Reset page</a></p>';
}


?>


<!--Form not opened correctly-->
<!-- Added method post-->
<!-- added closing quotation in value of Add em!!-->
<!-- Removed the unnecessary symbols after html tag-->
<!-- Fixed the quations on line 22 -->
<!-- Added closing p tag to line 25 -->
<!-- Added semicolon at end of line 23 -->
<!-- Added charset to line 3 -->
<!-- Added styles for h1, form and .center -->
<!-- Added method post for line 24 -->
<!-- Added opening label tag for line 25 -->
<!-- Added opening label tag for "Enter the second number -->
<!-- Made "Num1" begin with lower case -->
<!-- Added doctype to the top -->
<!-- Gave h1 a class of "center" -->





</html>