<!DOCTYPE html>
<html>
<body>



    <?php

function generatePassword($length = 8) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_+=';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[rand(0, strlen($chars) - 1)];
    }
    return $password;
}

echo "<b>Згенерований пароль: </b>". generatePassword();
    ?>
    <form action="index.php" method="post">
        <p>Введіть пароль : <input type="text" name="pass"></p>

        <input type="submit">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $pass = $_POST['pass'];
            function isStrongPassword($pass)
            {
                if (preg_match('/[A-Z]/', $pass) && preg_match('/[a-z]/', $pass) && preg_match('/[0-9]/', $pass) && preg_match('/[!@#$%^&*()-_+=]/', $pass) && strlen($pass) >= 8) {
                    return true;
                } else {
                    return false;
                }
            }


            if (isStrongPassword($pass)) {
                echo "<p><b>Пароль міцний</p>";
            } else {
                echo "<p><b>Пароль не міцний</p>";
            }
        }
    ?>
    </form>
</body>
</html>

