<?php
function classificacaoAluno($media){
    switch ($media) {
        case ($media >= 8 && $media <= 10):
            return 'A';
            break;
        case ($media >= 7 && $media < 8):
            return 'B';
            break;
        case ($media >= 6 && $media < 7):
            return 'C';
            break;
        case ($media >= 5 && $media < 6):
            return 'D';
            break;
        case ($media >= 0 && $media < 5):
            return 'R';
            break;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ex39 - Preco de Venda -> Real</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="main.js"></script>
</head>
<body>
    <main>
        <p class="cabecalho">Exercicio 39: </br>
        Dado o nome de um estudante, com o respectivo número de matrícula e as três notas acima mencionadas,
        desenvolva um algoritmo para calcular a nota final e a classificação de cada estudante. A classificação é dada
        conforme a tabela abaixo:</br></br>
            Nota Final Classificação</br>
            [8,10] : A</br>
            [7,8] : B</br>
            [6,7] : C</br>
            [5,6] : D</br>
            [0,5] : R</br></br>
        Imprima o nome do estudante, com o seu número, nota final e classificação.</p>

        <form method="POST" action="">
            <label>Nome aluno :</label>
            <input type="text" name="nome" class="form-control">

            <label>Matricula :</label>
            <input type="text" name="matricula" class="form-control">

            <label>Media questao anterior :</label>
            <input type="text" name="media" class="form-control">

            <div class="botoes">
                <input type="submit" value="Enviar" class="btn btn-primary" id="submit" name='submit'>
            </div>
        </form>

        <form method="POST" action="gerarPDF39.php">
            <?php
            if(!empty($_POST['submit']) && isset($_POST['submit'])){
                if(!empty($_POST['nome']) && !empty($_POST['matricula']) && !empty($_POST['media'])){
                    $nome = $_POST['nome'];
                    $matricula = $_POST['matricula'];
                    $media = $_POST['media'];
                    
                    $classificacao = classificacaoAluno($media);

                    echo "<p class='result'>Aluno = $nome</p>";
                    echo "<p class='result'>Classificacao = $classificacao</p>";
                    echo "<p class='result'>Matricula = $matricula</p>";
                    echo "<p class='result'>Media = $media</p>";

                    echo "<input type='hidden' value='$nome' name='nome'>";
                    echo "<input type='hidden' value='$classificacao' name='classificacao'>";
                    echo "<input type='hidden' value='$matricula' name='matricula'>";
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