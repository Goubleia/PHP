<?php 
    $Compra = $_POST["Compra"];

    function calculoPrestacoes($Compra){
        $Prestacoes = number_format($Compra / 5, 2);
        
        return $Prestacoes;
    }

    $Prestacoes = calculoPrestacoes($Compra);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Resultado ex10</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <main>
        <p class='result'>Valor de compra = <?php echo $Compra ?></p>
        <p class='result'>Prestacoes = <?php echo $Prestacoes ?></p>

        <form method="POST" action="gerarPDF10.php">
            <input type="hidden" value="<?php echo $Compra?>" name="Compra">
            <input type="hidden" value="<?php echo $Prestacoes?>" name="Prestacoes">
            
            <div class="botoes">
                <input type="submit" value="Gerar PDF" class="btn btn-primary">
            </div>
        </form>
    </main>
</body>
</html>