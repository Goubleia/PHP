function chamaPDF(){
    var num1 = document.getElementsByName("num1");
    var num2 = document.getElementsByName("num2");

    //chamar gerarPDF.php passando os valores (talvez seja melhor criar uma funcao la para receber isso)

    $.ajax({
        type: "POST",
        data: {num1:num1, num2:num2},
        url: "gerarPDF.php",
        success: function(){
            alert("SUCESSO");
        }
    });
}