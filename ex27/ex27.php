<?php
$total = 0.0;
$desconto = 0.0;
$totalDesconto = 0.0;

if(isset($_POST['gerarpdf'])){
    if(isset($_POST['combustivel'])){
        require('gerarPDF27.php');

        $valor = $_POST['valor'];
        $combustivel = $_POST['combustivel'];
    
        gerarPDF($valor,$combustivel);
    }
    else{
        echo "<p class='result'>Selecione um combustivel!!</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ex27 - Desconto pelo combustivel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="main.js"></script>
</head>
<body>
    <main>
        <p class="cabecalho">Exercicio 27: </br>
        A concessionária de veículos “CARANGO” está vendendo os seus veículos com desconto. Faça um algoritmo que
        calcule e exiba o valor do desconto e o valor a ser pago pelo cliente. O desconto deverá ser calculado sobre o valor
        do veículo de acordo com o combustível (álcool – 25%, gasolina – 21% ou diesel –14%). Com valor do veículo zero
        encerra entrada de dados. Informe total de desconto e total pago pelos clientes.</p>

        <form method="POST" action="">
            <label>Preco do Carro :</label>
            <input type="number" name="valor" class="form-control javascript">

            <div class="radio">
                <label><input type="radio" value="alcool" name='combustivel'>Alcool</label>
            </div>
            <div class="radio">
                <label><input type="radio" value="gasolina" name='combustivel'>Gasolina</label>
            </div>
            <div class="radio">
                <label><input type="radio" value="diesel" name='combustivel'>Diesel</label>
            </div> 

            <div class="botoes">
                <input type="submit" value="Enviar" class="btn btn-primary" id="submit" name='submit'>
                <input type="submit" value="Gerar PDF" class="btn btn-primary" id="submit" name='gerarpdf'>
            </div>
        </form>
        <?php
        if(!empty($_POST['submit'])){
            if(isset($_POST['combustivel'])){
                $valor = $_POST['valor'];
                $combustivel = $_POST['combustivel'];

                if($combustivel == 'alcool'){
                    $desconto = $valor * (25/100);

                    $valor -= $desconto;
                }
                elseif ($combustivel == 'gasolina') {
                    $desconto = $valor * (21/100);

                    $valor -= $desconto;
                }
                elseif($combustivel == 'diesel'){
                    $desconto = $valor * (14/100);

                    $valor -= $desconto;
                }

                echo "<p class='result'>Desconto = R$ $desconto</p>";
                echo "<p class='result'>Valor com desconto = R$ $valor</p>";

                $totalDesconto += $desconto;
                $total += $valor;
            }
            else{
                echo "<p class='result'>Selecione um combustivel!!</p>";
            }
        }
        ?>
    </main>
</body>
</html>