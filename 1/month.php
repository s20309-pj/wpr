<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Months</h1>
<form method="post">
    <input type="number" name="month" value="0" placeholder="Enter number of month">
    <input type="submit" value="check" name="bang">
</form>

<?php
?>

<?php
if(isset($_POST["bang"])){
    $month=$_POST["month"];
    $day1 = "30";
    $day2 = "31";
    $february = "28";
        switch ($month) {
            case 2:
                echo $february;
                break;
            case 4:
            case 6:
            case 9: 
            case 11:
                echo $day1;
                break;       
            case 1:
            case 3:      
            case 5:
            case 7: 
            case 8:
            case 10:
            case 12:
                echo $day2;
                break;
            default:
                echo "ERROR";
                break;
        }
    }
?>

    </body>
    </html>