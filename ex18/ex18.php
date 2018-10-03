<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ex18 - Preco de Venda -> Real</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="main.js"></script>
</head>
<body>
    <main>
        <p class="cabecalho">Exercicio 18: </br>
        Faça um algoritmo que receba a idade de 75 pessoas e mostre mensagem informando “maior de idade” e “menor de 
        idade” para cada pessoa. Considere a idade a partir de 18 anos como maior de idade.</p>

        <form method="POST" action="result18.php">
            <?php
            for($i=1;$i<=75;$i++){
                echo "<label>Pessoa $i :</label>";
                echo "<input type='text' name='array[]' class='form-control'>";
            }
            ?>

            <div class="botoes">
                <input type="submit" value="Enviar" class="btn btn-primary" id="submit">
            </div>
        </form>
    </main>
</body>
</html>