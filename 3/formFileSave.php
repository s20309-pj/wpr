<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Form Save</h1>

<form  method="post">
    <input type = "text" name = "first">
    <input type = "text" name = "second">
    <br><br>
    <input type = submit value = "submit" name = "submit">
</form>

<?php
if(isset($_POST['submit']))
{

    $data=$_POST['first']."\n";
    $data2=$_POST['second']."\n";
    $fp = fopen('hopsasa.txt', 'a') or die("Unable to open file");
    fwrite($fp, (string)$data);
    fwrite($fp, (string)$data2);
    fclose($fp);
}

?>
</body>
</html>