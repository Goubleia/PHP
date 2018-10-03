<?php
function categoriaSeguro($idade, $grupo){
    switch ($idade) {
        case ($idade >= 17 && $idade <= 20):
            switch ($grupo) {
                case 'baixo':
                    return 1;
                    break;
                case 'medio':
                    return 2;
                    break;
                case 'alto':
                    return 3;
                    break;
            }
            break;
        
        case ($idade >= 21 && $idade <= 24):
            switch ($grupo) {
                case 'baixo':
                    return 2;
                    break;
                case 'medio':
                    return 3;
                    break;
                case 'alto':
                    return 4;
                    break;
            }
            break;

        case ($idade >= 25 && $idade <= 34):
            switch ($grupo) {
                case 'baixo':
                    return 3;
                    break;
                case 'medio':
                    return 4;
                    break;
                case 'alto':
                    return 5;
                    break;
            }
            break;

        case ($idade >= 35 && $idade <= 64):
            switch ($grupo) {
                case 'baixo':
                    return 4;
                    break;
                case 'medio':
                    return 5;
                    break;
                case 'alto':
                    return 6;
                    break;
            }
            break;

        case ($idade >= 65 && $idade <= 70):
            switch ($grupo) {
                case 'baixo':
                    return 7;
                    break;
                case 'medio':
                    return 8;
                    break;
                case 'alto':
                    return 9;
                    break;
            }
            break;

        default:
            return null;
            break;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ex40 - Categoria de Seguro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="main.js"></script>
</head>
<body>
    <main>
        <p class="cabecalho">Exercicio 40: </br>
        Uma Companhia de Seguros possui nove categorias de seguro baseadas na idade e ocupação do segurado. Somente
        pessoas com pelo menos 17 anos e não mais de 70 anos podem adquirir apólices de seguro. Quanto às classes de
        ocupações, foram definidos três grupos de risco. A tabela abaixo fornece as categorias em função da faixa etária e do
        grupo de risco. Dados nome, idade e grupo de risco, determinar a categoria do pretendente à aquisição de tal seguro.
        Imprimir o nome a idade e a categoria do pretendente, e , caso a idade não esteja na faixa necessária, imprimir uma
        mensagem. </p>

        <form method="POST" action="">
            <label>Nome :</label>
            <input type="text" name="nome" class="form-control">

            <label>Idade :</label>
            <input type="text" name="idade" class="form-control">

            <label>Sexo :</label>
            <div class="radio">
                <label><input type="radio" value="baixo" name='grupo'>Baixo</label>
            </div>
            <div class="radio">
                <label><input type="radio" value="medio" name='grupo'>Medio</label>
            </div>
            <div class="radio">
                <label><input type="radio" value="alto" name='grupo'>Alto</label>
            </div>

            <div class="botoes">
                <input type="submit" value="Enviar" class="btn btn-primary" id="submit" name='submit'>
            </div>
        </form>

        <form method="POST" action="gerarPDF40.php">
            <?php
            if(!empty($_POST['submit']) && isset($_POST['submit'])){
                if(!empty($_POST['nome']) && !empty($_POST['idade']) && !empty($_POST['grupo'])){
                    $nome = $_POST['nome'];
                    $idade = $_POST['idade'];
                    $grupo = $_POST['grupo'];
                    
                    $categoria = categoriaSeguro($idade, $grupo);

                    if($categoria != null){
                        echo "<p class='result'>Aluno = $nome</p>";
                        echo "<p class='result'>Idade = $idade</p>";
                        echo "<p class='result'>Categoria = $categoria</p>";

                        echo "<input type='hidden' value='$nome' name='nome'>";
                        echo "<input type='hidden' value='$idade' name='idade'>";
                        echo "<input type='hidden' value='$categoria' name='categoria'>";

                        echo "<div class='botoes'>";
                        echo "<input type='submit' value='Gerar PDF' class='btn btn-primary'>";
                        echo "</div>";
                    }
                    else{
                        echo "<p class='result'>Idade fora da faixa!</p>";
                    }
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