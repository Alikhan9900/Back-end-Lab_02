<!DOCTYPE html>
<html>
<body>

<form action="index.php" method="post">
   <p> Назви міст: <input type="text" name="text"></p>
    <input type="submit">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $towns = $_POST['text'];
        $townsArray = explode(" ", $towns);
        sort($townsArray);
        $sortedTowns = implode(" ", $townsArray);
        echo "<p>Відсортовані міста:$sortedTowns</p>";
   }
    ?>
</form>

</body>
</html>

