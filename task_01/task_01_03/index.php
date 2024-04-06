<!DOCTYPE html>
<html>
<body>

    <?php
    $filePath = "D:\\WebServers\\home\\testsite\\www\\myfile.txt";
    echo "<b>Шлях до файлу:</b> $filePath <br>";
    $fileName = basename($filePath);
    $fileNameWithoutExtension = pathinfo($fileName, PATHINFO_FILENAME);
    echo "<b>Назва файлу:</b> $fileNameWithoutExtension";

    ?>

</body>
</html>