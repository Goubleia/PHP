<?php 
    $aluno = $_POST["aluno"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];

    function calculaMedia($nota1, $nota2, $nota3){
        return ($nota1 + $nota2 + $nota3) / 3;
    }
    
    $media = calculaMedia($nota1,$nota2,$nota3);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Resultado ex5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <main>
        <p class='result'>Aluno: <?php echo $aluno ?></p>
        <p class='result'>Nota 1: <?php echo $nota1 ?></p>
        <p class='result'>Nota 2: <?php echo $nota2 ?></p>
        <p class='result'>Nota 3: <?php echo $nota3 ?></p>
        <p class='result'>Media: <?php echo $media ?></p>

        <form method="POST" action="gerarPDF5.php">
            <input type="hidden" value="<?php echo $aluno?>" name="aluno">
            <input type="hidden" value="<?php echo $nota1?>" name="nota1">
            <input type="hidden" value="<?php echo $nota2?>" name="nota2">
            <input type="hidden" value="<?php echo $nota3?>" name="nota3">
            <input type="hidden" value="<?php echo $media?>" name="media">
            
            <div class="botoes">
                <input type="submit" value="Gerar PDF" class="btn btn-primary">
            </div>
        </form>
    </main>
</body>
</html>