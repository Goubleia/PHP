<?php
    function custoCarro($Custo){
        $Impostos = $Custo + ($Custo * 45/100);
        $Distribuidor = $Impostos + ($Impostos * 28/100);
        
        return $Distribuidor;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ex11 - Prestacoes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="ex1.js"></script>
</head>
<body>
    <p class="cabecalho">Exercicio 11: </br>
    O custo ao consumidor de um carro novo é a soma do custo de fábrica com a percentagem do distribuidor e dos 
    impostos (aplicados, primeiro os impostos sobre o custo de fábrica, e depois a percentagem do distribuidor sobre o 
    resultado). Supondo que a percentagem do distribuidor seja de 28% e os impostos 45%. Escrever um algoritmo que 
    leia o custo de fábrica de um carro e informe o custo ao consumidor do mesmo.</p>
    
    <main>
        <form method="POST" action="">
            <label>Preco de custo de fábrica :</label>
            <input type="number" name="Custo" class="form-control">

            <div class="botoes">
                <input type="submit" value="Enviar" class="btn btn-primary" id="submit" name='submit'>
            </div>
        </form>

        <form method="POST" action="gerarPDF11.php">
            <?php
            if(!empty($_POST['submit']) && isset($_POST['submit'])){
                if(!empty($_POST['Custo'])){
                    $Custo = $_POST["Custo"];

                    $CustoCarro = custoCarro($Custo);

                    echo "<p class='result'>Valor de venda = R$ $CustoCarro</p>";

                    echo "<input type='hidden' value='$CustoCarro' name='CustoCarro'>";
                    echo "<input type='hidden' value='$Custo' name='CustoFabrica'>";

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