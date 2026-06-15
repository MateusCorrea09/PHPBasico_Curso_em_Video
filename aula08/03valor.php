<!DOCTYPE html>
<html>
    <head>
        <?php
            $txt = isset($_GET["t"])? $_GET["t"]: "Não informado";
            $tam = isset($_GET["tam"])? $_GET["tam"]: 14;
            $cor = isset($_GET["cor"])? $_GET["cor"]: "#000000";
        ?>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Exercicio 03</title>
        <style>
            span.texto{
                font-size: <?php echo $tam; ?>;
                color: <?php echo $cor; ?>;
            }
        </style>
    </head>
    <body>
        <div>
            <?php
                echo "<span class ='texto'>$txt</>";
            ?>
            <a href="modelo03.html">Voltar</a>
        </div>
    </body>
</html>