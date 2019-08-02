<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Formulário de Vinho</title>
    </head>
        <body>
            <h1>Sucesso!</h1>
            <p>Aqui está a informação que você submeteu:</p><br>
            <img style="width:365px; height:160px;" src="https://www.wine.com.br/winepedia/wp-content/uploads/2017/01/iStock-157582406-1180x517.jpg"><br>
            <?php
            $tipo=$_POST['radio'];
            $nome=$_POST['nome'];
            $refeicao=$_POST['refei'];
            
            echo "Obrigado por definir suas preferências, $nome\n";?><br><?php
            echo "Você aprecia um bom vinho $tipo\n";?><br><?php
            echo "Fica ainda melhor com $refeicao, não?\n";?><br>
            