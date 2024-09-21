<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="datos.css">
</head>
<body>
<?php
    $Nocont=$_POST["id"]; //recupara el id del formulario
    $squl1="SELECT Nombre, Grupo, Semestre FROM alu  Where   Nocontrol = $Nocont"; //comando para seleccionar los datos del id recuperado
    //conexion de la base de datos
    $noms="localhost";
    $nomu="root";
    $paw="";
    $basedatos="alumnos";
    $com=new MySQLi($noms,$nomu,$paw,$basedatos);
    $coma=$com->query($squl1); //ejecuta el comando
    $reg=$coma->fetch_assoc(); //Recupara los datos y los asigna a las siguientes variables
    $nom=$reg["Nombre"];
    $gru=$reg["Grupo"];
    $sem=$reg["Semestre"];
    //formulario para actulizar los datos y con se le asigna el valor predeterminado con los datos actuales
    echo "<table borde=0>";
    echo "<form action="."modi.php"." method="."get".">";
    echo "<tr>";
    echo "<th><label>No.control: </label><label>$Nocont</label><br></th>";
    echo "<th><label for="."nom".">Nombre: </label><label>$nom</label><br></th></tr>";
    echo "<tr>";
    echo "<th><label for="."ape".">Grupo: </label><label>$gru</label><br></th>";
    echo "<th><label for="."pue".">Semestre: </label><label>$sem</label><br></th>";
    echo "</form>";
    echo "</tr>";
    $sqlcmd ="SELECT * FROM justificantes Where Nocontrol = $Nocont";
    $tabla = $com->query($sqlcmd);
    if($tabla->num_rows>0)
    {
        echo "<table border="."1".">";
        echo "<tr><th>Folio</th><th>Situacion</th><th>Fecha</th></tr>";
        while($reg=$tabla->fetch_assoc())
        {
            $id=$reg["Folio"];
            $nom=$reg["Situacion"];
            $ape=$reg["Fecha"];
            echo "<tr>";
            echo "<th>$id</th> <th>$nom</th><th>$ape</th>";
            echo "</tr>";
            
        }
        echo "</table>";
    }
    echo "<a href="."Soli_justi.php?Nocont=$Nocont>Solicitad un nuevo justificante</a>";
    ?>
</body>
</html>