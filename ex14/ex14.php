<?php
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
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ex14  - Numero maior</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="main.js"></script>
</head>
<body>
    <main>
        <p class="cabecalho">Exercicio 14: </br>
        Escrever um algoritmo que leia dois valores inteiro distintos e informe qual é o maior.</p>

        <form method="POST" action="">
            <label>Primeiro numero inteiro :</label>
            <input type="text" name="primeiro" class="form-control">

            <label>Segundo numero inteiro :</label>
            <input type="text" name="segundo" class="form-control">

            <div class="botoes">
                <input type="submit" value="Enviar" class="btn btn-primary" id="submit" name='submit'>
            </div>
        </form>

        <form method="POST" action="gerarPDF14.php">
            <?php
            if(!empty($_POST['submit']) && isset($_POST['submit'])){
                if(!empty($_POST['primeiro']) && !empty($_POST['segundo'])){
                    $prim = $_POST["primeiro"];
                    $seg = $_POST["segundo"];

                    $result = compararNumeros($prim,$seg);

                    if ($result == "primeiro") {
                        echo "<p class='result'>O primeiro eh maior do que o segundo!</p>";
                    }
                    elseif ($result == "segundo"){
                        echo "<p class='result'>O segundo eh maior do que o primeiro!</p>";
                    }
                    else{
                        echo "<p class='result'>Os numeros sao iguais!</p>";
                    }

                    echo "<input type='hidden' value='$prim' name='primeiro'>";
                    echo "<input type='hidden' value='$seg' name='segundo'>";
                    echo "<input type='hidden' value='$result' name='comparacao'>";

                    echo "<div class='botoes'>";
                    echo "<input type='submit' value='Gerar PDF' class='btn btn-primary'>";
                    echo "</div>";

                }
                else{
                    echo "<p class='result'>Faltam dados!</p>";
                }
            }
            ?>
        </form>
    </main>
</body>
</html>