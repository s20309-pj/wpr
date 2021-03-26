<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Stars</h1>

<form method="post">
<p>enter stars number</p>
    <input type="number" name="stars" placeholder="enter the number">
    <input type="submit" value="draw" name="bang">
</form>

<?php

if(isset($_POST["bang"])){

  $starNumber = $_POST["stars"];

  for($i = 0; $i < $starNumber; $i++){
    

    for($j = 0; $j < $i + 1; $j++){
        echo "*";
    }
    echo "<br>"; 
  }

  for($i = 0; $i < $starNumber; $i++){

    for($j = $starNumber - $i; $j > 0; $j--){
        echo "*";
    }
    echo "<br>";
  }
  for ($i = 0; $i < $starNumber; $i++) {
    for($j = 0; $j < $starNumber; $j++){
        if($j < $i) echo '&nbsp;';
        else echo '*';
    }
    echo '<br>';
  }
  for ($i = 0; $i < $starNumber;) {
    $i++;
    for($j = $starNumber; $j > 0; $j--){
        if($j > $i) echo '&nbsp;';
        else echo '*';
    }
    echo '<br>';
}
}

?>

</body>
</html>