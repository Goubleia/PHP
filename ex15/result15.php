<?php 
    $num = $_POST["numero"];

    function compara100e200($num){        
        return $num>100 && $num<200 ? true : false;
    }

    $result = compara100e200($num);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Resultado ex15</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <main>
        <p class='result'>Numero = <?php echo $num ?></p>

        <?php
        if ($result) {
            echo "<p class='result'>O numero esta no intervalo entre 100 e 200!</p>";
        }
        else{
            echo "<p class='result'>O numero nao esta no intervalo entre 100 e 200!</p>";
        }
        ?>

        <form method="POST" action="gerarPDF15.php">
            <input type="hidden" value="<?php echo $num?>" name="numero">
            <input type="hidden" value="<?php echo $result?>" name="resultado">
            
            <div class="botoes">
                <input type="submit" value="Gerar PDF" class="btn btn-primary">
            </div>
        </form>
    </main>
</body>
</html>