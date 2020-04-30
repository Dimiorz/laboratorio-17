<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comision de AUTOS</title>
</head>
<body>
    <H1>calculo de salario</H1>
    <?php 

        $nombre = $_POST['nombre'];
        $comision = $_POST['cantidad'];
        $vendidos = $_POST['vendidos'];
        $salario = 450000;
        $comisionT= ($vendidos * 0.05) + ($comision * 50000) ;
        $salarioT= ($salario) + ($comisionT);

    ?> 

    <?php 
            echo $nombre;
            echo ("<br> salario: " .$salarioT);
 
    ?>
</body>
</html>