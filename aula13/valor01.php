<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="_css/estilo.css">
    <meta charset="UTF-8">
    <title>Aula sobre FOR<title>
</head>

<body>
    <div>
        <?php
            $valor = $_GET["numero"];
            for($c = 0; $c < $valor; $c++){
                echo "O número atual é [$c]<br>";
            }
        ?>
        <a class = "botao" href="modelo01.html">Voltar</a>
    </div>
</body>

</html>