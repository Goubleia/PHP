<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ex19 - Pessoa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="main.js"></script>
</head>
<body>
    <main>
        <p class="cabecalho">Exercicio 19: </br>
        Escrever um algoritmo que leia o nome e o sexo de 56 pessoas e informe o nome e se ela é homem ou mulher. No 
        final informe total de homens e de mulheres. </p>

        <form method="POST" action="result19.php">
            <?php
            for($i=1;$i<=2;$i++){
                echo "<p class='result'>Pessoa $i</p>";

                echo "<label>Nome :</label>";
                echo "<input type='text' name='nomes[]' class='form-control'>";

                echo "<label>Sexo :</label>";
                echo "<input type='text' name='sexos[]' class='form-control'>";
            }
            ?>

            <div class="botoes">
                <input type="submit" value="Enviar" class="btn btn-primary" id="submit">
            </div>
        </form>
    </main>
</body>
</html>