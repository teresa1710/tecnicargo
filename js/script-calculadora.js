var alto = parseFloat(document.getElementById('alto').value);
var ancho = parseFloat(document.getElementById('ancho').value);
var largo = parseFloat(document.getElementById('largo').value);
var peso = parseFloat(document.getElementById('peso').value);
var cmAinches = 0.39370;

function selectTransporte(){
    var codigoTransporte = document.getElementById('transporte').value;
    alert(codigoTransporte);
}

function selectMedida(){
    var codigoMedida = document.getElementById('medida1').value;
    alert(alto);
    if(codigoMedida==1){
        //Esta en Centimetros
        var inches=alto*cmAinches;
        alert(inches);
    }

   
}