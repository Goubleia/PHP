<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ex29 - Mes correspondente.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="main.js"></script>
</head>
<body>
    <main>
        <p class="cabecalho">Exercicio 29: </br>
        Faça um algoritmo que receba o número do mês e mostre o mês correspondente. Valide mês inválido.</p>

        <form method="POST" action="">
            <label>Digite o numero do mes :</label>
            <input type="text" name="mes" class="form-control">

            <div class="botoes">
                <input type="submit" value="Enviar" class="btn btn-primary" id="submit" name='submit'>
            </div>
        </form>

        <?php
        if(!empty($_POST['submit']) && isset($_POST['submit'])){
            $mes = $_POST['mes'];

            switch ($mes) {
                case '1':
                    echo "<p class='result'>Janeiro</p>";
                    break;
                
                case '2':
                    echo "<p class='result'>Fevereiro</p>";
                    break;

                case '3':
                    echo "<p class='result'>Marco</p>";
                    break;

                case '4':
                    echo "<p class='result'>Abril</p>";
                    break;

                case '5':
                    echo "<p class='result'>Maio</p>";
                    break;

                case '6':
                    echo "<p class='result'>Junho</p>";
                    break;

                case '7':
                    echo "<p class='result'>Julho</p>";
                    break;

                case '8':
                    echo "<p class='result'>Agosto</p>";
                    break;

                case '9':
                    echo "<p class='result'>Setembro</p>";
                    break;

                case '10':
                    echo "<p class='result'>Outubro</p>";
                    break;

                case '11':
                    echo "<p class='result'>Novembro</p>";
                    break;

                case '12':
                    echo "<p class='result'>Dezwmbro</p>";
                    break;

                default:
                    echo "<p class='result'>Mes invalido</p>";
                    break;
            }
        }
        ?>
    </main>
</body>
</html>