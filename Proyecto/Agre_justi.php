<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $Nocont=$_GET["id"];
    $Situacion=$_GET["sit"];
    $Fechasoli=date("Y-m-d");
    $Fechade=$_GET["De"];
    $Fechaa=$_GET["a"];
    $squlcmd="INSERT INTO justificantes(Nocontrol,Situacion,Fechasoli,Fechade,Fechaa)VALUES($Nocont,'$Situacion','$Fechasoli','$Fechade','$Fechaa')";
    $noms="localhost";
    $nomu="root";
    $paw="";
    $basedatos="alumnos";
    $com=new MySQLi($noms,$nomu,$paw,$basedatos);
    if($com->query($squlcmd)==TRUE)
    {
        header("Location: datos.php?Nocont=$Nocont");
        die();
    }
    ?>
</body>
</html>