<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hotel Reservation</title>
</head>
<body>
    <form action="ble.php" method="post">
        <div>
            <label for="numberOfPeople">How many people</label>
            <select id="numberOfPeople" name="numberOfPeople">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>