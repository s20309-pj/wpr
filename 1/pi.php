<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Square root</h1>
<form method="post">
    <input type="number" name="x" placeholder="enter the number">
    <input type="submit" value="calculate" name="bang">
</form>

<?php
if(isset($_POST["bang"])){
    $x = $_POST["x"];
    echo "<br><br>";
    echo number_format(sqrt($x), 2);
    }
?>

</body>
</html>