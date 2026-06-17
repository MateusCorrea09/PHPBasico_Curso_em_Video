<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>AULA 12 FATORIAL</title>
    </head>
    <body>
        <div>
            <form method="get" action="valor02.php">
                <?php
                    $valor = $_GET["valor"];
                    $valordecrementado = $valor - 1;
                    while($valordecrementado > 0){
                        $valorcalculado = $valor * $valordecrementado;
                        echo "[$valor] * [$valordecrementado] = [$valorcalculado]";
                        $valordecrementado--;
                    }

                ?>
                <input type="submit" class ="botao" value="processar"/>
            </form>
            
        </div>
    </body>
</html>