<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ex20 - Preco de Venda -> Real</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="main.js"></script>
</head>
<body>
    <main>
        <p class="cabecalho">Exercicio 20: </br>
        A concessionária de veículos “CARANGO VELHO” está vendendo os seus veículos com desconto. Faça um 
        algoritmo que calcule e exiba o valor do desconto e o valor a ser pago pelo cliente de vários carros. O desconto 
        deverá ser calculado de acordo com o ano do veículo. Até 2000 - 12% e acima de 2000 - 7%. O sistema deverá 
        perguntar se deseja continuar calculando desconto até que a resposta seja: “(N) Não” . Informar total de carros com 
        ano até 2000 e total geral. </p>

        <form method="POST" action="">            
            <!-- <label>Carro :</label>
            <input type="text" name="carro" class="form-control"> -->

            <label>Valor :</label>
            <input type="text" name="valor" class="form-control">

            <label>Ano :</label>
            <input type="text" name="ano" class="form-control">

            <div class="botoes">
                <input type="submit" value="Enviar" class="btn btn-primary" id="submit" name="submit">
                <input type="submit" value="Parar" class="btn btn-primary" id="submit" name="submit">
            </div>
        </form>

        <div>
            <?php
            $total = 0;
            $cont2000 = 0;

            if(!empty($_POST["submit"]) && $_POST["submit"] == "Enviar"){
                // $carro=$_POST['carro'];
                $valor=$_POST['valor'];
                $ano=$_POST['ano'];

                if($ano <= 2000){
                    $valor -= $valor * (12/100);

                    $cont2000++;
                }
                else{
                    $valor -= $valor * (7/100);
                }

                $total += $valor;
            }
            elseif (!empty($_POST["submit"]) && $_POST["submit"] == "Parar"){                
                echo "<p class='result'>Carros ate 2000: $cont2000</p>";
                echo "<p class='result'>Total: R$ $total</p>";
            }
            ?>
        </div>
    </main>
</body>
</html>