<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <h2 class="fred red red">Привет hi</h2>
    <H2 Class="Fred Red Red"> hello Hi </ h2>
        <H2 class="fred red red"> Hello, Hello </ h2>

            <form action="index.php" method="post">
                <label>x:</label>
                <input type="text" name="x">
                <label>y:</label>
                <input type="text" name="y">
                <input type="submit" value="total">
            </form>



</body>

</html>
<?php
$x = $_POST["x"];
$y = $_POST["y"];
$x = 1;
$y = 6;
$total = null;
//$total = abs($x);
$total = round($x);
// $total = floor($x);
// $total = ceil($x);
// $total = pow($x, $y);

// echo "$x<br>";
echo $total;
?>