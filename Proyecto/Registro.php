<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <?php
    $noms="localhost";
    $nomu="root";
    $paw="";
    $basedatos="alumnos";
    $meses=["1"=> 0,"2"=> 0,"3"=> 0,"4"=> 0,"5"=> 0,"6"=> 0,"7"=> 0,"8"=> 0,"9"=> 0,"10"=> 0,"11"=> 0,"12"=> 0];
    $com=new MySQLi($noms,$nomu,$paw,$basedatos);
    $sqlcmd ="SELECT * FROM justificantes";
    $registro = $com->query($sqlcmd);
    if($registro->num_rows>0)
    {
        while($reg=$registro->fetch_assoc())
        {
            $soli=$reg["Fechasoli"];
            $parts=date_parse($soli);
            $mes=$parts['month'];
            $meses["$mes"] += 1;
        }
        print_r($meses);
    }
    ?>
    <canvas id="Grafica" width="400" height="300"></canvas>
</body>
<script>
    let Grafic=document.getElementById("Grafica").getContext("2d");
    var Meses=<?php echo json_encode($meses); ?>;
    var char = new Chart(Grafic,{
        type:"line",
        data:{
            labels:["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiempre","Octubre","Noviembre","Diciembre"],
            datasets:[
                {
                    label:"Grafica",
                    backgroundColor:"rgb(0,0,0)",
                    borderColor:"rgb(0,255,0)",
                    data:[Meses["1"],Meses["2"],Meses["3"],Meses["4"],Meses["5"],Meses["6"],Meses["7"],Meses["8"],Meses["9"],Meses["10"],Meses["11"],Meses["12"]]
                }
            ]
        }
    })
</script>
</html>