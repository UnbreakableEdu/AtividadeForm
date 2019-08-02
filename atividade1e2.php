<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <title>Formulário de Contato</title>

        <style>

        #stylized .small{
        color:#666666;
        display:block;
        font-size:11px;
        font-weight:normal;
        text-align:right;
        width:140px;
        }

        </style>

    </head>
        <body>

            <h2>Selecione seu Carro</h2>
            <p></p>

            <form action="atividade1process.php" method="post">

            <label>
                <span class="small">Tipo:</span>
            </label>
            <select name="prioridade" size="1">
            <option value="Corsa Super">Corsa Super</option>
            <option value="Astra 2.0">Astra 2.0</option>
            <option value="Clio Authentique">Clio Authentique</option>
            <option value="Ford Ka">Ford Ka</option>
            </select><br><br>
            <label>
                <span class="smal">Cores (RGB):</span>
            </label><br>
                R:<br>
                <input type="number" max="255" name="r";><br>
                G:<br>
                <input type="number" max="255" name="g";><br>
                B:<br>
                <input type="number" max="255" name="b";><br>
            <input type="submit" value="Enviar">
            <input type="reset" value="Limpar">
            </form>
        </body>
</html>