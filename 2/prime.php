<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
</head>
<body>
<h1>Prime Numbers</h1>
<form action="prime.php" method="post">
<p>Enter the  number:</p>
        <input type="number" name="number" placeholder="enter the number">
        <input type="submit" value="check" name="bang">
</form>

<?php
if (isset($_POST["bang"])) {
    $number = (int)$_POST["number"];
    $sqrtNumber = (int)sqrt($number);

         isPrime($number, $sqrtNumber);

}

function isPrime($number, $sqrtNumber) {
    $loopCount = 0;
    for ($i = 2; $i <= $sqrtNumber; $i++) {
        $loopCount++;

        if ($number % $i == 0) {
            break;
        }
    }
    if( $sqrtNumber == $i-1 ) {
         echo "Win! $sqrtNumber is a prime number.";
         echo "Loop count: $loopCount";
    } else {
        echo "Loser! $sqrtNumber isn't a prime number.";
         echo "Loop cout: $loopCount";
    }
}
?>
</body>
</html>