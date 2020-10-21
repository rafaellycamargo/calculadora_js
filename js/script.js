
//limpar o visor
function AC(){
    document.calculadora.visor.value="";
}


//mostrar no visor
function button(x){ 
    document.calculadora.visor.value=document.calculadora.visor.value+x;
}

//calcular e mostar resultado no visor
function igual(){ 
    var operacao = document.calculadora.visor.value;
    document.calculadora.visor.value= eval(operacao);
}
