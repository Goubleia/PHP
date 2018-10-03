<?php
function soma($num1, $num2){
    return $num1 + $num2;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ex1 - Soma de dois numeros</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="main.js"></script>
</head>
<body>
    <main>
        <p class="cabecalho">Exercicio 1: </br>
        Faça um algoritmo que receba dois números e exiba o resultado da sua soma.</p>

        <form method="POST" action="">
            <label>Digite o primeiro numero:</label>
            <input type="number" name="num1" class="form-control" id="num1">
            
            <label>Digite o segundo numero: </label>
            <input type="number" name="num2" class="form-control">
            
            <div class="botoes">
                <input type="submit" value="Enviar" class="btn btn-primary" name='submit'>
            </div>
        </form>

        <form method="POST" action="gerarPDF.php">
            <?php
            if(!empty($_POST['submit']) && isset($_POST['submit'])){
                if(!empty($_POST['num1']) && !empty($_POST['num2'])){
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];

                    $soma = soma($num1,$num2);
    
                    echo "<p class='result'>Soma = $soma</p>";

                    echo "<input type='hidden' value='$soma' name='soma'>";

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