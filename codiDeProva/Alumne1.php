<!doctype html>
<html>
    <?php
echo 'dins0';
    $friends = ["Name" => ["Peter", "Ben", "Mercè","Nicole","Clara","Hellen"],
    "Age" => [15, 34, 23,45,34,78],
    "City" => ["Ulm", "London", "Barcelona","Paris","Roma","Tallin"]];

    /*Cerca el teu amic tenint present que:

    És el més jove de tots els amics que en el seu nom contenen la inicial del teu nom o cognoms.
    Un cop trobat mostra per pantalla el seu nom, la seva edat i on viu.

    El programa que desenvolupis també ha de donar el resultat correcte si el contingut de l'array canvia.
    */
    /*
    foreach ($friends as $key => $value) {
        echo $key;
    }*/

    $edat = 9999999;
    $pos = 0;
    for ($i = 0; $i < count($friends["Name"]); $i++) {
        foreach ($friends as $key => $value) {
            if ($value[$i] < $edat) {
                if (str_contains(strtolower($friends["Name"][$i]), strtolower("P"))) {
                    $pos = $i;
                    $edat = $value[$i];
                }
            }
        }
    }
    echo $friends["Name"][$pos],$friends["Age"][$pos],$friends["City"][$pos];

    // trobar amic amb funcio:

    function fnFriends($friends, $lletra)
    {
        $edat = 9999999;
        $pos = 0;
        for ($i = 0; $i < count($friends["Name"]); $i++) {
            foreach ($friends as $key => $value) {
                if ($value[$i] < $edat) {
                    if (str_contains(strtolower($friends["Name"][$i]), strtolower($lletra))) {
                        $pos = $i;
                        $edat = $value[$i];
                    }
                }
            }
        }
        echo $friends["Name"][$pos],$friends["Age"][$pos],$friends["City"][$pos];
    }
    fnFriends($friends, "P")

    ?>
</html>