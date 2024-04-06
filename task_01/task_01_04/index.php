<!DOCTYPE html>
<html>
<body>

<form action="index.php" method="post">
   <p> Перша дата: <input type="text" name="f_date"></p>
    <p>Друга дата: <input type="text" name="s_date"></p>

    <input type="submit">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $date1 = $_POST['f_date'];
    $date2 = $_POST['s_date'];

    $diff = strtotime($date2) - strtotime($date1);
    $days = floor($diff / (60 * 60 * 24));

    echo "<p>Кількість днів між датами: <b>$days</b></p>";
    }
    ?>
</form>

</body>
</html>

