<?php 
    // require("pessoa.php");

    $nomes = $_POST["nomes"];
    $sexos = $_POST["sexos"];

    // $pessoas = array();
    // $pessoas = new Pessoa();

    // function criaPessoas($nomes,$sexos){
        // for($i=0;$i<count($nomes);$i++){
        //     $pessoas[$i] = new Pessoa;
        //     $pessoas[$i]->setNome($nomes[$i]);
        //     $pessoas[$i]->setSexo($sexos[$i]);
        // }
        
    //     return $pessoas;
    // }

    // $pessoas = criaPessoas($nomes,$sexos);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Resultado ex19</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <main>
        <?php
        for($i=0;$i<count($nomes);$i++){
            echo "<ul>";
            echo "<li>Pessoa $i:</li>";
            echo "<ul>";
            echo "<li>Nome = $nomes[$i]</li>";
            echo "<li>Sexo = $sexos[$i]</li>";
            echo "</ul>";
            echo "</ul>";
        }
        ?>

        <form method="POST" action="gerarPDF19.php">
            <?php
            for($i=0;$i<count($nomes);$i++){
                echo "<input type='hidden' value='$nomes[$i]' name='nomes[]'>";
                echo "<input type='hidden' value='$sexos[$i]' name='sexos[]'>";
            }
            ?>

            <div class="botoes">
                <input type="submit" value="Gerar PDF" class="btn btn-primary">
            </div>
        </form>
    </main>
</body>
</html>