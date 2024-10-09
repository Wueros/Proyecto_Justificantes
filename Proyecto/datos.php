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
    $Nocont=$_GET["Nocont"]; //recupara el id del formulario
    $justi=0;
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
    echo "<table borde=0 name="."Tab_inf".">";
    echo "<tr>";
    echo "<th><label>No.control: </label><label>$Nocont</label><br></th>";
    echo "<th><label for="."nom".">Nombre: </label><label>$nom</label><br></th></tr>";
    echo "<tr>";
    echo "<th><label for="."ape".">Grupo: </label><label>$gru</label><br></th>";
    echo "<th><label for="."pue".">Semestre: </label><label>$sem</label><br></th>";
    echo "</tr>";
    $sqlcmd ="SELECT * FROM justificantes Where Nocontrol = $Nocont";
    $tabla = $com->query($sqlcmd);
    if($tabla->num_rows>0)
    {
        echo "<table border="."1"." name="."Tab_justi".">";
        echo "<tr><th>Folio</th><th>Situacion</th><th>Fech.Solicitud</th><th>Fech.Falta</th></tr>";
        while($reg=$tabla->fetch_assoc())
        {
            $id=$reg["Folio"];
            $sit=$reg["Situacion"];
            $soli=$reg["Fechasoli"];
            $de=$reg["Fechade"];
            $A=$reg["Fechaa"];
            echo "<tr>";
            echo "<th>$id</th> <th>$sit</th><th>$soli</th><th>$de A $A</th>";
            echo "</tr>";
            $justi=$justi+1;
        }
        echo "</table>";
    }
    if($justi>3)
    {
        echo"<h2><font color='red'>No puedes solicitar mas justificantes😔 hasta que venga tu tutor a orientacion educativa</font></h2>"; 
    }
    else
    {
    echo "<a href="."Soli_justi.php?Nocont=$Nocont name="."soli_justi".">Solicitad un nuevo justificante</a>";
    }
    ?>
</body>
</html>