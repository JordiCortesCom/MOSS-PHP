<!DOCTYPE html>
<html>
    <body>
        <?php

        //TROBAR AL MEU AMIC

            $friends = ["Name"=>["Peter", "Ben", "Mercè","Nicole","Clara","Hellen"],
                        "Age"=>[15, 34, 23, 45, 34, 78],
                        "City"=>["Ulm", "London", "Barcelona","Paris","Roma","Tallin"]];

            $mes_jove_actual=150;
            $found=0;

            $iteracions=count($friends["Name"]);

            foreach ($friends as $key=>$value){
                echo " [ " . $key . " ] ";
                }
            echo "<br>";
            

            //Mostrem la taula de contingut
            for ($j=0; $j < $iteracions; $j++){
                foreach ($friends as $col=>$value){
                echo " | " . $friends[$col][$j] . " | ";
                }
                echo "<br>";
            }
            echo "<br><br>";

            //Iterem sobre la array multidimensional per trobar elements dins les arrays que continguin els caràcters especificats
            for ($i=0; $i < $iteracions; $i++) { 
                foreach ($friends as $key => $value) {
                    if ( str_contains( $friends["Name"][$i], "O") ||  str_contains( $friends["Name"][$i], "o") ) {
                        if ( $mes_jove_actual > $value[$i] ) {
                          $mes_jove_actual=$value[$i];
                          $found=$i;
                        }      
                    }
            }
            }

            echo "El teu amic/amiga és " . $friends["Name"][$found] . ", té " . $friends["Age"][$found] . " i viu a " . $friends["City"][$found] . ".";
            


            ?>
    </body>
</html>