<?php 
    function checaNum10($num){
        return $num>10 ? true : false;
    }     
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ex13 - Numero maior que 10</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="main.js"></script>
</head>
<body>
    <main>
        <p class="cabecalho">Exercicio 13: </br>
        Faça um algoritmo que receba um número e mostre uma mensagem caso este número seja maior que 10.</p>

        <form method="POST" action="">
            <label>Numero a ser analisado :</label>
            <input type="text" name="numero" class="form-control">

            <div class="botoes">
                <input type="submit" value="Enviar" class="btn btn-primary" id="submit" name='submit'>
            </div>
        </form>

        <form method="POST" action="gerarPDF13.php">
            <?php
            if(!empty($_POST['submit']) && isset($_POST['submit'])){
                if(!empty($_POST['numero'])){
                    $num = $_POST["numero"];

                    $result = checaNum10($num);

                    if($result){
                        echo "<p class='result'>O numero eh maior do que 10!</p>";
                    }
                    else{
                        echo "<p class='result'>O numero nao eh maior do que 10!</p>";
                    };

                    echo "<input type='hidden' value='$result' name='resultado'>";

                    echo "<div class='botoes'>";
                    echo "<input type='submit' value='Gerar PDF' class='btn btn-primary'>";
                    echo "</div>";

                }
                else{
                    echo "<p class='result'>Faltam dados!</p>";
                }
            }
            ?>
        </form>
    </main>
</body>
</html>