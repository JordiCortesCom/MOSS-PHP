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

        $nomIntroduit = "Roger" ;

        function Buscador ($nomIntroduit){

            $friends = [
                "Nom"       =>  ["Peter", "Ben", "Merce","Nicole","Clara","Hellen"],
                "Edat"      =>  [15, 34, 23,45,34,78],
                "Ciutat"    =>  ["Ulm", "London", "Barcelona","Paris","Roma","Tallin"]
            ]; 

            $inicial = strtoupper(substr($nomIntroduit, -1));
            $minAge = 10000;
            $minAgeLocator = -33;

            // Fem que el programa es llegeixi tot l'array de edat per trobar la mes petita,i guardem la linea
            for ($i=0; $i < count($friends["Nom"]) ; $i++) { 
                $namelower = strtoupper($friends["Nom"][$i]);
                if (str_contains($namelower, $inicial) && $friends["Edat"][$i] < $minAge ) {
                    $minAge = $friends["Edat"][$i]; 
                    $minAgeLocator = $i;
                }
            }
            
            if ($minAgeLocator == -33){
                echo "No hi ha ningu amb la teva inicial";
            }
            else{
                echo "La persona mes jove es: <br>";
                foreach ($friends as $key => $value) {
                    echo "$key = $value[$minAgeLocator] ";
                }
                echo "<br>";
            }
        }

        Buscador($nomIntroduit);

        ?>
    </body>
</html>