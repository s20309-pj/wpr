<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Calculator</h1>

<form  method="post">
<input name="first">
<input name="second">
<br><br>
<select name="method">
	<option value="add"> Addition </option>
	<option value="sub"> Subtraction</option>
	<option value="multi"> Multiplication </option>
	<option value="div"> Division </option>
    <option value ="mod"> Modulo </option>
</select>
<input type=submit value="calculate">
</form>

<?php
$firstNumber=$_POST['first'] ?? "";
$secondNumber=$_POST['second'] ?? "";
$calculate=$_POST['method'] ?? "";

switch($calculate)
{
case "add":
echo $firstNumber + $secondNumber;
break;

case "sub":
 echo $firstNumber - $secondNumber;
 break;

case "multi":
 echo $firstNumber * $secondNumber;
 break;

case "div":
 echo $firstNumber / $secondNumber;
 break;

case "mod":
    echo $firstNumber % $secondNumber;
}

?>

</body>
</html>