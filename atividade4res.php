<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Formulário de Conta</title>
    </head>
        <body>
            <h1>Sucesso!</h1>
            <p>Aqui está a informação que você submeteu:</p><br>
            <?php
            $valor1=$_POST['valor1'];
            $valor2=$_POST['valor2'];

            if ($_POST['operacao'] == "multiplicacao") {
                $resposta = $valor1 * $valor2;
            } elseif ($_POST['operacao'] == "divisao") {
                $resposta = $valor1 / $valor2;
            } elseif ($_POST['operacao'] == "adicao") {
                $resposta = $valor1 + $valor2;
            } elseif ($_POST['operacao'] == "subtracao") {
                $resposta = $valor1 - $valor2;
            }
            ?>
            <p><?php
            echo "Obrigado por definir suas preferências\n";?><br></p>
            <p><?php
            echo "Resultado: ".$resposta;?><br></p>