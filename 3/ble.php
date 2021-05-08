<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reservation</title>
    <style type="text/css">
 div.people {
    display: flex;
            justify-content: left;
            align-items: center;
            border-radius: 40px;
            padding: 0;
        }
        div label {
            display: block;
            margin: 10px 0;
        }
        </style>
</head>
<?php
    if(isset($_POST['submit'])){
        
        $numberOfPeople = $_POST["number"] ?? "";

        echo"<form method = \"post\" action = \"printReservation.php\">";
        echo"<input name=\"numberOfPeople\" value=\"$numberOfPeople\" hidden>";
        echo"<div class=\"people\">";

        for($i = 0; $i < $numberOfPeople; $i++){
            echo ('
            <div>
            <label for = "firstName"> Name </label>
            <input type = "text" name = "name$i">
            <br>
            <label for = "lastName"> Surname </label>
            <input type = "text" name="surname$i">
            <br><br>
            </div>
            ');
        }
        echo (' 
        </div>
        <label for = "cardNumber"> Credit Card Number </label>
        <br>
        <input type = "text" name = "cardNumber">
        <br>
        <br>
        <label for = "email"> email </label>
        <br>
        <input type = "email" name = "email">
        <br>
        <br>
        <label for = "arrival"> Check In </label>
        <br>
        <input type = "date" name = "arrival">
        <br>
        <br>
        <label for = "leave"> Check Out </label>
        <br>
        <input type = "date" name = "leave"> 
        <br>
        <input type = "submit" name = "submit" value="Submit">
        ');
    }
?>
</body>

</html>