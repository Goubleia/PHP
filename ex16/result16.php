<?php 
    $aluno = $_POST["aluno"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];

    function resultadoAprovacao($nota1,$nota2,$nota3){
        $media = number_format(($nota1 + $nota2 + $nota3) / 3, 2);

        if($media >= 7){
            return "Aprovado";
        }
        elseif ($media <= 5) {
            return "Reprovado";
        }
        elseif($media >= 5.1 || $media <= 6.9){
            return "de Recuperacao";
        }
    }

    $result = resultadoAprovacao($nota1,$nota2,$nota3);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Resultado ex16</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <main>
        <p class='result'>Aluno = <?php echo $aluno ?></p>
        <p class='result'>Esta <?php echo $result ?>!</p>

        <form method="POST" action="gerarPDF16.php">
            <input type="hidden" value="<?php echo $aluno?>" name="aluno">
            <input type="hidden" value="<?php echo $result?>" name="resultado">
            
            <div class="botoes">
                <input type="submit" value="Gerar PDF" class="btn btn-primary">
            </div>
        </form>
    </main>
</body>
</html>