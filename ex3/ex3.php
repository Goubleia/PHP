<?php
    function consumo($num1, $num2){
      return $num1 / $num2;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ex3 - Consumo medio automovel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="main.js"></script>
</head>
<body>
    <main>
        <p class="cabecalho">Exercicio 3: </br>
        Escrever um algoritmo para determinar o consumo médio de um automóvel sendo fornecida a distância 
        total percorrida pelo automóvel e o total de combustível gasto. </p>

        <form method="POST" action="">
            <label>Digite a distancia (Km):</label>
            <input type="number" name="dist" class="form-control">
            
            <label>Digite o total de combustivel (L): </label>
            <input type="number" name="comb" class="form-control">

            <div class="botoes">
                <input type="submit" value="Enviar" class="btn btn-primary" id="submit" name='submit'>
            </div>        
        </form>

         <form method="POST" action="gerarPDF3.php">
            <?php
            if(!empty($_POST['submit']) && isset($_POST['submit'])){
                if(!empty($_POST['dist']) && !empty($_POST['comb'])){
                    $distancia = $_POST['dist'];
                    $combustivel = $_POST['comb'];

                    $consumo = consumo($distancia,$combustivel);
    
                    echo "<p class='result'>Consumo medio = $consumo Km/L</p>";

                    echo "<input type='hidden' value='$consumo' name='consumo'>";

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