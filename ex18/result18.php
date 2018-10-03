<?php 
    $array = $_POST["array"];

    function checaIdades($array){
        for($i=0;$i<count($array);$i++){
            if($array[$i] >= 18){
                echo "<p class='result'>$i - Maior de idade.</p>";
            }
            else{
                echo "<p class='result'>$i - Menor de idade.</p>";
            }
        }
    }
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
        <?php checaIdades($array); ?>

        <form method="POST" action="gerarPDF18.php">
            <?php
            for($i=0;$i<count($array);$i++){
                echo "<input type='hidden' value='$array[$i]' name='array[]'>";  
            }
            ?>
            
            <div class="botoes">
                <input type="submit" value="Gerar PDF" class="btn btn-primary">
            </div>
        </form>
    </main>
</body>
</html>