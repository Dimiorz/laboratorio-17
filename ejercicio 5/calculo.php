<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado </title>
</head>
<body>

    <h1>Articulo con descuento</h1>
    <?php
        $nproducto = $_POST ['nproducto'];
        $pproducto = $_POST ['pproducto'];
        $cdescuento = $_POST ['cdescuento'];
        $des= 0
        
        echo " nombre del producto: " .$nproducto. "<br>";
        echo " precio del producto: " .$pproducto. "<br>";

        if($cdescuento = 1){
            $des = ($pproducto - ($pproducto*0.10))
            echo "<br> precio con descuento" .$des. "<br>";
        }else 
        if($cdescuento = 2){
            $des = ($pproducto - ($pproducto*0.20))
            echo "<br> precio con descuento" .$des. "<br>";

    ?>
</body>
</html>