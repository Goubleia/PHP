<?php
    function calculaMedia($nota1, $nota2, $nota3){
        return number_format(($nota1 + $nota2 + $nota3) / 3,2);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ex5 - Media aluno</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="main.js"></script>
</head>
<body>
    <main>
        <p class="cabecalho">Exercicio 5: </br>
        Escrever um algoritmo que leia o nome de um aluno e as notas das três provas que ele obteve no semestre. No final 
        informar o nome do aluno e a sua média (aritmética).</p>

        <form method="POST" action="">
            <label>Aluno:</label>
            <input type="text" name="aluno" class="form-control">
            
            <label>Nota 1: </label>
            <input type="number" name="nota1" class="form-control">

            <label>Nota 2: </label>
            <input type="number" name="nota2" class="form-control">

            <label>Nota 3: </label>
            <input type="number" name="nota3" class="form-control">
            
            <div class="botoes">
                <input type="submit" value="Enviar" class="btn btn-primary" id="submit" name='submit'>
            </div>
        </form>

        <form method="POST" action="gerarPDF5.php">
            <?php
            if(!empty($_POST['submit']) && isset($_POST['submit'])){
                if(!empty($_POST['aluno']) && !empty($_POST['nota1']) && !empty($_POST['nota2']) && !empty($_POST['nota3'])){
                    $aluno = $_POST['aluno'];
                    $nota1 = (float) $_POST['nota1'];
                    $nota2 = (float) $_POST['nota2'];
                    $nota3 = (float) $_POST['nota3'];

                    $media = calculaMedia($nota1,$nota2,$nota3);
    
                    echo "<p class='result'>Aluno = $aluno</p>";
                    echo "<p class='result'>Media = $media</p>";

                    echo "<input type='hidden' value='$aluno' name='aluno'>";
                    echo "<input type='hidden' value='$media' name='media'>";

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