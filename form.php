<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<!-- Crea un formulari html per elegir entre aquests llenguatges: C, C++, Java, C#, Python, Javascript. Per defecte serà Javascript.
També ha de demanar una ruta-->

<form action="server.php" method="post">
    <select name="llenguatge">
        <option value="java">Javascript</option>
        <option value="csharp">C#</option>
        <option value="python">Python</option>
        <option value="javascript">Java</option>
    </select>
    <br>
    <input type="file" name="ruta" id="ruta" webkitdirectory mozdirectory directory>
    <br>
    <input type="text" name="ruta" placeholder="Ruta">
    <br>
    <input type="checkbox" name="directori" >Conté directoris per alumnes?
    <br>
    <input type="text" name="base" >Selecciona si té projecte base
    <br>
    <input type="text" name="comentari" >Inclou comentaris
    <br>

    <input type="submit" value="Enviar">
</form>

