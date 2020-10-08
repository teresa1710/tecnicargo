$(document).ready(function(){
    var Servicios = $('#servicios').offset().top;
    var Procedimiento = $('#procedimiento').offset().top;
    var Tiendas = $('#tiendas').offset().top;
    var Precios = $('#precios').offset().top;
    var Ubicacion = $('#ubicacion').offset().top;
    var Contacto = $('#contacto').offset().top;
    var TiendasPasos = $('#tiendas').offset().top;
    var UbicacionPasos = $('#ubicacion').offset().top;
    var ContactoPasos = $('#contacto').offset().top;
    var BotonContactoAzul = $('#contacto').offset().top;
    var BotonContactoBlanco = $('#contacto').offset().top;

    $('#btn-servicios').on('click', function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 500
        }, 500);
    });

    $('#btn-pasos').on('click', function(f){
        f.preventDefault();
        $('html, body').animate({
            scrollTop: 1500
        }, 500);
    });

    $('#btn-tiendas').on('click', function(g){
        g.preventDefault();
        $('html, body').animate({
            scrollTop: 3300
        }, 500);
    });

    $('#btn-precios').on('click', function(h){
        h.preventDefault();
        $('html, body').animate({
            scrollTop: 4210
        }, 500);
    });

    $('#btn-ubicacion').on('click', function(i){
        i.preventDefault();
        $('html, body').animate({
            scrollTop: 5200
        }, 500);
    });
    
    $('#btn-contacto').on('click', function(j){
        j.preventDefault();
        $('html, body').animate({
            scrollTop: 6000
        }, 500);
    });

    $('#btn-tiendas-pasos').on('click', function(k){
        k.preventDefault();
        $('html, body').animate({
            scrollTop: 3300
        }, 500);
    });

    $('#btn-ubicacion-pasos').on('click', function(l){
        l.preventDefault();
        $('html, body').animate({
            scrollTop: 5200
        }, 500);
    });

    $('#btn-contacto-pasos').on('click', function(m){
        m.preventDefault();
        $('html, body').animate({
            scrollTop: 5200
        }, 500);
    });

    $('#btn-contacto-azul').on('click', function(n){
        n.preventDefault();
        $('html, body').animate({
            scrollTop: 6000
        }, 500);
    });

    $('#btn-contacto-blanco').on('click', function(o){
        o.preventDefault();
        $('html, body').animate({
            scrollTop: 6000
        }, 500);
    });
    
})