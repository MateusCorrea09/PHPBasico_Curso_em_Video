<!DOCTYPE html>
<html>
    <head>
        <?php
            $valor = $_GET["numero"];
            $alternativa = $_GET["opcao"];
        ?>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Aula sobre Switch case</title>
    </head>
    <body>
        <div>
            <?php
                echo "Valor de entrada [$valor] opção escolhida [$alternativa]";
            ?>
        </div>
    </body>
</html>