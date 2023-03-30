<?php

echo "<br>Cerca el teu amic tenint present que: <br><br>";

echo "<b>- És el més jove de tots els amics que en el seu nom contenen la inicial del teu nom o cognoms.</b>";

echo " <br> <br><b>- Un cop trobat mostra per pantalla el seu nom, la seva edat i on viu.</b> <br><br>";

echo "<b>- El programa que desenvolupis també ha de donar el resultat correcte si el contingut de l'array canvia.
</b><br><br>";

function buscaNombre($nom)
{
    $miNom = str_split(strtolower($nom));
    $arrIndex = [];
    $count = 0;
    $numRef = 0;
    $recountNam = 0;
    $maxAge = 9999;

    $friends = [    "Name"  =>  ["Peter", "Ben", "Mercè","Nicole","Clara","Hellen"],
                    "Age"   =>  [15, 34, 23,45,34,78],
                    "City"  =>  ["Ulm", "London", "Barcelona","Paris","Roma","Tallin"]];

/* Seleccion de nombres con mis iniciales*/
    echo "______________________ <br>";
    echo "|| Prova amb inicials $nom ||<br>";
    echo "¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯ <br>";

    foreach ($friends["Name"] as $key => $value) {
        for ($i = 0; $i < count($miNom); $i++) {
            if (str_contains(strtolower($value), $miNom[$i])) {
                $arrIndex[$count] = $recountNam;
                $count++;
            }
        }
        $recountNam++;
    }
    foreach ($arrIndex as $num) {
        if ($friends["Age"][$num] < $maxAge) {
            $maxAge = $friends["Age"][$num];
            $numRef = $num;
        }
    }

    echo "La persona mes jove amb les inicials ($nom) es: <br><br>";

    echo "-  " . $friends["Name"][$numRef] .
    " amb " . $friends["Age"][$numRef] .
    " anys i provinent de " . $friends["City"][$numRef] . ".";
    echo "<br><br>";
}

/* He probat amb DHSMN per veure millor resultats"*/

buscaNombre("DHS");

buscaNombre("MNA");
