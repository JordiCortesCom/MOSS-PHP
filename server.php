<?php
include("moss.php");

$userid = "407756086"; // Enter your MOSS userid

$moss = new MOSS($userid);


# Load $moss->setLanguage method with the value of the selected option
$moss->setLanguage($_POST['llenguatge']);


# Load addByWildcard method with the value of the input text
$moss->addByWildcard($_POST['ruta']);

# Load setDirectoryMode method with the value of the checkbox
if (isset($_POST['directori'])) {
    if ($_POST['directori'] == 'on') {
        $moss->setDirectoryMode(true);
    } else {
        $moss->setDirectoryMode(false);
    }
}

# Seleccionar projecte base
if (isset($_POST['base'])) {
    if ($_POST['base'] != '') {
        $moss->addBaseFile($_POST['base']);
    }
}

# Incloure comentaris a la prova
$moss->setCommentString($_POST['comentari']);

#print_r($moss->send());
header("Location: " . $moss->send());


//$output = shell_exec('/usr/local/bin/python3 prova.py');
//echo "<pre>$output</pre>";


?>