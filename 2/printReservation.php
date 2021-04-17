<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $reserwationDate = date("d.m.Y");
        $numberOfPeople = $_POST["numberOfPeople"] ?? "";
        $firstName = $_POST["name"] ?? "";
        $lastName = $_POST["surname"] ?? "";
        $email=$_POST["email"] ?? "";
        $cardNumber=$_POST["cardNumber"] ?? "";
        $checkIn=$_POST["arrival"] ?? "";
        $checkOut=$_POST["leave"] ?? "";

        echo"<p>order date: $reserwationDate</p> 
        <br>";
        echo"<p>Number of people: $numberOfPeople </p>";

        if($numberOfPeople >= 1) {
         for($i = 1; $i < $numberOfPeople; $i++){

         $firstName = $_POST["name$i"] ?? "";
         echo"<p>First Name: $firstName</p>";

         $lastName = $_POST["surname$i"] ?? "";
         echo"<p>Last Name: $lastName</p>";
         }
        }
        echo"<p>Card number: $cardNumber";
        echo"<p>Email: $email";
        echo"<p>Arrival Date: $checkIn";
        echo"<p>Leave Date: $checkOut</p>";
    ?>
</body>
</html>