<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Exercicio 02</title>
    </head>
    <body>
        <div>
            <?php
                $nome = isset($_GET["nome"]) ? $_GET["nome"]: "Não informado";
                $data_nascimento = isset($_GET["data_nascimento"]) ? $_GET["data_nascimento"]: 0;
                $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "Não informado";
                $idade = date("Y") - $data_nascimento ;
                echo "Seu nome é [$nome] sua idade é [$idade] e seu gênero é [$sexo]";
            ?>
            <a href="modelo02.html">Voltar</a>
        </div>
    </body>
</html>