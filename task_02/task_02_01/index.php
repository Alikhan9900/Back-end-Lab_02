<!DOCTYPE html>
<html>
<body>
<form method="post" action="index.php">
<p> Введіть числа масиву (через пробіл): <input type="text" name="text"></p>
<input type="submit">
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $arraycount = $_POST['text'];
        function findDuplicates($array)
        {
            $duplicates = array();
            foreach ($array as $value) {
                if (array_count_values($array)[$value] > 1) {
                    $duplicates[] = $value;
                }
            }
            return $duplicates;
        }
        $array = explode(" ", $arraycount);
        echo "<p>Числа які повторюються: </p>";
        print_r(findDuplicates($array));
    }

?>
</form>
</body>
</html>

