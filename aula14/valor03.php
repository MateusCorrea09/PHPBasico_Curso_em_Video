<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>função com multiplos</title>
</head>
<body>
    <div>
        <?php
            function soma(){
                $lista_numeros = func_get_args();
                $total_posicoes = func_num_args();
                $soma_total = 0;
                for ($c = 0; $c < $total_posicoes; $c ++){
                    $soma_total += $lista_numeros[$c];
                }
                return $soma_total;
            }
            $resultado = soma(12,55,23,2,5,0,11);
            echo "Resultado final [$resultado]";
        ?>
    </div>
</body>
</html>