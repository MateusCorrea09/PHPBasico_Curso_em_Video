<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Exercício 01</title>
    </head>
    <body>
        <div>
            <?php
                $valor = $_GET["v"];
                echo "A Raiz quadrada de [$valor] é = ". number_format(sqrt($valor),2);   
            ?>
            <a href="modelo01.html">Voltar</a>
        </div>
    </body>
</html>