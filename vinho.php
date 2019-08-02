<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <title>Formulário de Contato</title>

    </head>
        <body>

            <h2>Refeições</h2>
            <p>Seleção de Preferências</p>

            <form action="vinho2.php" method="post">    

                <label for="inputName">Nome:<sup>*</sup></label>
                <input type="text" name="nome" id="inputName">

            </p>
            <p>Tipo de Vinho favorito:</p>

            <input type="radio" name="radio" value="branco">Branco</option><br>
            <input type="radio" name="radio" value="rosé">Rosé</option><br>
            <input type="radio" name="radio" value="tinto">Tinto</option><br>




            <p>     

                <label for="inputRefei">Nome da sua refeição predileta:<sup>*</sup></label>
                <input type="text" name="refei" id="inputRefei">

            </p>

                <input type="submit" value="Enviar">
                <input type="reset" value="Limpar">
            </form>
        </body>
</html>