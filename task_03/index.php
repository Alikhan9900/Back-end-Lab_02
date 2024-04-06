<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $lang = isset($_GET['lang']) ? $_GET['lang'] : '';
    setcookie('lang', $lang, time() + (86400 * 180), "/");
}

$lang = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : '';
$langText = 'Default';
switch ($lang) {
    case 'ukr':
        $langText = 'Українська';
        break;
    case 'eng':
        $langText = 'English';
        break;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Форма</title>
    <style>
        div img{
            width: 50px;
            height: 30px;
        }
    </style>
</head>
<body>
<form enctype="multipart/form-data" method="post" action="index.php">
    <p> <label for="name">Логін:</label>
        <input type="text" name="name" placeholder="login" id="name" ></p>
    <p><label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="E-mail" ></p>
    <p><label for="password">Пароль:</label>
    <input type="password" name="password" id="password" placeholder="Password" ></p>
    <p><label for="password2">Пароль (ще раз):</label>
    <input type="password" name="password2" id="password2" placeholder="Repeat password"></p>

    <label for="gender">Стать:</label>
    <input type="radio" name="gender" id="gender_male" value="male" >
    <label for="gender_male">Чоловік</label>
    <input type="radio" name="gender" id="gender_female" value="female">
    <label for="gender_female">Жінка</label>
<br>
    <p><label for="city">Місто:</label>
        <select name="city" id="city">
            <option value="">-- Виберіть місто --</option>
            <option value="Zhytomyr" >Житомир</option>
            <option value="Kyiv" >Київ</option>
            <option value="Lviv" >Львів</option
        <option value="Odesa" >Одеса</option>
        <option value="Dnipro" >Дніпро</option>
        </select></p>

<p>   <label for="games">Улюблені ігри:</label>
    <input type="checkbox" name="games[]" id="games_football" value="football" >
    <label for="games_football">Футбол</label>
    <input type="checkbox" name="games[]" id="games_basketball" value="basketball" >
    <label for="games_basketball">Баскетбол</label>
    <input type="checkbox" name="games[]" id="games_volleyball" value="volleyball" >
    <label for="games_volleyball">Волейбол</label>
</p>
    <p><label for="about">Про себе:</label>
    <textarea name="about" id="about"></textarea>
    </p>


    <p><input type="file" name="photo"></p>
    <p><input type="submit" value="Зареєструватися"></p>
</form>
<div>
<a href="index.php?lang=ukr"><img src="ukr.png" alt="Українська"></a>
<a href="index.php?lang=eng"><img src="eng.png" alt="English"></a>
<p>Вибрана мова: <?php echo $langText; ?></p>
</div>

</body>
</html>
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $games = $_POST['games'];
    $about = $_POST['about'];

    $_SESSION['email'] = $email;
    $_SESSION['name'] = $name;
    $_SESSION['password'] = $password;
    $_SESSION['gender'] = $gender;
    $_SESSION['city'] = $city;
    $_SESSION['games'] = $games;
    $_SESSION['about'] = $about;
    $_SESSION['photo'] = $_FILES['photo']['name'];
    move_uploaded_file($_FILES['photo']['tmp_name'], './uploads/' . $_FILES['photo']['name']);
    header('Location: info.php');
    exit;
}
?>


