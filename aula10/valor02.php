<!DOCTYPE html>
<html>

<head>
    <?php
    $numero = $_GET["numero"];
    ?>
    <link rel="stylesheet" href="_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Exercício 02 sobre switch case</title>
</head>

<body>
    <form>
        <?php
        switch ($numero) {
            case (1):
            case (2):
            case (3):
            case (4):
            case (5):
                echo "Precisa ir para escola!";
                break;
            case (6):
            case (7):
                echo "NÃO precisa ir para escola!";
                break;
            default:
                echo "ENTRE COM UM NÚMERO ENTRE 1 - 7!";
        }
        ?>
        <a href="modelo02.htm" class="botao">Voltar</a>
    </form>
</body>

</html>