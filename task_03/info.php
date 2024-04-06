<?php
session_start();
$name = $_SESSION['name'];
$email = $_SESSION['email'];
$password = $_SESSION['password'];
$gender = $_SESSION['gender'];
$city = $_SESSION['city'];
$games = $_SESSION['games'];
$about = $_SESSION['about'];
$photo = $_SESSION['photo']
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>info</title>
</head>
<body>
<p>Логін: <?php echo $name; ?></p>
<p>Email: <?php echo $email; ?></p>
<p>Пароль: <?php echo $password; ?></p>
<p>Стать: <?php echo $gender; ?></p>
<p>Місто: <?php echo $city; ?></p>
<p>Ваші улюблені гри: <?php echo implode(", ", $games); ?></p>
<p>Про себе: <?php echo $about; ?></p>
<p>Фотографія:</p>
<?php if ($photo): ?>
    <img src="uploads/<?php echo $photo; ?>" alt="Завантажене фото">
<?php endif; ?>

<p><a href="index.php">Повернутися на головну сторінку</a></p>
</body>
</html>