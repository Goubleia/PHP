<?php 
    function conveterDolar($Custo,$Percentual){
        $Venda = number_format($Custo + $Custo * ($Percentual/100), 2);
        
        return $Venda;
    }     
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ex12 - Preco de Venda -> Real</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="main.js"></script>
</head>
<body>
    <main>
        <p class="cabecalho">Exercicio 12: </br>
        Faça um algoritmo que receba o preço de custo de um produto e mostre o valor de venda. Sabe-se que o preço de 
        custo receberá um acréscimo de acordo com um percentual informado pelo usuário. </p>

        <form method="POST" action="">
            <label>Preco de Custo :</label>
            <input type="text" name="Custo" class="form-control">

            <label>Percentual de acrescimo :</label>
            <input type="text" name="Percentual" class="form-control">

            <div class="botoes">
                <input type="submit" value="Enviar" class="btn btn-primary" id="submit" name='submit'>
            </div>
        </form>

        <form method="POST" action="gerarPDF12.php">
            <?php
            if(!empty($_POST['submit']) && isset($_POST['submit'])){
                if(!empty($_POST['Custo']) && !empty($_POST['Percentual'])){
                    $Custo = $_POST["Custo"];
                    $Percentual = $_POST["Percentual"];

                    $Venda = conveterDolar($Custo,$Percentual);

                    echo "<p class='result'>Preco de Custo = R$ $Custo</p>";
                    echo "<p class='result'>Percentual = R$ $Percentual</p>";
                    echo "<p class='result'>Preco de venda = R$ $Venda</p>";

                    echo "<input type='hidden' value='$Custo' name='Custo'>";
                    echo "<input type='hidden' value='$Percentual' name='Percentual'>";
                    echo "<input type='hidden' value='$Venda' name='Venda'>";

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