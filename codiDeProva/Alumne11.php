<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $friends = [
        "Name"  => ["Peter", "Ben", "Mercè", "Nicole", "Clara", "Hellen"],
        "Age"   => [15, 34, 23, 45, 34, 78],
        "City"  => ["Ulm", "London", "Barcelona", "Paris", "Roma", "Tallin"]
    ];

    $edad = 1000;
    $nom = "";
    $city = "";
    for ($i = 0; $i < 6; $i++) {
        if ($friends["Age"][$i] < $edad) {
            $edad = $friends["Age"][$i];
            $nom = $friends["Name"][$i];
            $city = $friends["City"][$i];
        }
    }
    echo "El amic mes jove es diu $nom i viu a $city. Te $edad anys <br>";

    $edad = 1000;
    $nom = "";
    $city = "";

    for ($i = 0; $i < 6; $i++) {
        if (($friends["Age"][$i] < $edad) && (str_contains($friends["Name"][$i], "M"))) {
            $edad = $friends["Age"][$i];
            $nom = $friends["Name"][$i];
            $city = $friends["City"][$i];
        }
    }
    echo "El amic mes jove amb la inicial del meu nom es diu $nom i viu a $city. Te $edad anys";
    ?>

</body>

</html>