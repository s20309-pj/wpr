
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Valid Triangle</h1>

<form method="post">
    <input type="number" name="a" placeholder="Side A">
    <input type="number" name="b" placeholder="Side B">
    <input type="number" name="c" placeholder="Side C">
    <input type="submit" value="check" name="bang">
</form>


<?php
if(isset($_POST["bang"])){
    $a = $_POST["a"] ?? "";
    $b = $_POST["b"] ?? "";
    $c = $_POST["c"] ?? "";
function checkValidity($a, $b, $c)
{
    if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
        return true;
    } else {
        return false;
    }
}
    if (checkValidity($a, $b, $c)){
        echo "Valid, you can build a trangle";
     } else {
        echo "Invalid, you can't build a triangle";
     }
}

?>

</body>
</html>