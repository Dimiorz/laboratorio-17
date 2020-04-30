<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>promedio notas</title>
</head>
<body>
    <h1>calcular notas</h1>
<?php 
    $parcial=$_POST['parcial'];
    $parcial2=$_POST['parcial2'];
    $parcial3=$_POST['parcial3'];
    $Efinal=$_POST['tfinal'];
    $Tfinal=$_POST['efinal'];

    $N_parcial= ($parcial + $parcial2 + $parcial3) /3;
    $def= ($N_parcial*0.35) + ($Efinal*0.35) + ($Tfinal*0.3);

    echo ("<br> el estudiante tiene un proemdio de promedio: " .$def);
    echo ("<br> el estudiante : " )

    

?> 

<?php 


    if($def < 3){
            echo "Reprobado";
        }else
        if($def > 3){
            echo "Aprobado";
        }


?>

</body>
</html>


