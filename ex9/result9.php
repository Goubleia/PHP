<?php 
    $Deposito = $_POST["Deposito"];

    $Deposito = str_replace(",",".",$Deposito);

    function rendimento($Deposito){
        $Rendimento = number_format($Deposito * 70/100, 2);
        
        return $Rendimento;
    }

    $Rendimento = rendimento($Deposito);
    $Rendimento = str_replace(",","",$Rendimento);

    $Final = $Deposito + $Rendimento;    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Resultado ex9</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <main>
        <p class='result'>Depositado = R$ <?php echo $Deposito ?></p>
        <p class='result'>Rendimento = R$ <?php echo $Rendimento ?></p>
        <p class='result'>Valor com rendimento = R$ <?php echo $Final ?></p>

        <form method="POST" action="gerarPDF9.php">
            <input type="hidden" value="<?php echo $Deposito?>" name="Deposito">
            <input type="hidden" value="<?php echo $Rendimento?>" name="Rendimento">
            <input type="hidden" value="<?php echo $Final?>" name="Final">
            
            <div class="botoes">
                <input type="submit" value="Gerar PDF" class="btn btn-primary">
            </div>
        </form>
    </main>
</body>
</html>