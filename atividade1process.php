<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Formulário de Contato</title>
    </head>
        <body>
            <h1>Sucesso!</h1>
            <p>Aqui está a informação que você submeteu:</p>
                <ol>
                    <li><em>Modelo:</em> <?php echo $_POST["prioridade"]?></li>
                </ol>
            <div>
            <h1>Cor Escolhida</h1>
            <?php
            $r=$_POST['r'];
            $g=$_POST['g'];
            $b=$_POST['b'];

            $rgb=$r.','.$g.','.$b;?>
            R:<?php echo "$r";?>
            G:<?php echo "$g";?>
            B:<?php echo "$b";?>
            <br>
            <div style="width:160px; height:160px; background-color:rgb(<?php echo "$r,$g,$b";?>)">
            </div>  
        </body>
</html>