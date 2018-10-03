<?php
    $array = $_POST["array"];

    function checaNumeros($array){
        $cont = 0;
        
        for($i=0;$i<count($array);$i++){
            if($array[$i] >= 10 && $array[$i] <= 150){
                $cont++;
            }
        }
        
        return $cont;
    }

    $quant = checaNumeros($array);      
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Resultado ex17</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <main>
        <p class='result'>Dentre 10 numeros, <?php echo $quant ?> estao no intervalo entre 10 e 150.</p>

        <form method="POST" action="gerarPDF17.php">
            <input type="hidden" value="<?php echo $quant?>" name="quantidade">
            
            <div class="botoes">
                <input type="submit" value="Gerar PDF" class="btn btn-primary">
            </div>
        </form>
    </main>
</body>
</html>