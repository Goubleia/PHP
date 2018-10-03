<?php 
    $A = $_POST["A"];
    $B = $_POST["B"];
    $A1 = $A;
    $B1 = $B;

    function trocarNumero($A, $B){
        $aux = $A;
        $A = $B;
        $B = $aux;
        
        return array($A,$B);
    }

    $numerosTrocados = trocarNumero($A,$B);            
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Resultado ex6</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <main>
        <p class='result'>Anterior A = <?php echo $A1 ?></p>
        <p class='result'>Anterior B = <?php echo $B1 ?></p>
        <p class='result'>Depois A = <?php echo $numerosTrocados[0] ?></p>
        <p class='result'>Depois B = <?php echo $numerosTrocados[1] ?></p>

        <form method="POST" action="gerarPDF6.php">
            <input type="hidden" value="<?php echo $A1?>" name="A1">
            <input type="hidden" value="<?php echo $B1?>" name="B1">
            <input type="hidden" value="<?php echo $numerosTrocados[0]?>" name="trocadoA">
            <input type="hidden" value="<?php echo $numerosTrocados[1]?>" name="trocadoB">
            
            <div class="botoes">
                <input type="submit" value="Gerar PDF" class="btn btn-primary">
            </div>
        </form>
    </main>
</body>
</html>