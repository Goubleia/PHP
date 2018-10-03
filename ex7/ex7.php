<?php
    function transformarTemp($C){
        $F=number_format((9*$C+160) / 5, 1);
        
        return $F;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ex7 - Ler Graus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="main.js"></script>
</head>
<body>
    <p class="cabecalho">Exercicio 7: </br>
    Ler uma temperatura em graus Celsius e apresentá-la convertida em graus Fahrenheit. A fórmula de conversão é: 
    F=(9*C+160) / 5, sendo F a temperatura em Fahrenheit e C a temperatura em Celsius.</p>

    <main>
        <form method="POST" action="">
            <label>Graus Celsius :</label>
            <input type="number" name="Celsius" class="form-control">

            <div class="botoes">
                <input type="submit" value="Enviar" class="btn btn-primary" id="submit" name='submit'>
            </div>
        </form>

        <form method="POST" action="gerarPDF7.php">
            <?php
            if(!empty($_POST['submit']) && isset($_POST['submit'])){
                if(!empty($_POST['Celsius'])){
                    $C = $_POST['Celsius'];

                    $F = transformarTemp($C);
    
                    echo "<p class='result'>Celsius = $C</p>";
                    echo "<p class='result'>Fahrenheit = $F</p>";

                    echo "<input type='hidden' value='$C' name='C'>";
                    echo "<input type='hidden' value='$F' name='F'>";

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