<!DOCTYPE html>
<html>
<body>
<?php
function createArray() {
    $length = rand(3, 7);
    $result = array();
    for ($i = 0; $i < $length; $i++) {
        $value = rand(10, 20);
        $result[$i] = $value;
    }
    return $result;
}
function mergeAndSortArrays($array1, $array2) {
    $mergedArray = array_merge($array1, $array2);
    $uniqueArray = array_unique($mergedArray);
    sort($uniqueArray);
    return $uniqueArray;
}

$array1 = createArray();
$array2 = createArray();
echo "<p>Перший масив:</p>";
print_r($array1);
echo "<p>Другий масив:</p>";
print_r($array2);
echo "<p>Масив після виконання усіх дій:</p>";
print_r(mergeAndSortArrays($array1, $array2));
?>

</body>
</html>

<?php
