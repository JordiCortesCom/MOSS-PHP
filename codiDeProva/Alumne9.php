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
    $friends = ["Name"=>["Peter", "Ben", "Mercè","Nicole","Clara","Hellen"],
                "Age"=>[15, 34, 23,45,34,78],
                "City"=>["Ulm", "London", "Barcelona","Paris","Roma","Tallin"]];


    $Meu_nom='Sergi';

    for ($i=0; $i<=5; $i++) {
        foreach ($friends as $col => $value) {
            $edat = $friends["Age"][$i];
            $nom = $friends["Name"][0];
            if ($nom == "Peter" && $edat < 20){
                echo "Peter es el teu amic amb edat " . $friends["Age"][$i];
            }else{
                echo "no correspon amb el nom de Sergi";
            }
        }
        echo "<br>";
    }
    ?>
</body>
</html>