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
    if(isset($_POST['submit'])) {

        $reservationDate = date("d.m.Y");
        $numberOfPeople = $_POST["numberOfPeople"] ?? "";
        $firstName = $_POST['name'] ?? "";
        $lastName = $_POST['surname'] ?? "";
        $email = $_POST['email'] ?? "";
        $cardNumber = $_POST["cardNumber"] ?? "";
        $checkIn = $_POST["arrival"] ?? "";
        $checkOut = $_POST["leave"] ?? "";

        echo "<p>order date: $reservationDate</p> 
        <br>";
        echo "<p>Number of people: $numberOfPeople </p>";

        echo "<input name=\"numberOfPeople\" value=\"numberOfPeople\" hidden>";
        echo "<div class=\"name\">";

        for ($i = 1; $i <= $numberOfPeople; $i++) {

            echo "<p>First Name: $firstName";

            echo "<p>Last Name: $lastName";
        }

        echo "</div>";
        echo "<p>Card number: $cardNumber";
        echo "<p>Email: $email";
        echo "<p>Arrival Date: $checkIn";
        echo "<p>Leave Date: $checkOut</p>";
    }
    ?>
</body>
</html>