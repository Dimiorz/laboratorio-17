<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado </title>
</head>
<body>

    <h1>presupuestos distribuidos</h1>
    <?php
        $presupuesto = $_POST ['dinero'];
    
        $porcentaje1= ($presupuesto * 0.40);
        $porcentaje2= ($presupuesto * 0.30);
        $porcentaje3= ($presupuesto * 0.30);

        
        echo " presupuesto para ginecologia; " .$porcentaje1. "<br>";
        echo " presupuesto para traumatologia; " .$porcentaje2. "<br>";
        echo " presupuesto para pediatria; " .$porcentaje3. "<br>";

    ?>
</body>
</html>