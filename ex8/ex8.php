<?php 
    function conveterDolar($Dolar,$Cotacao){
        $Real = number_format($Dolar * $Cotacao, 2);
        
        return $Real;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ex8 - Conversor Dolar -> Real</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="main.js"></script>
</head>
<body>
    <main>
        <p class="cabecalho">Exercicio 8: </br>
        Elaborar um algoritmo que efetue a apresentação do valor da conversão em real (R$) de um valor lido em dólar 
        (US$). O algoritmo deverá solicitar o valor da cotação do dólar e também a quantidade de dólares disponíveis com o 
        usuário.</p>

        <form method="POST" action="">
            <label>Quantia em Dolar :</label>
            <input type="text" name="Dolar" class="form-control">

            <label>Cotacao :</label>
            <input type="text" name="Cotacao" class="form-control">
            
            <div class="botoes">
                <input type="submit" value="Enviar" class="btn btn-primary" id="submit" name='submit'>
            </div>
        </form>

            
        <form method="POST" action="gerarPDF8.php">
            <?php
            if(!empty($_POST['submit']) && isset($_POST['submit'])){
                if(!empty($_POST['Dolar']) && !empty($_POST['Cotacao'])){
                    $Dolar = $_POST["Dolar"];
                    $Cotacao = $_POST["Cotacao"];

                    $Real = conveterDolar($Dolar,$Cotacao);

                    echo "<p class='result'>Dolar = US$ $Dolar</p>";
                    echo "<p class='result'>Real = R$ $Real</p>";

                    echo "<input type='hidden' value='$Dolar' name='Dolar'>";
                    echo "<input type='hidden' value='$Real' name='Real'>";

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