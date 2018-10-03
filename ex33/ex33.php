<?php
function verificarTriangulo($lados){
    if (($lados[0] == $lados[1] && $lados[2] != $lados[0]) || ($lados[0] == $lados[2] && $lados[1] != $lados[0]) || ($lados[2] == $lados[1] && $lados[0] != $lados[2])){
        return 'isoscele';
    }
    elseif ($lados[0] != $lados[1] && $lados[0] != $lados[2] && $lados[1] != $lados[2]) {
        return 'escaleno';
    }
    elseif ($lados[0] == $lados[1] && $lados[0] == $lados[2] && $lados[1] == $lados[2]){
        return 'equilatero';
    }

    return null;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ex33 - Triangulos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="main.js"></script>
</head>
<body>
    <main>
        <p class="cabecalho">Exercicio 33: </br>
        Escrever um algoritmo que leia três valores inteiros e verifique se eles podem ser os lados de um triângulo. Se
        forem, informar qual o tipo de triângulo que eles formam: equilátero, isóscele ou escaleno.
        Propriedade. </p>

        <form method="POST" action="">
            <label>Primeiro lado :</label>
            <input type="text" name="lados[]" class="form-control">

            <label>Segundo lado :</label>
            <input type="text" name="lados[]" class="form-control">

            <label>Terceiro lado :</label>
            <input type="text" name="lados[]" class="form-control">
            <div class="botoes">
                <input type="submit" value="Enviar" class="btn btn-primary" id="submit" name='submit'>
            </div>
        </form>

        <?php
        if(!empty($_POST['submit']) && isset($_POST['submit'])){
            $lados = $_POST['lados'];
            if(!empty($lados[0]) && !empty($lados[1]) && !empty($lados[2])){
                $retorno = verificarTriangulo($lados);

                if($retorno == null){
                    echo "<p class='result'>Os valores nao formam um triangulo.</p>";
                }
                elseif($retorno == 'equilatero'){
                    echo "<p class='result'>Triangulo equilatero.</p>";
                }
                elseif($retorno == 'isoscele'){
                    echo "<p class='result'>Triangulo isoscele.</p>";
                }
                elseif($retorno == 'escaleno'){
                    echo "<p class='result'>Triangulo escaleno.</p>";
                }
            }
            else{
                echo "<p class='result'>Faltando valores!</p>";
            }
        }
        ?>
    </main>
</body>
</html>