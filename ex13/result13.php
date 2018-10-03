<?php 
    $num = $_POST["numero"];

    function checaNum10($num){
        return $num>10 ? true : false;
    }

    $result = checaNum10($num);      
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
        <p class='result'>Numero = <?php echo $num ?></p>
        
        <?php if($result){
            echo "<p class='result'>O numero eh maior do que 10!</p>";
        }
        else{
            echo "<p class='result'>O numero nao eh maior do que 10!</p>";
        }
        ?>
        
        <form method="POST" action="gerarPDF13.php">
            <input type="hidden" value="<?php echo $num?>" name="numero">
            <input type="hidden" value="<?php echo $result?>" name="resultado">
            
            <div class="botoes">
                <input type="submit" value="Gerar PDF" class="btn btn-primary">
            </div>
        </form>
    </main>
</body>
</html>