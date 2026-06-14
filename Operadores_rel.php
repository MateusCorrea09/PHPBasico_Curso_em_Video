<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Operadores Relacionais</title>
    </head>
    <body>
        <?php
            $tipo = $_GET["op"];
            $n1 = $_GET["n1"];
            $n2 = $_GET["n2"];

            $resultado = $n1+$n2?$tipo=="soma":$tipo=="subtracao";
            echo "Resultado = [$resultado]";

        ?>
    </body>
</html>