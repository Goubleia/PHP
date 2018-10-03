<?php 
    $num = $_POST["numero"];

    function escreverNumero($num){
        switch ($num) {
            case 1:
                return 'Um';
                break;
            case 2:
                return 'Dois';
                break;
            case 3:
                return 'Tres';
                break;
            case 4:
                return 'Quatro';
                break;
            case 5:
                return 'Cinco';
                break;
            
            default:
                return 'Numero invalido';
                break;
        }
    }

    $result = escreverNumero($num);      
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
        <?php
        if($result == 'Numero invalido'){
            echo "<p class='result'>$result!</p>";
        }
        else{
            echo "<p class='result'>Numero por extenso = $result!</p>";
        }
        ?>

        <form method="POST" action="gerarPDF26.php">
            <input type="hidden" value="<?php echo $result?>" name="resultado">
            
            <div class="botoes">
                <input type="submit" value="Gerar PDF" class="btn btn-primary">
            </div>
        </form>
    </main>
</body>
</html>