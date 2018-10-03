<?php
$cont=0;
$arrayNums = [];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ex23 - Mensagem se valor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="main.js"></script>
</head>
<body>
    <main>
        <p class="cabecalho">Exercicio 23: </br>
        Faça um algoritmo que receba um número e mostre uma mensagem caso este número seja maior do que 80, menor 
        que 25 ou igual a 40. </p>

        <form method="POST" action="">
            <label>Valor a ser analisado :</label>
            <input type="number" name="numero" class="form-control">

            <div class="botoes">
                <input type="submit" value="Enviar" class="btn btn-primary" id="submit" name='submit'>
            </div>
        </form>

        <?php
        if(!empty($_POST["submit"]) && $_POST["submit"] == "Enviar"){
            $num = $_POST["numero"];

            $arrayNums[] = $num;
            $cont++;
            
            if($num > 80){
                echo "<p class='result'>Numero digitado maior do que 80!</p>";
            }
            elseif($num < 25){
                echo "<p class='result'>Numero digitado menor do que 25!</p>";
            }
            elseif($num == 40){
                echo "<p class='result'>Numero digitado igual a 40!</p>";
            }

            echo "<form method='GET' action='gerarPDF23.php'>";
            if(!empty($_GET["submit"]) && $_GET["submit"] == "Gerar PDF"){
                echo 'TESTE!';
                foreach ($arrayNums as $valor) {
                    echo "<input type='hidden' value='$valor' name='numeros[]'>";
                }
            }
            
            echo "<div class='botoes'>";
            echo "<input type='submit' value='Gerar PDF' class='btn btn-primary' id='submit' name='enviar'>";
            echo "</div>";
            echo "</form>";
        }
        ?>
    </main>
</body>
</html>