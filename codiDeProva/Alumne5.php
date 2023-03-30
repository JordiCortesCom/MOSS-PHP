<!DOCTYPE html>
<html>
<pre>
<?php
/*
Busca a tu amigo, es el más joven que de todos los amigos que su nombre
contienen la inicial de tu nombre o apellido.
Una vez encontrado, muestra su nombre, edad y donde vive.
Si el contenido del Array cambia, el programa tiene que funcionar.

El ejericio tiene que ser una funcion, entrar por parametro inicial, return información nombre, edad y donde vive.
*/

function searchFriend($userName)
{
    $friends = [
    "Name"=>["Peter", "Ben", "Mercè","Nicole","Clara","Hellen"],
    "Age"=>[15, 34, 23,45,34,78],
    "City"=>["Ulm", "London", "Barcelona","Paris","Roma","Tallin"]
    ];
    $matchingNames = [];
    // Filtrem $friends["Name"] nom a nom per trobar aquells que contenguin la inicial del nom introduida per parametre 
    // Si la troba l'afegira a l'array $matchingNames. Ja tenim els noms que coincideixen;
    array_filter($friends["Name"], function($name) {
        if (str_contains(strtolower($name), strtolower($userName[0])) ) {
            array_push($matchingNames, $name);
        }
    });
    $matchingFriends = [];
    // Volia recorre l'array comprovant cada valor de $friends amb cada valor de $matchingNames per filtrar la informacio 
    // dels amics que coincideixen, el nom, la edat i la ciutat a l'array $matchingFriends.
    // Exemple: 
    //          Si introduia per parametre el nom "Roberto" l'array $matchingFariends hauria de tenir
    //                  [["Peter",15,"Ulm"],["Mercè,23,"Barcelona"],["Clara",34,"Roma"]]
    //  $i = fila   $j = columna
    for ($i=0; $i < count($friends); $i++) { 
        for ($j=0; $i < count($friends[$i]); $j++) {
            foreach ($matchingNames as $nameMatched) {
                if ($nameMatched === $friends[$i][$j]) {
                    array_push($matchingFriends, [$friends["Name"][$j],$friends["Age"][$j]],$friends["City"][$j]);
                }
            }
        }
    }
    print_r($matchingFriends);
}

searchFriend("Roberto");







/*
$friends = [ "Name" => ["Peter", "Ben", "Mercè", "Nicole", "Clara", "Hellen"],
        "Age" => ["15", "34", "23", "45", "34", "78"],
        "City" => ["Ulm", "London", "Barcelona", "Paris", "Roma", "Tallin"]];

foreach ($user as $key => $value){
    echo "$key |";
}
echo "<br>------------------<br>";
for ($i = 0; $i < 3; $i++) {
    foreach ($user as $key => $value){
        echo "$value[$i] | ";
    }
    echo "<br>";
}
*/

?>
</pre>
</html>