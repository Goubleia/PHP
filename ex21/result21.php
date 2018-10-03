<?php 
require('pessoa.php');

    // function criaPessoas($nomes,$sexos,$idades,$saudes,$pessoas): object{
    //     for($i=0;$i<count($nomes);$i++){
    //         $pessoa = new Pessoa($nomes[$i],$sexos[$i],$saudes[$i],$idades[$i]);

    //         $pessoas[$i] = $pessoa; 
    //     }
        
    //     // return new Pessoa('r','t','y','u');
    //     return $pessoas;
    // }

    $nomes = $_POST["nomes"];
    $sexos = $_POST["sexos"];
    $idades = $_POST["idades"];
    $saudes = $_POST["saudes"];
    $pessoas = (object)[];

    for($i=0;$i<count($nomes);$i++){
        $pessoa = new Pessoa($nomes[$i],$sexos[$i],$saudes[$i],$idades[$i]);

        $pessoas[$i] = $pessoa; 
    }

    $pessoas = criaPessoas($nomes,$sexos,$idades,$saudes,$pessoas);  
    
    echo $pessoas->getNome();
?>
<!--
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Resultado ex2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <main>
        <p class='result'>Preco de custo = R$ <?php echo $Custo ?></p>
        <p class='result'>Percentual = <?php echo $Percentual ?>%</p>
        <p class='result'>Preco de venda = R$ <?php echo $Venda ?></p>

        <form method="POST" action="gerarPDF21.php">
            <input type="hidden" value="<?php echo $Custo?>" name="Custo">
            <input type="hidden" value="<?php echo $Percentual?>" name="Percentual">
            <input type="hidden" value="<?php echo $Venda?>" name="Venda">
            
            <div class="botoes">
                <input type="submit" value="Gerar PDF" class="btn btn-primary">
            </div>
        </form>
    </main>
</body>
</html>-->