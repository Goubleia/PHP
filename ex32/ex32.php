<?php
function verificaOperador($operador, $prim, $seg){
    switch ($operador) {
        case '+':
            return $prim + $seg;
            break;
        case '-':
            return $prim - $seg;
            break;
        case '*':
            return $prim * $seg;
            break;
        case '/':
            return $prim / $seg;
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
    <title>Ex32 - Ler operador</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="main.js"></script>
</head>
<body>
    <main>
        <p class="cabecalho">Exercicio 32: </br>
        Dados três valores A, B e C, em que A e B são números reais e C é um caractere, pede-se para imprimir o resultado
        da operação de A por B se C for um símbolo de operador aritmético; caso contrário deve ser impressa uma
        mensagem de operador não definido. Tratar erro de divisão por zero.</p>

        <form method="POST" action="">
            <label>Primeiro valor :</label>
            <input type="number" name="primeiro" class="form-control">

            <label>Segundo valor :</label>
            <input type="number" name="segundo" class="form-control">

            <label>Operador Aritmetico :</label>
            <input type="text" name="operador" class="form-control">
            <div class="botoes">
                <input type="submit" value="Enviar" class="btn btn-primary" id="submit" name='submit'>
            </div>
        </form>

        <?php
        if(!empty($_POST['submit']) && isset($_POST['submit'])){
            if(!empty($_POST['primeiro']) && !empty($_POST['segundo'])){
                $prim = $_POST['primeiro'];
                $seg = $_POST['segundo'];
                $operador = $_POST['operador'];
                $resultado = 0;

                $resultado = verificaOperador($operador, $prim, $seg);

                if($resultado == null){
                    echo "<p class='result'>Operador nao definido!</p>";
                }
                elseif($resultado != 0){
                    echo "<p class='result'>Resultado = $resultado</p>";
                }
            }
            else{
                echo "<p class='result'>Digite um valor!</p>";
            }
        }
        ?>
    </main>
</body>
</html>