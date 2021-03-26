<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Sorting Numbers</h1>
<form method="post">
    <input type="number" name="firstNumber" placeholder="enter the  number">
    <input type="number" name="secondNumber" placeholder="enter the  number">
    <input type="number" name="thirdNumber" placeholder="enter the  number">
    <input type="submit" value="check" name="bang">
</form>

<?php
if(isset($_POST["bang"])){
    $arrayNumber[0] = $_POST["firstNumber"];
    $arrayNumber[1] = $_POST["secondNumber"];
    $arrayNumber[2] = $_POST["thirdNumber"];

    for ($i = 0; $i < count($arrayNumber); $i++) {
        for ($j = 0; $j < count($arrayNumber) - 1; $j++) {
            if ($arrayNumber[$j] > $arrayNumber[$j + 1]) {
                $temporary = $arrayNumber[$j + 1];
                $arrayNumber[$j + 1] = $arrayNumber[$j];
                $arrayNumber[$j] = $temporary;
            }
        }
    }
    for($i=0; $i<count($arrayNumber); $i++){
        echo "$arrayNumber[$i]  ";
    } 
    echo "<br>"; 
    for ($i = 0; $i < count($arrayNumber); $i++) {
        for ($j = 0; $j < count($arrayNumber) - 1; $j++) {
            if ($arrayNumber[$j] < $arrayNumber[$j + 1]) {
                $temporary = $arrayNumber[$j + 1];
                $arrayNumber[$j + 1] = $arrayNumber[$j];
                $arrayNumber[$j] = $temporary;
            }
        }
    }

    for($i=0; $i<count($arrayNumber); $i++){
        echo "$arrayNumber[$i]  ";
    } 
}
?>

</body>
</html>