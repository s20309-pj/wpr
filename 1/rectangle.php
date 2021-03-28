<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Rectangle Area</h1>
<form method="post">
    <input type="number" name="a" placeholder="give the first number">
    <input type="number" name="b" placeholder="give the second one">
    <input type="submit" value="calculate" name="bang">
</form>

<?php
if(isset($_POST["bang"])){
    $a = $_POST["a"];
    $b =  $_POST["b"];
    echo "<br><br>";
    $area = $a * $b;
    echo "Rectangle area is " . $area;
    }
?>

</body>
</html>
