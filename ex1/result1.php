<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];

function soma($num1, $num2){
    return $num1 + $num2;
}

$soma = soma($num1,$num2);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Resultado ex1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <main>
        <p class='result'>Resultado soma = <?php echo $soma ?></p>

        <form method="POST" action="gerarPDF.php">
            <input type="hidden" value="<?php echo $num1?>" name="num1">
            <input type="hidden" value="<?php echo $num2?>" name="num2">
            <input type="hidden" value="<?php echo $soma?>" name="soma">
            
            <div class="botoes">
                <input type="submit" value="Gerar PDF" class="btn btn-primary">
            </div>
        </form>
    </main>
</body>
</html>