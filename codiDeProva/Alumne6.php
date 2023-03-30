<!DOCTYPE html>
<html>
<body>
<?php
$friends = ["Name"=>["Peter", "Ben", "Mercè","Nicole","Clara","Hellen"],
"Age"=>[15, 34, 23,45,34,78],
"City"=>["Ulm", "London", "Barcelona","Paris","Roma","Tallin"]];

#És el més jove de tots els amics que en el seu nom contenen la inicial del teu nom o cognoms.
$mi=min($friends ['Age']);
echo "el minim es " .$mi;
echo "<br>";

$title = "Peter Ben Mercè Nicole Clara Hellen";
$search = 'P';
if (false !== strpos($title, $search)){
    echo "Nom trobat";
}
?>
</body>
</html>