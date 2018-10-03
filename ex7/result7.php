<?php 
    $C = $_POST["Celsius"];

    function transformarTemp($C){
        $F=number_format((9*$C+160) / 5, 1);
        
        return $F;
    }

    $F = transformarTemp($C);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Resultado ex7</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <main>
        <p class='result'>Temperatura em Celsius = <?php echo $C ?> °C</p>
        <p class='result'>Temperatura em Fahrenheit = <?php echo $F ?> °F</p>

        <form method="POST" action="gerarPDF7.php">
            <input type="hidden" value="<?php echo $C?>" name="C">
            <input type="hidden" value="<?php echo $F?>" name="F">
            
            <div class="botoes">
                <input type="submit" value="Gerar PDF" class="btn btn-primary">
            </div>
        </form>
    </main>
</body>
</html>