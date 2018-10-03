<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ex17 - Verifica 80 numeros</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="main.js"></script>
</head>
<body>
    <main>
        <p class="cabecalho">Exercicio 17: </br>
        Ler 80 números e ao final informar quantos número(s) est(á)ão no intervalo entre 10 (inclusive) e 150 (inclusive).</p>

        <form method="POST" action="result17.php">
            <?php
            for($i=1;$i<=80;$i++){
                echo "<label>Numero $i :</label>";
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