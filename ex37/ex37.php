<?php
function pesoIdeal($idade, $altura, $sexo){
    if($sexo == 'M'){
        switch ($altura) {
            case ($altura > 1.70):
                switch ($idade) {
                    case ($idade <= 20):
                        return (72.7 * $altura) - 58;
                        break;
                    case ($idade >= 20 && $idade <= 39):
                        return (72.7 * $altura) - 53;
                        break;
                    case ($idade >= 40):
                        return (72.7 * $altura) - 45;
                        break;
                }
                break;

            case ($altura <= 1.70):
                switch ($idade) {
                    case ($idade <= 40):
                        return (72.7 * $altura) - 50;
                        break;
                    case ($idade > 40):
                        return (72.7 * $altura) - 58;
                        break;
                }
                break;
        }
    }
    else{
        switch ($altura) {
            case ($altura > 1.50):
                return (62.1 * $altura) - 44.7;
                break;

            case ($altura <= 1.50):
                switch ($idade) {
                    case ($idade >= 35):
                        return (62.1 * $altura) - 45;
                        break;
                    case ($idade > 40):
                        return (62.1 * $altura) - 49;
                        break;
                }
                break;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ex37 - Peso Ideal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="main.js"></script>
</head>
<body>
    <main>
        <p class="cabecalho">Exercicio 37: </br>
        Faça um algoritmo que leia o nome, o sexo, a altura e a idade de uma pessoa. Calcule e mostre nome e o seu peso
        ideal de acordo com as seguintes características da pessoa: </p>

        <form method="POST" action="">
            <label>Nome :</label>
            <input type="text" name="nome" class="form-control">

            <label>Sexo :</label>
            <div class="radio">
                <label><input type="radio" value="M" name='sexo'>Masculino</label>
            </div>
            <div class="radio">
                <label><input type="radio" value="F" name='sexo'>Feminino</label>
            </div>

            <label>Altura (m.cm) :</label>
            <input type="text" name="altura" class="form-control">

            <label>Idade :</label>
            <input type="text" name="idade" class="form-control">
            <div class="botoes">
                <input type="submit" value="Enviar" class="btn btn-primary" id="submit" name='submit'>
            </div>
        </form>
        
        <form method="POST" action="gerarPDF37.php">
            <?php
            if(!empty($_POST['submit']) && isset($_POST['submit'])){
                if(!empty($_POST['nome']) && !empty($_POST['altura']) && !empty($_POST['idade']) && !empty($_POST['sexo'])){
                    $nome = $_POST['nome'];
                    $altura = $_POST['altura'];
                    $idade = $_POST['idade'];
                    $sexo = $_POST['sexo'];

                    $peso = pesoIdeal($idade, $altura, $sexo);

                    echo "<p class='result'>Pessoa = $nome</p>";
                    echo "<p class='result'>Peso ideal = $peso Kg</p>";

                    echo "<input type='hidden' value='$nome' name='nome'>";
                    echo "<input type='hidden' value='$peso' name='peso'>";

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