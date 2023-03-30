<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POU - Arrays, strings i loops - Trobar el teu amic</title>
</head>
<body>
</body>
<!-- Cerca el teu amic tenint present que:

És el més jove de tots els amics que en el seu nom contenen la inicial del teu nom o cognoms. -->
<?php
$friends =
["Name"  =>  ["Peter", "Ben", "Mercè","Nicole","Clara","Hellen"],
"Age" => [15, 34, 23,45,34,78],
"City"  =>  ["Ulm", "London", "Barcelona","Paris","Roma","Tallin"]
];

$edad = 200;
$encontrado = 0;

for ($i = 0; $i < count($friends["Name"]); $i++) {
    foreach ($friends as $key => $value) {
        if ($value[$i] < $edad) {
            if (str_contains($friends["Name"][$i], "M")) {
                $encontrado = $i;
                $edad = $value[$i];
            }
        }
    }
}
echo $friends["Name"][$encontrado] . " : " . $friends["Age"][$encontrado];

function funcio_amic($lletra)
{
    $friends =
    ["Name"  =>  ["Peter", "Ben", "Mercè","Nicole","Clara","Hellen"],
    "Age" => [15, 34, 23,45,34,78],
    "City"  =>  ["Ulm", "London", "Barcelona","Paris","Roma","Tallin"]
    ];
    $encontrado = 0;
    $edad = 200;
    for ($i = 0; $i < count($friends["Name"]); $i++) {
        foreach ($friends as $key => $value) {
            if ($value[$i] < $edad) {
                if (str_contains($friends["Name"][$i], $lletra)) {
                        $encontrado = $i;
                    $edad = $value[$i];
                }
            }
        }
    }
    echo "<br>";
    echo $friends["Name"][$encontrado] . " : " . $friends["Age"][$encontrado];
}

funcio_amic("M")

?>
</html>