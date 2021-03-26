
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Stringi!</h1>

<form method="post">
    <input type="text" name="strings" placeholder="Enter two strings separated by a space">
    <input type="submit" value="change" name="bang">
</form>

<?php
if(isset($_POST["bang"])){
    $strings = $_POST["strings"];
    $array = explode(" ", $strings);
    echo "<br>";
    echo "%$array[1] $array[0]%\$#";
    }
?>

</body>
</html>

