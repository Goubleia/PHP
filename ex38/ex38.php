<?php
function mediaPonderada($notaLaboratorio, $notaSemestral, $notaFinal){
    return (($notaLaboratorio * 2) + ($notaSemestral * 3) + ($notaFinal * 5)) / 10;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ex38 - Media Aluno</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="main.js"></script>
</head>
<body>
    <main>
        <p class="cabecalho">Exercicio 38: </br>
        Em um curso de Ciência da Computação a nota do estudante é calculada a partir de três notas atribuídas,
        respectivamente, a um trabalho de laboratório, a uma avaliação semestral e a um exame final. As notas variam, de 0
        a 10 e a nota final é a média ponderada das três notas mencionadas. A tabela abaixo fornece os pesos:</br></br>
            Laboratório: Peso 2</br>
            Avaliação semestral: Peso 3</br>
            Exame final: Peso 5</p>

        <form method="POST" action="">
            <label>Nota trabalho laboratorio :</label>
            <input type="number" name="laboratorio" class="form-control">

            <label>Nota avaliacao semestral :</label>
            <input type="number" name="semestral" class="form-control">

            <label>Nota exame final :</label>
            <input type="number" name="final" class="form-control">
            <div class="botoes">
                <input type="submit" value="Enviar" class="btn btn-primary" id="submit" name='submit'>
            </div>
        </form>

        <form method="POST" action="gerarPDF38.php">
            <?php
            if(!empty($_POST['submit']) && isset($_POST['submit'])){
                if(!empty($_POST['laboratorio']) && !empty($_POST['semestral']) && !empty($_POST['final'])){
                    $notaLaboratorio = $_POST['laboratorio'];
                    $notaSemestral = $_POST['semestral'];
                    $notaFinal = $_POST['final'];
                    
                    if(($notaLaboratorio > 0 && $notaLaboratorio < 10) && ($notaSemestral > 0 && $notaSemestral < 10) && ($notaFinal > 0 && $notaFinal < 10)){
                        $media = mediaPonderada($notaLaboratorio, $notaSemestral, $notaFinal);

                        echo "<p class='result'>Media aluno = $media</p>";

                        echo "<input type='hidden' value='$media' name='media'>";

                        echo "<div class='botoes'>";
                        echo "<input type='submit' value='Gerar PDF' class='btn btn-primary'>";
                        echo "</div>";
                    }
                    else{
                        echo "<p class='result'>Nota(s) invalida(s)!</p>";
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