<?php
    $dist = $_POST["dist"];
    $comb = $_POST["comb"];

    function consumo($num1, $num2){
      return $num1 / $num2;
    }

    $consumo = consumo($dist,$comb);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Resultado ex3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <main>
        <p class='result'>Consumo medio: <?php echo $consumo ?> (Km/L)</p>

        <form method="POST" action="gerarPDF3.php">
            <input type="hidden" value="<?php echo $dist?>" name="dist">
            <input type="hidden" value="<?php echo $comb?>" name="comb">
            <input type="hidden" value="<?php echo $consumo?>" name="consumo">
            
            <div class="botoes">
                <input type="submit" value="Gerar PDF" class="btn btn-primary">
            </div>
        </form>
    </main>
</body>
</html>