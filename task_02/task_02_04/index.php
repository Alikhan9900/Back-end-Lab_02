<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
function createUsersArray() {
    $names = array('John', 'Jane', 'Jack', 'Jill', 'James', 'Janet', 'Jacob', 'Jenny', 'Jason', 'Jessica');
    $users = array();
    foreach ($names as $name) {
        $age = rand(10, 40);
        $users[$name] = $age;
    }
    return $users;
}

function sortUsersArray($users, $sortBy = 'age') {
    if ($sortBy == 'age') {
        asort($users);
    } elseif ($sortBy == 'name') {
        ksort($users);
    }
    return $users;
}

$users = createUsersArray();
echo "<h2>Створений масив:</h2>";
echo "<pre>";
print_r($users);
echo "</pre>";

echo "<h2>Сортування за віком:</h2>";
$sortedByAge = sortUsersArray($users, 'age');
echo "<pre>";
print_r($sortedByAge);
echo "</pre>";

echo "<h2>Сортування за іменем:</h2>";
$sortedByName = sortUsersArray($users, 'name');
echo "<pre>";
print_r($sortedByName);
echo "</pre>";
?>

</body>
</html>
