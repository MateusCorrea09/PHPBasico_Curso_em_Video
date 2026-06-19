<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Teste Wordwrap</title>
</head>
<body>
    <div>
        <?php
           
            $txt = "Meu nome é mateus e eu gosto de desenhar nos finais de semana!";
            
            $res = wordwrap($txt, 20, "<br>\n", false);
            
            echo $res;
        ?>
    </div>
</body>
</html>