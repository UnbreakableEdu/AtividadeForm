<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <title>Formulário de Conta</title>

    </head>
        <body>

            <h2>Calculadora</h2>
            <p>Seleção de Preferências</p>

            <form action="atividade4res.php" method="post">    

            <label>
                <span class="smal">Valores:</span>
            </label><br>
                Valor 1:<br>
                <input type="number" name="valor1";><br>
                Valor 2:<br>
                <input type="number" name="valor2";><br>

            </p>
            <p>Escolha qual operação:</p>

            <input type="radio" name="operacao" value="adicao">Adição</option><br>
            <input type="radio" name="operacao" value="subtracao">Subtração</option><br>
            <input type="radio" name="operacao" value="multiplicacao">Multiplicador</option><br>
            <input type="radio" name="operacao" value="divisao">Divisão</option><br>


                <input type="submit" value="Calcular">
                <input type="reset" value="Limpar">
            </form>
        </body>
</html>