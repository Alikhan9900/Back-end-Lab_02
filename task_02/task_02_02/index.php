<!DOCTYPE html>
<html>
<body>

    <?php


        function generateAnimalName($elements)
        {
            $animalTypes = array("Шарик", "Кеша", "Ричард", "Дина");
            $name = '';
            for ($i = 0; $i < $elements; $i++) {

                $name .= "($i)" . " " .  $animalTypes[rand(0, count($animalTypes) - 1)] . "<br>";

            }
            return $name;
        }

        echo generateAnimalName(5) ;


    ?>

</body>
</html>


