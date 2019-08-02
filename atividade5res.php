<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Formulario de Função</title>
    </head>

    <body>
        <?php
            $frase = $_POST['userText'];
            $tamanholetra = strlen($frase);
                if ($_POST['stringvalor'] == "inverterletras") {
                    $resultado = strrev($frase);
                } elseif ($_POST['stringvalor'] == "letramaiuscula") {
                    $resultado = strtoupper($frase);
                } elseif ($_POST['stringvalor'] == "letraminusculo") {
                    $resultado = strtolower($frase);
                } elseif ($_POST['stringvalor'] == "primeiramaiuscula") {
                    $resultado = ucwords($frase);
                } else {
                    $resultado = $frase;
                }
        ?>    
    
        <p><?php
            echo "Obrigado por definir suas preferências\n";?><br></p>
        <p><?php
            echo $resultado;?><br></p>
    </body>
</html>