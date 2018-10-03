<?php
function calculaLuz($tipo, $gasto){
    switch ($tipo) {
        case '1':
            return $gasto * 0.6;
            break;
        case '2':
            return $gasto * 0.48;
            break;
        case '3':
            return $gasto * 1.29;
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
    <title>Ex35 - Conta de Luz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="main.js"></script>
</head>
<body>
    <main>
        <p class="cabecalho">Exercicio 36: </br>
        Faça um algoritmo que calcule o valor da conta de luz de uma pessoa. Sabe-se que o cálculo da conta de luz segue
        a tabela abaixo:</br></br>
            Tipo de Cliente Valor do KW/h</br>
            1 (Residência) 0,60</br>
            2 (Comércio) 0,48</br>
            3 (Indústria) 1,29</p>

        <form method="POST" action="">
            <label>Tipo de cliente :</label>
            <div class="radio">
                <label><input type="radio" value="1" name='tipo'>Residencia</label>
            </div>
            <div class="radio">
                <label><input type="radio" value="2" name='tipo'>Comercio</label>
            </div>
            <div class="radio">
                <label><input type="radio" value="3" name='tipo'>Industria</label>
            </div>

            <label>KW/h de gasto :</label>
            <input type="text" name="gasto" class="form-control">

            <div class="botoes">
                <input type="submit" value="Enviar" class="btn btn-primary" id="submit" name='submit'>
            </div>
        </form>
        <?php
        if(!empty($_POST['submit']) && isset($_POST['submit'])){
            if(!empty($_POST['tipo']) && !empty($_POST['gasto'])){
                $gasto = $_POST['gasto'];
                $tipo = $_POST['tipo'];
                $conta = calculaLuz($tipo, $gasto);

                if($conta == null){
                    echo "<p class='result'>Tipo de cliente nao mapeado!</p>";
                }
                else{
                    echo "<p class='result'>Gasto = R$ $conta</p>";
                }
            }
            else{
                echo "<p class='result'>Faltam dados!</p>";
            }
        }
        ?>
    </main>
</body>
</html>