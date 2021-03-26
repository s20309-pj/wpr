<h1>Rectangle Area</h1>
<form method="post">
    <input type="number" name="a" placeholder="give the first number">
    <input type="number" name="b" placeholder="give the second one">
    <input type="submit" value="calculate" name="bang">
</form>

<?php
if(isset($_POST["bang"])){
    $a = $_POST["a"];
    $b =  $_POST["b"];
    echo "<br><br>";
    $area = $a * $b;
    echo "Rectangle area is " . $area;
    }
?>

</body>
</html>
