<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado IMC</title>
</head>
<body>
    <h1>Respuesta</h1>
    <?php
        $peso = $_POST ['peso'];
        $altura = $_POST ['altura'];
        $T_est = ($altura * $altura);

        $imc = ($peso / $T_est);
        echo " Indice de masa corporal " .$imc. "<br>";

        if($imc < 18.5){
            echo "<br> Presenta: Bajo de peso";
        }else 
        if($imc >= 18.5 && $imc <= 24.9){
            echo ("<br> Presenta: Peso saludable");
        }else
        if($imc >= 25 && $imc <=29.9 ){
            echo ("<br> Presenta: Sobrepeso");
        }else
        if($imc >= 30 && $imc <=39.9 ){

            echo ("<br> Presenta: Obesidad");
        }else
        if($imc >40){
            echo ("<br> Presenta: Obesidad morbida"); 
        }
    ?>
</body>
</html>