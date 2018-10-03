<?php
function insertionSort($n, &$numeros){
    for($i=0; $i<$n; $i++){
        for($j=$i+1; $j< $n; $j++){
            if($numeros[$i] > $numeros[$j]){
                $aux = $numeros[$i];
                $numeros[$i] = $numeros[$j];
                $numeros[$j] = $aux;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ex31 - Valores crescentes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="main.js"></script>
</head>
<body>
    <main>
        <p class="cabecalho">Exercicio 31: </br>
        Escrever um algoritmo que leia três valores inteiros distintos e os escreva em ordem crescente.</p>

        <form method="POST" action="">
            <label>Primeiro Valor :</label>
            <input type="number" name="numeros[]" class="form-control">

            <label>Segundo Valor :</label>
            <input type="number" name="numeros[]" class="form-control">

            <label>Terceiro Valor :</label>
            <input type="number" name="numeros[]" class="form-control">
            <div class="botoes">
                <input type="submit" value="Enviar" class="btn btn-primary" id="submit" name='submit'>
            </div>
        </form>
        <?php
        if(!empty($_POST['submit']) && isset($_POST['submit'])){
            $numeros = $_POST['numeros'];
            $n = sizeof($numeros);
            //echo 'TESTE!';
            if($numeros[0] == $numeros[1] || $numeros[0] == $numeros[2] || $numeros[1] == $numeros[2]){
                echo "<p class='result'>Os numeros devem ser distintos!</p>";
            }
            else{
                insertionSort($n, $numeros);
                
                echo "<p class='result'>Ordem Crescente :</p>";
                echo "<p class='result'>";
                for($i=0; $i<$n; $i++){
                    echo "$numeros[$i]&nbsp&nbsp&nbsp";
                }
                echo "</p>";
            }
        }
        ?>
    </main>
</body>
</html>