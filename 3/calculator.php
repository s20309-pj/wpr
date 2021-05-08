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
<input type=submit value="calculate" name="calculate">
</form>

<?php

if(isset($_POST["calculate"])) {
    $firstNumber=$_POST["first"] ?? "";
    $secondNumber=$_POST["second"] ?? "";
    $calculate=$_POST["method"] ?? "";
    include("function.php");
    switch ($calculate) {
        case "add":
            echo addNumbers($firstNumber, $secondNumber);
            break;

        case "sub":
            echo subNumbers($firstNumber, $secondNumber);
            break;

        case "multi":
            echo multiNumbers($firstNumber, $secondNumber);
            break;

        case "div":
            echo divNumbers($firstNumber, $secondNumber);
            break;

        case "mod":
            echo modNumbers($firstNumber, $secondNumber);
    }
}
?>

</body>
</html>