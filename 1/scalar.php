<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Scalar</h1>

<form method="post">
<p>type numbers separated by a space</p>
    <input type="text" name="a" placeholder="type numbers here">
    <input type="text" name="b" placeholder="type numbers here">
    <input type="submit" value="calculate" name="bang">
</form>

<?php

if(isset($_POST["bang"])){
    $a = explode(" ", $_POST["a"]) ?? "";
    $b = explode(" ", $_POST["b"]) ?? "";
    $calculate = 0;
    
    if(count($a) == count($b)) {
      for ($i = 0; $i < sizeof($a); $i++) {
        $calculate += (int)$a[$i] * (int)$b[$i];
    } 
    echo $calculate;
    
} else {
    echo "ERROR";
}}
?>

</body>
</html>