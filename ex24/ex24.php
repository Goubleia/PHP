<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ex24 - Preco de Venda -> Real</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="main.js"></script>
</head>
<body>
    <main>
        <p class="cabecalho">Exercicio 24: </br>
        Faça um algoritmo que receba “N” números e mostre positivo, negativo ou zero para cada número. </p>

        <form method="POST" action="">
            <label>Numero a ser analisado :</label>
            <input type="text" name="numero" class="form-control">

            <div class="botoes">
                <input type="submit" value="Enviar" name='submit' class="btn btn-primary" id="submit">
            </div>
        </form>
        <?php
        if(!empty($_POST['submit'])){
            $num = $_POST['numero'];

            if($num < 0){
                echo "<p class='result'>Numero negativo!</p>";
            }
            elseif($num > 0){
                echo "<p class='result'>Numero positivo!</p>";
            }
            else{
                echo "<p class='result'>Numero igual a 0!</p>";
            }
        }
        ?>
    </main>
</body>
</html>