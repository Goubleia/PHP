<?php
function salarioProfessor($nivel, $horas){
    switch ($nivel) {
        case '1':
            return 12 * $horas;
            break;
        case '2':
            return 17 * $horas;
            break;
        case '3':
            return 25 * $horas;
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
    <title>Ex34 - Pagamento Professor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="main.js"></script>
</head>
<body>
    <main>
        <p class="cabecalho">Exercicio 34: </br>
        A escola “APRENDER” faz o pagamento de seus professores por hora/aula. Faça um algoritmo que calcule e exiba o
        salário de um professor. Sabe-se que o valor da hora/aula segue a tabela abaixo:
            <ul>
                <li>Professor Nível 1 R$12,00 por hora/aula</li>
                <li>Professor Nível 2 R$17,00 por hora/aula</li>
                <li>Professor Nível 3 R$25,00 por hora/aula</li>
            </ul></p>

        <form method="POST" action="">
            <label>Nivel do professor (1, 2, 3) :</label>
            <input type="text" name="nivel" class="form-control">

            <label>Horas de aula :</label>
            <input type="text" name="horas" class="form-control">

            <div class="botoes">
                <input type="submit" value="Enviar" class="btn btn-primary" id="submit" name='submit'>
            </div>
        </form>
        <?php
        if(!empty($_POST['submit']) && isset($_POST['submit'])){
            $nivel = $_POST['nivel'];
            $horas = $_POST['horas'];
            if(!empty($nivel) && !empty($horas)){
                $salario = salarioProfessor($nivel, $horas);

                if($salario == null){
                    echo "<p class='result'>Nivel indisponivel!</p>";
                }
                else{
                    echo "<p class='result'>Salario = R$ $salario,00</p>";
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