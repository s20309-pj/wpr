<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p><strong>What is your political option?</strong></p>

<button onClick="window.location.reload();">Refresh the page to see actual situation</button>

</body>
</html>

<?php

if (!isset($_POST['giveVote']) && !isset($_COOKIE['gather'])) {
    $DisplayForm = true;
    ?>
    <form action="" method="POST">
        <div>
            <input type="radio" id="demo" name="vote" value="0">
            <label for="demo">Democratic Party</label>
        </div>
        <div>
            <input type="radio" id="rep" name="vote" value="1">
            <label for="rep">Republicans</label>
        </div>
        <div>
            <input type="radio" id="commies" name="vote" value="2">
            <label for="commies">Communist Party of the USA</label>
        </div>
        <div>
            <input type="radio" id="nra" name="vote" value="3">
            <label for="nra">National Rifle Association</label>
        </div>
        <br>
        <input type="submit" name="giveVote" value="giveVote">
    </form>
    <?php
}
define('FILE', 'results.txt');
function myVotes($count)
{
    switch ($count) {
        case 0:
            echo "Democratic Party";
            break;
        case 1:
            echo "Republicans";
            break;
        case 2:
            echo "Communist Party of the US";
            break;
        case 3:
            echo "National Rifle Association";
            break;
    }
}

function showResults($count)
{
    $Array = array();
    if (!$fd = fopen(FILE, 'r')) {
        echo "Can't open file";
    } else {
        $Array = explode(',', fgets($fd));
        array_pop($Array);
        fclose($fd);
        echo "<p>Votes summary: " . ($Array[0] + $Array[1] + $Array[2] + $Array[3] ?? "") . "</p>";
        echo "Democratic Party: " . $Array[0] . "<br>";
        echo "Republicans: " . $Array[1] . "<br>";
        echo "Communist Party of the USA: " . $Array[2] . "<br>";
        echo "National Rifle Association: " . $Array[3] . "<br><br>";
        echo "And this is how you voted: " . myVotes($count) . "<br><br>";
    }
}

if (isset($_POST['vote']) && !isset($_COOKIE['gather'])) {
    setcookie("gather", $_POST['vote'], time() + 10);

    $Array = array();
    $fd = fopen(FILE, 'r');
    $Array = explode(',', fgets($fd));
    array_pop($Array);
    fclose($fd);
    $Array[$_POST['vote'] ?? ""] = $Array[$_POST['vote']] + 1 ?? "";
    file_put_contents(FILE, implode(',', $Array) . ',');
    showResults($_POST['vote']);
}
if (isset($_COOKIE['gather'])) {
    $DisplayForm = false;
    showResults($_COOKIE['gather']);

}
?>
