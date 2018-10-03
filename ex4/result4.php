<?php 
    $nome = $_POST["nome"];
    $salario = $_POST["salario"];
    $vendas = $_POST["vendas"];

    // Para fazer o calculo
    $salario = str_replace(",",".",$salario);
    $vendas = str_replace(",",".",$vendas);

    function calculaSalario($salario, $vendas){
        $result = number_format($salario + (15/100 * $vendas),2);
        
        return $result;
    }

    $salarioFinal = calculaSalario($salario,$vendas);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Resultado ex4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <main>
        <p class='result'>Funcionario: <?php echo $nome ?></p>
        <p class='result'>Salario fixo: R$ <?php echo $salario ?></p>
        <p class='result'>Salario final: R$ <?php echo $salarioFinal ?></p>

        <form method="POST" action="gerarPDF4.php">
            <input type="hidden" value="<?php echo $nome?>" name="nome">
            <input type="hidden" value="<?php echo $salario?>" name="salario">
            <input type="hidden" value="<?php echo $salarioFinal?>" name="salarioFinal">
            
            <div class="botoes">
                <input type="submit" value="Gerar PDF" class="btn btn-primary">
            </div>
        </form>
    </main>
</body>
</html>