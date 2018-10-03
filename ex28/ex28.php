<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ex28 - Calculo salario funcionario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="ex28.js"></script>
</head>
<body>
    <main>
        <p class="cabecalho">Exercicio 28: </br>
        Escrever um algoritmo para uma empresa que decide dar um reajuste a seus 584 funcionários de acordo com os
        seguintes critérios:
            a) 50% para aqueles que ganham menos do que três salários mínimos;
            b) 20% para aqueles que ganham entre três até dez salários mínimos;
            c) 15% para aqueles que ganham acima de dez até vinte salários mínimos;
            d) 10% para os demais funcionários.
        Leia o nome do funcionário, seu salário e o valor do salário mínimo. Calcule o seu novo salário reajustado. Escrever o
        nome do funcionário, o reajuste e seu novo salário. Calcule o quanto a empresa vai aumentar sua folha de pagamento.</p>
        
        <!-- Fazer um contador de cliques e quando chegar na quantidade que eu quero, parar e gerar o pdf -->

        <form method="POST" action="">
                 <label>Nome funcionario :</label>
                 <input type='text' name='nome' class='form-control'>

                 <label>Salario :</label>
                 <input type='text' name='salario' class='form-control'>

                 <label>Salario Minimo :</label>
                 <input type='text' name='salarioMinimo' class='form-control'>
            <div class="botoes">
                <input type="submit" value="Enviar" class="btn btn-primary" id="submit" name='submit'>
            </div>
        </form>

        <!-- <input type="hidden" id="cont"> -->

        <?php
        if(!empty($_POST['submit']) && isset($_POST['submit'])){
            $nome = $_POST['nome'];
            $salario = (float) $_POST['salario'];
            $salarioMinimo = (float) $_POST['salarioMinimo'];
            $acrescimo = 0;
            
            if($salario < (3*$salarioMinimo)){
                $acrescimo += $salario * (50/100);

                $salario += $acrescimo;
            }
            elseif($salario <= (10*$salarioMinimo)){
                $acrescimo += $salario * (20/100);

                $salario += $acrescimo;
            }
            elseif($salario <= (20*$salarioMinimo)){
                $acrescimo += $salario * (15/100);
                
                $salario += $acrescimo;
            }
            else{
                $acrescimo += $salario * (10/100);

                $salario += $acrescimo;
            }

            echo "<p class='result'>Funcionario = $nome</p>";
            echo "<p class='result'>Reajuste = R$ $acrescimo</p>";
            echo "<p class='result'>Salario com reajuste = R$ $salario</p>";
        }
        ?>
    </main>
</body>
</html>