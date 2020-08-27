function calculadora(){    
    var alto = parseFloat(document.getElementById('alto').value);
    var ancho = parseFloat(document.getElementById('ancho').value);
    var largo = parseFloat(document.getElementById('largo').value);
    var peso = parseFloat(document.getElementById('peso').value);

    var codigoTransporte = document.getElementById('transporte').value;

    var codigoMedidaAlto = document.getElementById('medida1').value;
    var codigoMedidaAncho = document.getElementById('medida2').value;
    var codigoMedidaLargo = document.getElementById('medida3').value;
    
    var codigoPeso = document.getElementById('codigopeso').value;

    var cmAinches = 0.39370;
    var kgAlibras = 2.2046;

    var volumenAereo;

    if(codigoMedidaAlto==1){
        alto=alto*cmAinches;
        alert('Centímetros');
    }else if(codigoMedidaAlto==2){
        alert('Inches')
    }

    if(codigoMedidaAncho==1){
        ancho=ancho*cmAinches;
        alert('Centimetros');
    }else if(codigoMedidaAncho==2){
        alert('Inches');
    }

    if(codigoMedidaLargo==1){
        largo=largo*cmAinches;
        alert('Centimetros');
    }else if(codigoMedidaLargo==2){
        alert('Inches');
    }

    if(codigoPeso==1){
        peso=peso*kgAlibras;
        alert('Kilos');
    }else if(codigoPeso==2){
        alert('Libras');
    }

    if(codigoTransporte==1){
        //Es aereo
        alert('Transporte seleccionado: Aereo. Código: ' + codigoTransporte);
        volumenAereo=(alto*ancho*largo)/166;
        alert(volumenAereo);

    } if(codigoTransporte==2){
        //Es Marítimo
        alert('Transporte seleccionado: Marítimo. Código: ' + codigoTransporte);

    }else{
        alert('No seleccionó tipo de transporte');
    }
}


