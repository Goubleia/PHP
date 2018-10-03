function contaCliques(){
    var cont = document.getElementById('cont').value;
    debugger;
    
    cont++;

    document.getElementById('cont').value = cont;
    debugger;
    if(cont > 2){
        document.getElementById('submit').value = 'Gerar PDF'
    }
}