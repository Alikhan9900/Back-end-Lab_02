
<?php
require "Functin/funk.php";
$x = $_POST['x'];
$y = $_POST['y'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Завдання з PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<table>
    <tr>
        <th>x<sup>y</sup></th>
        <th>x!</th>
        <th>my_tg(x)</th>
        <th>sin(x)</th>
        <th>cos(x)</th>
        <th>tg(x)</th>
    </tr>
    <tr>
        <td><?php echo poww($x,$y) ?></td>
        <td><?php echo factorial($x) ?></td>
        <td><?php echo my_tg($x) ?></td>
        <td><?php echo sinus($x) ?></td>
        <td><?php echo cosinus($x) ?></td>
        <td><?php echo tg($x) ?></td>
    </tr>
</table>

</body>
</html>