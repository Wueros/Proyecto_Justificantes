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
    ?>
    <form action="">
    <table border="1">
        <thead><tr><th colspan="4">Justificantes</th></tr></thead>
        <tbody>
            <tr>
                <th>Alumno:<?php echo "$nom" ?></th> 
                <th>Grupo:<?php echo $gru ?></th> 
                <th>Semestre:<?php echo $sem ?></th> 
                <th>No.Control:<?php echo $Nocont ?></th>
            </tr>
            <tr>
                <th colspan="4">Situacion:</th>
            </tr>
            <tr>
                <th colspan="2" name="enf">Enfermedad</th>
                <th><input type="radio" name="sit" id="enf"></th>
            </tr>
            <tr>
                <th colspan="2" name="per">Personal</th>
                <th><input type="radio" name="sit" id="per"></th>
            </tr>
            <tr>
                <th colspan="2" name="otro">Otro</th>
                <th><input type="radio" name="sit" id="otro"><input type="text" name="expli" id="expli" disabled="false"></th>
            </tr>
        </tbody>
    </table>
    </form>
    <script>
        var explic = document.getElementById('expli');

// evento para el input radio del "si"
document.getElementById('otro').addEventListener('click', function(e) {
  console.log('Vamos a habilitar el input text');
  expli.disabled = false;
});

// evento para el input radio del "no"
document.getElementById('per').addEventListener('click', function(e) {
  console.log('Vamos a deshabilitar el input text');
  expli.disabled = true;
});
document.getElementById('enf').addEventListener('click', function(e) {
  console.log('Vamos a deshabilitar el input text');
  expli.disabled = true;
});
    </script>
</body>
</html>