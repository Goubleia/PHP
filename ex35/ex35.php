<?php
function categoriaNadador($idade){
    switch ($idade) {
        case ($idade >= 5 && $idade <= 7):
            return 'Infantil A';
            break;
        case ($idade >= 8 && $idade <= 10):
            return 'Infantil B';
            break;
        case ($idade >= 11 && $idade <= 13):
            return 'Juvenil A';
            break;
        case ($idade >= 14 && $idade <= 17):
            return 'Juvenil B';
            break;
        case ($idade >= 18 && $idade <= 25):
            return 'Senior';
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
    <title>Ex35 - Categoria Nadador</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="main.js"></script>
</head>
<body>
    <main>
        <p class="cabecalho">Exercicio 35: </br>
        Elabore um algoritmo que, dada a idade de um nadador. Classifique-o em uma das seguintes categorias:
            </br></br>
            Infantil A = 5 - 7 anos</br>
            Infantil B = 8 - 10 anos</br>
            Juvenil A = 11- 13 anos</br>
            Juvenil B = 14 - 17 anos</br>
            Sênior = 18 - 25 anos</br></br>
        Apresentar mensagem “idade fora da faixa etária” quando for outro ano não contemplado.</p>

        <form method="POST" action="">
            <label>Idade do nadador :</label>
            <input type="number" name="idade" class="form-control">

            <div class="botoes">
                <input type="submit" value="Enviar" class="btn btn-primary" id="submit" name='submit'>
            </div>
        </form>
        <?php
        if(!empty($_POST['submit']) && isset($_POST['submit'])){
            $idade = $_POST['idade'];
            if(!empty($idade)){
                $categoria = categoriaNadador($idade);

                if($categoria == null){
                    echo "<p class='result'>Idade fora da faixa etária!</p>";
                }
                else{
                    echo "<p class='result'>Categoria = $categoria</p>";
                }
            }
            else{
                echo "<p class='result'>Digite a idade!</p>";
            }
        }
        ?>
    </main>
</body>
</html>