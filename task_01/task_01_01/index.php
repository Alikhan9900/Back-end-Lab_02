<!DOCTYPE html>
<html>
<body>

<form action="index.php" method="post">
   <p> Текст: <input type="text" name="text"></p>
    <p>Знайти: <input type="text" name="find"></p>
    <p>Замінити: <input type="text" name="replace"></p>
    <input type="submit">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $text = $_POST["text"];
    $find = $_POST["find"];
    $replace = $_POST["replace"];

    $result = str_replace($find, $replace, $text);

    echo "<p>Результат: <b>$result</b></p>";}
    ?>
</form>

</body>
</html>

