<!DOCTYPE html>
<html>
<body>
    <?php
        /* Exercici Arrays classe */
        echo "<br><br><br>";
        $friends = [
            "Name"=>["Peter", "Ben", "Mercè","Nicole","Clara",   "Hellen", "Marti"],
            "Age"=>[15, 34, 23,45,34,78, 19],
            "City"=>["Ulm", "London", "Barcelona","Paris","Roma","Tallin", "Barcelona"]
        ];
        $edat = 100;
        $trobat = 0;
        for ($i = 0; $i < count($friends["Name"]); $i++) {
            foreach ($friends as $key => $value) {
                if ($value[$i] < $edat) {
                    //substr($friends["Name"][$i], 0, 1) == "M"
                    if (str_contains($friends["Name"][$i], "M")) {
                        $trobat = $i;
                        $edat = $value[$i];
                    }
                }
            }
        }
        echo $friends["Name"][$trobat] . " : " . $friends["Age"][$trobat];
    ?>
</body>
</html>