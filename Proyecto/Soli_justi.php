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
    <form action="Agre_justi.php" name="Form_just" id="Form_just">
    <table border="1" name="Tab_jus">
        <thead><tr><th colspan="4">Justificantes</th></tr></thead>
        <tbody>
            <tr>
                <th>Alumno:<?php echo "$nom" ?></th> 
                <th>Grupo:<?php echo $gru ?></th> 
                <th>Semestre:<?php echo $sem ?></th> 
                <th>Fecha:<?php echo $fech_ho=date("Y-m-d "); ?></th>
                <th>No.Control:<?php echo "<input type="."number"." name="."id"." value="."$Nocont".">" ?></th>
            </tr>
            <tr>
                <th colspan="5">Situacion:</th>
            </tr>
            <tr>
                <th colspan="2" name="enf">Enfermedad</th>
                <th><input type="radio" name="sit" id="enf" value="Enfermedad"></th>
            </tr>
            <tr>
                <th colspan="2" name="per">Personal</th>
                <th><input type="radio" name="sit" id="per" value="Personal"></th>
            </tr>
            <tr>
                <th colspan="2" name="otro">Otro</th>
                <th><input type="radio" name="sit" id="otro" value="Otro"><input type="text" name="expli" id="expli" disabled="false"></th>
            </tr>
            <tr>
                <th colspan="2">Fecha de la falta</th>
                <th><input type="date" name="De" id="de"> a <input type="date" name="a" id="a"></th>
            </tr>
        </tbody>
    </table> 
    <input type="submit">
    </form>
    <p id="error" style="color: red;"></p>
    <script>
        var explic = document.getElementById('expli');

// evento para el input radio del "si"
document.getElementById('otro').addEventListener('click', function(e) {
  console.log('Vamos a habilitar el input text');
  expli.disabled = false;
});

// evento para el input radio del "no"
document.getElementById('per').addEventListener('click', function(e) {
  expli.disabled = true;
});
document.getElementById('enf').addEventListener('click', function(e) {
  expli.disabled = true;
});
document.getElementById('Form_just').addEventListener('submit', function(event)
{
    event.preventDefault();

    const Fechde= new Date(document.getElementById('de').value);
    const Fecha= new Date(document.getElementById('a').value);
    const error= document.getElementById('error');

    if(Fechde< Fecha)
{
    this.submit();
}
else if(Fechde>Fecha)
{
    error.textContent ="Las fechas estan mal colocadas";
}
else
{
    this.submit();
}
})
    </script>
   
</body>
</html>