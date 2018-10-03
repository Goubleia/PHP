<?php 
    function trocarNumero($A, $B){
        $aux = $A;
        $A = $B;
        $B = $aux;
        
        return array($A,$B);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ex6 - Mudar numeros</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="main.js"></script>
</head>
<body>
    <p class="cabecalho">Exercicio 6: </br>
    Ler dois valores para as variáveis A e B, e efetuar as trocas dos valores de forma que a variável A passe a possuir o 
    valor da variável B e a variável B passe a possuir o valor da variável A. Apresentar os valores trocados. </p>

    <main>
        <form method="POST" action="">
            <label>A :</label>
            <input type="number" name="A" class="form-control">
            
            <label>B :</label>
            <input type="number" name="B" class="form-control">

            <div class="botoes">
                <input type="submit" value="Enviar" class="btn btn-primary" id="submit" name='submit'>
            </div>
        </form>

        <form method="POST" action="gerarPDF6.php">
            <?php
            if(!empty($_POST['submit']) && isset($_POST['submit'])){
                if(!empty($_POST['A']) && !empty($_POST['B'])){
                    $A = $_POST['A'];
                    $B = (float) $_POST['B'];
                    $A1 = $A;
                    $B1 = $B;

                    $numerosTrocados = trocarNumero($A,$B);
    
                    echo "<p class='result'>Anterior A = $A</p>";
                    echo "<p class='result'>Anterior B = $B</p>";
                    echo "<p class='result'>Depois A = $numerosTrocados[0]</p>";
                    echo "<p class='result'>Depois B = $numerosTrocados[1]</p>";

                    echo "<input type='hidden' value='$A1' name='A1'>";
                    echo "<input type='hidden' value='$B1' name='B1'>";
                    echo "<input type='hidden' value='$numerosTrocados[0]' name='trocadoA'>";
                    echo "<input type='hidden' value='$numerosTrocados[1]' name='trocadoB'>";

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