<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>My Adder Assignment</title>

<style>
        h1 {
        color: green;
        }

        h2 {
            text-align: center;
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

        p {
            text-align: center;
            color: red;
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

if (isset($_POST['num1'],
$_POST['num1'],
$_POST['num2'])
) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $myTotal = $num1 + $num2;

echo '<h2>You added '. $num1 .' and '.$num2.'</h2>';
echo '<p> and the answer is <br> '.$myTotal.'!</p> <br>';
echo '<p><a href="">Reset page</a></p>';
}

?>
</body>
</html>

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
<!-- Made num1 lowercase, moved $num1 and $num2 to new lines -->
<!-- Added paranthesis after $_POST['num2'] -->
<!-- Added ending quotation mark after "and the answer is </p>" -->
<!-- Fixed $myTotal by removing the minus sign -->
<!-- Added styles of h1 and p by making it text-align: center -->
<!-- Made p styles to include color of red -->