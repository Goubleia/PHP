<?php 
    function calculaSalario($salario, $vendas){
        $result = number_format($salario + (15/100 * $vendas),2);
        
        return $result;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ex4 - Salario vendedor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="main.js"></script>
</head>
<body>
    <main>
        <p class="cabecalho">Exercicio 4: </br>
        Escrever um algoritmo que leia o nome de um vendedor, o seu salário fixo e o total de vendas efetuadas por ele no 
        mês (em dinheiro). Sabendo que este vendedor ganha 15% de comissão sobre suas vendas efetuadas, informar o 
        seu nome, o salário fixo e salário no final do mês. </p>

        <form method="POST" action="">
            <label>Nome do funcionario:</label>
            <input type="text" name="nome" class="form-control">
            
            <label>Salario: </label>
            <input type="text" name="salario" class="form-control">

            <label>Total de vendas: </label>
            <input type="text" name="vendas" class="form-control">

            <div class="botoes">
                <input type="submit" value="Enviar" class="btn btn-primary" id="submit" name='submit'>
            </div>
        </form>

         <form method="POST" action="gerarPDF4.php">
            <?php
            if(!empty($_POST['submit']) && isset($_POST['submit'])){
                if(!empty($_POST['nome']) && !empty($_POST['salario']) && !empty($_POST['vendas'])){
                    $nome = $_POST['nome'];
                    $salario = (float) $_POST['salario'];
                    $vendas = (float) $_POST['vendas'];

                    $salarioFinal = calculaSalario($salario,$vendas);
    
                    echo "<p class='result'>Funcionario = $nome</p>";
                    echo "<p class='result'>Salario Fixo = R$ $salario</p>";
                    echo "<p class='result'>Salario Final = R$ $salarioFinal</p>";

                    echo "<input type='hidden' value='$nome' name='nome'>";
                    echo "<input type='hidden' value='$salario' name='salario'>";
                    echo "<input type='hidden' value='$salarioFinal' name='salarioFinal'>";

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