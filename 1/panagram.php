<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Panagram</h1>

<form method="post">
<p>Enter the sentence</p>
    <input type="text" name="sentence" value="type your sentense" placeholder="enter the sentense">
    <input type="submit" value="check" name="bang">
</form>

<?php

if(isset($_POST["bang"])){
    $sentence = strtolower($_POST["sentence"]) ?? "";
    $alphabet= str_split("abcdefghijklmnopqrstuvwxyz") ?? "";
    echo "<br>";
   $isPanagram=true;
   foreach($alphabet as $char){
        if(strpos(strtolower($sentence), $char) === false){
            $isPanagram = false;
        }
    }

    if($isPanagram){
      echo "true";
    } else {
        echo "false";
    }
}
?>

</body>
</html>
