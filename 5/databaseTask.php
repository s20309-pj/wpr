<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Database Connection</title>
</head>
<body>
<?php
define('SPACE', '</br>');
$servername = "localhost";
$username = "root";
$password = "password";
$db = "wpr";


$conn = new mysqli($servername, $username, $password, $db) or die("Connect failed: %s\n" . $conn->error);

if (!$db = mysqli_connect("localhost", "root", "password", "wpr","3306")) {
    die("Connection failed: " . $db->connect_error);
}
echo SPACE;
$query = 'select * from test';
if (!$result = mysqli_query($db, $query)) {
    echo "Error";
} else {
    echo "Connected Successfully";
}
echo SPACE;
if ($result = mysqli_query($db, $query)) {
    while ($rows = mysqli_fetch_row($result)) {
        foreach ($rows as $row) {
            echo $row;
            echo SPACE;
        }
    }
}


if ($result = mysqli_query($db, $query)) {
    $row_cnt = mysqli_num_rows($result);
    printf("There is %d of records\n", $row_cnt);
}

echo SPACE;

$result = mysqli_query($db, $query);
while ($r = mysqli_fetch_array($result)) {
    echo $r['id'] . SPACE;
}


echo SPACE;
$insert = 'insert into test (id) values (4)';
if (mysqli_query($db, $insert)) {
    echo "Record added";
} else {
    echo "ERROR";
}
echo SPACE;
$rowsNumber = mysqli_affected_rows($db);
echo "Number of rows: $rowsNumber"
?>
</body>
</head>
</html>
