<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Matrix</h1>

<form method="post">
<p>Bang!</p>
    <input type="number" name="a" placeholder="enter column number">
    <input type="number" name="b" placeholder="enter rows number">
    <input type="submit" value="show me" name="bang">
</form>

<?php

if(isset($_POST["bang"])){
 
    $columns =$_POST["a"];  
    $rows = $_POST["b"];

    if (!is_numeric($rows) || !is_numeric($columns)) {
        echo("Error");
        return;
    }

    $cyk = array(array());
    $toFill = 1;

    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $columns; $j++) {
            $cyk[$i][$j] = $toFill += 1;
        }
    }

for ($i = 0; $i <= $columns; $i++) {
	for ($j = 0; $j <= $rows; $j++) {
        echo $cyk[$i][$j]. " ";
	}
	echo '<br>';
}
}

?>

</body>
</html>