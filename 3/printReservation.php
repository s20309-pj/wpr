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
           $wholeData = array (
           $reservationDate = date("d.m.Y"),
           $numberOfPeople = $_POST["numberOfPeople"] ?? "",
           $firstName = $_POST["name"] ?? "",
           $lastName = $_POST["surname"] ?? "",
           $email = $_POST["email"] ?? "",
           $cardNumber = $_POST["cardNumber"] ?? "",
           $checkIn = $_POST["arrival"] ?? "",
           $checkOut = $_POST["leave"] ?? ""
           );

           echo "<p>order date: $reservationDate</p> <br>";
           echo "<p>Number of people: $numberOfPeople </p>";

           echo"<input name=\"numberOfPeople\" value=\"numberOfPeople\" hidden>";
           echo"<div class=\"name\">";
           for($i = 0 ; $i < $numberOfPeople; $i++){
                       //  if ($numberOfPeople >= 1) {
               for ($i = 1; $i <= $numberOfPeople; $i++) {

                   $firstName = $_POST["firstName$i"] ?? "";
                   echo "<p>First Name: $firstName</p>";

                   $lastName = $_POST["lastName$i"] ?? "";
                   echo "<p>Last Name: $lastName</p>";
               }
           }
           echo"</div>";


           echo "<p>Card number: $cardNumber";
           echo "<p>Email: $email";
           echo "<p>Arrival Date: $checkIn";
           echo "<p>Leave Date: $checkOut</p>";

           $fp = fopen('reservation.csv', 'a+') or die("Unable to open file");

           fputcsv($fp, $wholeData, ';');

           fclose($fp);

       }
    ?>
    <form method="post">
        <input type="submit" name="loadValues" value="Load">
    </form>
    <?php
    if(isset($_POST["loadValues"])) {
        $row = 1;
        if (($fp = fopen("reservation.csv", "r")) !== FALSE) {
            $colName = fgetcsv($fp, 1000, ";");
            while (($num = fgetcsv($fp, 1000, ";")) !== FALSE) {
                $col = count($colName);
                $row++;
                echo "<p>Order: $row</p>";
                for ($x=0; $x < $colName; $x++)
                {
                    echo $colName[$x] ?? "".": ".$num[$x] ?? "";
                }
            }

            fclose($fp);
        }
    }
    ?>
</body>
</html>