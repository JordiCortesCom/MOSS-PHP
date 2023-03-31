<?php
include("moss.php");
$userid = "407756086"; // Enter your MOSS userid

$moss = new MOSS($userid);

# Elegir llenguatge entre: C, C++, Java, C#, Python, Visual Basic, Javascript, 
# FORTRAN, ML, Haskell, Lisp, Scheme, Pascal, Modula2, Ada, Perl, TCL, Matlab, VHDL, 
# Verilog, Spice, MIPS assembly, a8086 assembly, a8086 assembly, MIPS assembly, HCL2. 
$moss->setLanguage('javascript'); 

# Especificar ruta
$moss->addByWildcard('./codiDeProva/*.php');

# Conté directoris per alumnes?
$moss->setDirectoryMode(false);

# Seleccionar projecte base
# $moss->addBaseFile('Example.java');

# Incloure comentaris a la prova
$moss->setCommentString("This is a test");


#print_r($moss->send());
header("Location: " . $moss->send());
?>