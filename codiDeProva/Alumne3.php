<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document pau font</title>
</head>
<body>
</body>
<!-- part1 -->
<?php
$amics =
["Name"  =>  ["Peter", "Ben", "Mercè","Nicole","Clara","Hellen"],
"Age" => [15, 34, 23,45,34,78],
"City"  =>  ["Ulm", "London", "Barcelona","Paris","Roma","Tallin"]
];

$edat = 127;
$trobat = 0;

for ($i = 0; $i < count($amics["Name"]); $i++) {
    foreach ($amics as $key => $value) {
        if ($value[$i] < $edat) {
            if (str_contains($amics["Name"][$i], "P")) {
                $trobat = $i;
                $edat = $value[$i];
            }
        }
    }
}
echo $amics["Name"][$trobat] . " : " . $amics["Age"][$trobat];

function funcion_amics($lletra)
{
    $amics =
    ["Name"  =>  ["Peter", "Ben", "Mercè","Nicole","Clara","Hellen"],
    "Age" => [15, 34, 23,45,34,78],
    "City"  =>  ["Ulm", "London", "Barcelona","Paris","Roma","Tallin"]
    ];
    $trobat = 0;
    $edat = 200;
    for ($i = 0; $i < count($amics["Name"]); $i++) {
        foreach ($amics as $key => $value) {
            if ($value[$i] < $edat) {
                if (str_contains($amics["Name"][$i], $lletra)) {
                        $trobat = $i;
                    $edat = $value[$i];
                }
            }
        }
    }
    echo "<br>";
    echo $amics["Name"][$trobat] . " : " . $amics["Age"][$trobat];
}

funcion_amics("P")

?>
</html>