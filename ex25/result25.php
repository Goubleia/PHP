<?php 
    $prim = $_POST["primeiro"];
    $seg = $_POST["segundo"];

    function compararNumeros($prim,$seg){
        if($prim == $seg){
            return "iguais";
        }
        elseif ($prim > $seg) {
            return "primeiro";
        }
        else{
            return "segundo";
        }
    }

    $result = compararNumeros($prim,$seg);  
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Resultado ex25</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <main>
        <p class='result'>Primeiro numero = <?php echo $prim ?></p>
        <p class='result'>Segundo numero = <?php echo $seg ?></p>

        <?php
        if ($result == "primeiro") {
            echo "<p class='result'>Sao diferentes!</p>";
            echo "<p class='result'>O primeiro eh maior do que o segundo!</p>";
        }
        elseif ($result == "segundo"){
            echo "<p class='result'>Sao diferentes!</p>";
            echo "<p class='result'>O segundo eh maior do que o primeiro!</p>";
        }
        else{
            echo "<p class='result'>Os numeros sao iguais!</p>";
        }
        ?>        

        <form method="POST" action="gerarPDF25.php">
            <input type="hidden" value="<?php echo $prim?>" name="primeiro">
            <input type="hidden" value="<?php echo $seg?>" name="segundo">
            <input type="hidden" value="<?php echo $result?>" name="comparacao">
            
            <div class="botoes">
                <input type="submit" value="Gerar PDF" class="btn btn-primary">
            </div>
        </form>
    </main>
</body>
</html>