<?php
    function calculoPrestacoes($Compra){
        $Prestacoes = number_format($Compra / 5, 2);
        
        return $Prestacoes;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ex10 - Prestacoes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="main.js"></script>
</head>
<body>
    <p class="cabecalho">Exercicio 10: </br>
    A Loja Mamão com Açúcar está vendendo seus produtos em 5 (cinco) prestações sem juros. Faça um algoritmo que 
    receba um valor de uma compra e mostre o valor das prestações.</p>
    
    <main>
        <form method="POST" action="">
            <label>Valor :</label>
            <input type="number" name="Compra" class="form-control">

            <div class="botoes">
                <input type="submit" value="Enviar" class="btn btn-primary" id="submit" name='submit'>
            </div>
        </form>

        <form method="POST" action="gerarPDF10.php">
            <?php
            if(!empty($_POST['submit']) && isset($_POST['submit'])){
                if(!empty($_POST['Compra'])){
                    $Compra = $_POST["Compra"];

                    $Prestacoes = calculoPrestacoes($Compra);

                    echo "<p class='result'>Valor de compra = R$ $Compra</p>";
                    echo "<p class='result'>Prestacoes = R$ $Prestacoes</p>";

                    echo "<input type='hidden' value='$Compra' name='Compra'>";
                    echo "<input type='hidden' value='$Prestacoes' name='Prestacoes'>";

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