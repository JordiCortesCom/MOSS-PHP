<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php

$friends = ["Name"=>["Peter", "Ben", "Mercè","Nicole","Clara","Hellen"],
            "Age"=>[15, 34, 23, 45, 34, 78],
            "City"=>["Ulm", "London", "Barcelona","Paris","Roma","Tallin"]];



for ($i = 0; $i < 6; $i++) {
    foreach ($friends["Name"] as $key => $value) {
        $buscaLletra = str_contains("C", $value[$i]);
        echo $buscaLletra;

        if ($value[$i] = $buscaLletra){
            $edadMinima = min($friends["Age"]);
            $nom = $friends["Name"];
            $ciutat = $friends["City"];
            echo $nom . $edadMinima . $ciutat;
        }
    } 
    echo "<br>";
}


?>
</body>
</html>