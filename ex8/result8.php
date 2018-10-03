<?php 
    $Dolar = $_POST["Dolar"];
    $Cotacao = $_POST["Cotacao"];

    $Dolar = str_replace(",",".",$Dolar);
    $Cotacao = str_replace(",",".",$Cotacao);

    function conveterDolar($Dolar,$Cotacao){
        $Real = number_format($Dolar * $Cotacao, 2);
        
        return $Real;
    }

    $Real = conveterDolar($Dolar,$Cotacao);      
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Resultado ex8</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <main>
        <p class='result'>Dolar = US$ <?php echo $Dolar ?></p>
        <p class='result'>Real = R$ <?php echo $Real ?></p>

        <form method="POST" action="gerarPDF8.php">
            <input type="hidden" value="<?php echo $Dolar?>" name="Dolar">
            <input type="hidden" value="<?php echo $Real?>" name="Real">
            
            <div class="botoes">
                <input type="submit" value="Gerar PDF" class="btn btn-primary">
            </div>
        </form>
    </main>
</body>
</html>