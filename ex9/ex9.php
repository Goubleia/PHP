<?php
    function rendimento($Deposito){
        $Rendimento = number_format($Deposito * 70/100, 2);
        
        return $Rendimento;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ex9 - Rendimento Poupanca</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="main.js"></script>
</head>
<body>
    <main>
        <p class="cabecalho">Exercicio 9: </br>
        Faça um algoritmo que receba um valor que foi depositado e exiba o valor com rendimento após um mês. Considere fixo o juro 
        da poupança em 0,70% a. m.</p>

        <form method="POST" action="">
            <label>Deposito :</label>
            <input type="number" name="Deposito" class="form-control">

            <div class="botoes">
                <input type="submit" value="Enviar" class="btn btn-primary" id="submit" name='submit'>
            </div>
        </form>

        <form method="POST" action="gerarPDF9.php">
            <?php
            if(!empty($_POST['submit']) && isset($_POST['submit'])){
                if(!empty($_POST['Deposito'])){
                    $Deposito =  (float) $_POST["Deposito"];

                    $Rendimento = rendimento($Deposito);
                    $Final = (float) $Deposito + (float) $Rendimento;

                    echo "<p class='result'>Depositado = R$ $Deposito</p>";
                    echo "<p class='result'>Rendimento = R$ $Rendimento</p>";
                    echo "<p class='result'>Valor com rendimento = R$ $Final</p>";

                    echo "<input type='hidden' value='$Deposito' name='Deposito'>";
                    echo "<input type='hidden' value='$Rendimento' name='Rendimento'>";
                    echo "<input type='hidden' value='$Final' name='Final'>";

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