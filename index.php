<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TecniCargo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" class="stylesheet">    
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css" class="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
    
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/links.js"></script>

</head>
<body>
    <header>
        <div class="menu-bg row"> 
            <div class="col-md-4 imagen-menu-bg">
                <img class="imagen-menu" src="img/logodef.PNG" alt="">
            </div>

            <div class="col-md-8">
                <nav class="menu navbar navbar-expand-lg">
                    <button class="ml-auto navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="calculadora.html" class="nav-link">Calculadora</a>
                            </li>
                       
                            <li class="nav-item active">
                                <a class="nav-link" href="#" id="btn-servicios">Servicios<span class="sr-only">(current)</span></a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#" id="btn-pasos">Procedimiento</a>
                            </li>
                            
                            <li class="nav-item">
                                <a href="#" class="nav-link" id="btn-tiendas">Tiendas</a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link" id="btn-precios">Precios</a>
                            </li>
                            
                            <li class="nav-item">
                                <a href="#" class="nav-link" id="btn-ubicacion">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>          
        </div>

        <div>
            <div class="row">
                <div class="col">
                    <div id="carrusel" class="carousel slide" data-ride="carrusel">
                        <ol class="carousel-indicators"> 
                        <!--Indicadores-->
                            <li data-target="#carrusel" data-slide-to="0" class="active"></li>
                            <li data-target="#carrusel" data-slide-to="1"></li>
                            <li data-target="#carrusel" data-slide-to="2"></li>
                            <li data-target="#carrusel" data-slide-to="3"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block imagen-carrusel" src="img/bg4-azul.jpg" alt="First slide">
                                <div class="carousel-caption">
                                    <h2 class="texto-carrusel-1">¡Bienvenido a Tecnicargo!</h2>
                                </div>
                            </div>
                                                                    
                            <div class="carousel-item">
                                <img class="d-block imagen-carrusel" src="img/bg5.jpg" alt="Third slide">
                                <div class="carousel-caption">
                                    <h2 class="texto-carrusel-3">¡Realizamos cargas Marítimas en dos semanas!</h2>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img class="d-block imagen-carrusel" src="img/ccs1.jpg" alt="Second slide">
                                <div class="carousel-caption">
                                    <h2 class="texto-carrusel-2">Enviamos tu carga desde la ciudad de Miami hasta Venezuela</h2>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img class="d-block imagen-carrusel" src="img/bg10.jpg" alt="Second slide">
                                <div class="carousel-caption">
                                    <h2 class="texto-carrusel-4">¡Realizamos tu carga Aérea en una semana!</h2>
                                </div>
                            </div>
                        </div>
                        
                        <a class="carousel-control-prev" href="#carrusel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>

                        <a class="carousel-control-next" href="#carrusel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <section class="main">
        <section class="servicios" id="servicios">
            <div class="container">
                <div class="row">                   
                    <div class="col-md-12">
                        <h3 class="titulo">Servicios</h3>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-3">
                        <img class="icono rounded mx-auto d-block" src="Iconos/avion.png" alt="">
                        <p class="texto-icono">Envía tu carga de forma <span class="negrita">aérea </span>con tiempo mínimo de una semana</p>
                    </div>

                    <div class="col-md-3">
                        <img class="icono rounded mx-auto d-block" src="Iconos/barco.png" alt="">
                        <p class="texto-icono">Envía tu carga de forma <span class="negrita">marítima </span>con tiempo minimo de dos semanas</p>
                    </div>

                    <div class="col-md-3">
                        <img class="icono rounded mx-auto d-block" src="Iconos/caja.png" alt="">
                        <p class="texto-icono">Envíamos tu paquete dependiendo del <span class="negrita">tamaño</span> o <span class="negrita">peso</span></p>
                    </div>

                    <div class="col-md-3">
                        <img class="icono rounded mx-auto d-block" src="Iconos/mail-box.png" alt="">
                        <p class="texto-icono">Con el envío de tu primer paquete creamos un casillero para ti completamente <span class="negrita">gratis</span></p>
                    </div>


                </div>
            </div>
        </section>

        <section class="procedimiento" id="procedimiento">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 titulo-procedimiento">    
                        <h3 class="titulo">Procedimiento</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-4 col-xs-4 card-movil">
                                <div class="card">
                                    <img class="card-imagen card-img-top" src="img/pasos1.jpg" alt="Compra">
                                    
                                    <div class="card-body">
                                        <p class="card-text card-azul"> 1- Realizar compras Online</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-8 col-xs-6 card-texto">
                                <p class="procedimiento-texto"> <span class="procedimiento-azul">Realiza tus compras On-Line </span>en los sitios web de tu preferencia o en alguno de nuestros sitios recomendados que puedes ver <a href="#" class="font-italic" id="btn-tiendas-pasos">aquí</a></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-8 card-texto">
                                <p class="procedimiento-texto card-derecha"><span class="procedimiento-naranja">Envía tu compra a la dirección </span>de nuestro almacén en la ciudad de Miami la cual puedes ver <a href="#" id="btn-ubicacion-pasos" class="font-italic">aquí</a></p>
                            </div>

                            <div class="col-sm-4 card-movil">
                                <div class="card">
                                    <img class="card-imagen card-img-top" src="img/pasos2.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text card-naranja"> 2- Enviar a nuestra dirección </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-4 card-movil">
                                <div class="card">
                                    <img class="card-imagen card-img-top" src="img/pasos3.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text card-azul"> 3- Contactanos</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-8 card-texto">
                                <p class="procedimiento-texto"> <span class="procedimiento-azul">Contáctanos </span>especificando tu pedido via Whastapp a nuestros números telefónicos o a nuestro correo electrónico los cuales puedes encontrar <a href="#" id="btn-contacto-pasos" class="font-italic">aquí</a></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-8 card-texto">
                                <p class="procedimiento-texto card-derecha"> <span class="procedimiento-naranja">Realiza el pago correspondiente </span>al monto total de tu compra y especifica la dirección a la cual deseas que llegue tu paquete para proximamente enviarlo hasta donde necesites</p>
                            </div>

                            <div class="col-sm-4 card-movil">
                                <div class="card">
                                    <img class="card-imagen card-img-top" src="img/pasos4.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text card-naranja"> 4- Realizar pago y Envío </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                                                
            </div>
        </section>

        <section class="tiendas" id="tiendas">
            <div class="container">
                <div class="row row-titulo">
                    <div class="col-md-12 titulo-procedimiento">    
                        <h3 class="titulo">Tiendas Aliadas</h3>
                    </div>
                </div>

                <div class="row primera-fila text-center">
                    <div class="col-md-4">
                        <a href="https://www.walmart.com/" target="_blank"><img class="marca" src="img/walmart.png" alt=""></a>
                    </div>

                    <div class="col-md-4">
                        <a href="https://www.target.com/" target="_blank"><img class="marca" src="img/target.png" alt=""></a>
                    </div>

                    <div class="col-md-4">
                        <a id="costco" href="https://www.costco.com/" target="_blank"><img class="marca" src="img/costco-wholesale.png" alt=""></a>
                    </div>
                </div>

                <div class="row segunda-fila text-center">
                    <div class="col-md-3">
                        <a href="https://www.amazon.com/" target="_blank"><img class="marca" src="img/amazon-2.png" alt=""></a>
                    </div>

                    <div class="col-md-3">
                        <a id="homedepot" href="https://www.homedepot.com/" target="_blank"><img class="marca-grande" src="img/home depot.png" alt=""></a>
                    </div>

                    <div class="col-md-3">
                        <a href="https://www.bestbuy.com/" target="_blank"><img class="marca-grande" src="img/best-buy.png" alt=""></a>
                    </div>

                    <div class="col-md-3">
                        <a href="https://www.sephora.com/" target="_blank"><img class="marca" src="img/sephora.png" alt=""></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="precios" id="precios">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="titulo">Precios</h3>
                    </div>                  
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="azul">
                            <p class="nombre">Marítimo</p>
                            <p class="precio">$30</p>
                            <ul class="caracteristicas">
                                <li>El peso que desees</li>
                                <li>15 x 20 x 15</li>
                                <li>Tres semanas</li>
                            </ul>
                            <a href="#" id="btn-contacto-azul" class="btn btn-azul azul">Contactar</a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="blanco">
                            <p class="nombre">Aéreo</p>
                            <p class="precio">$40</p>
                            <ul class="caracteristicas">
                                <li>10 LB. </li>
                                <li>10 x 10 x 10</li>
                                <li>Una semana</li>
                            </ul>
                            <a href="#" id="btn-contacto-blanco" class="btn btn-blanco blanco">Contactar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ubicacion" id="ubicacion">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h3 class="titulo">Contacto</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="direccion">
                            <p class="parrafo-uno">7102 NW 50th St.</p>
                            <p>Miami, Florida - 33166</p>
                        </div>

                        <div class="correo">
                            <p class="parrafo-uno">informacion@tutecnicargo.com</p>
                            <p>+1 (786) 267 96 91</p>
                        </div>
                    </div>

                    <div class="col-md-6 horarios">
                        <p>Horarios:</p>
                        <p class="parrafo-uno">Lunes a Viernes</p>
                        <p>10:00 am - 4:00 pm</p>
                    </div>
                </div>


            </div>
        </section>

        <section class="contacto" id="contacto">
            <div class="container">
                <form method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <input class="form-nombre form-control form-control-lg" 
                            required id="name" name="nombre" type="text" placeholder="Nombre" required>
                        </div>

                        <div class="col-md-6">
                            <input class="form-control form-control-lg" 
                            required id="email" name="correo" type="email" placeholder="Correo Electrónico" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <input class="segunda-fila form-nombre form-control form-control-lg" 
                            required id="telefono" name="telefono" type="text" placeholder="Número de Teléfono" required>
                        </div>

                        <div class="col-md-6">
                            <input class="segunda-fila form-nombre form-control form-control-lg" 
                            required id="direccion" name="direccion" type="text" placeholder="Dirección" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <textarea class="form-control contacto-mensaje" 
                            required id="message" name="mensaje" placeholder="Mensaje" required></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-md-12 text-center clase-boton">
                            <button type="submit" name="enviar" class="boton-enviar btn btn-primary btn-lg">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <section class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d897.8838877587485!2d-80.3127530118562!3d25.818892406199954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9ba2f3ca7a8cf%3A0x606729604aaae344!2sMC%20Logistics%20Enterprises!5e0!3m2!1ses-419!2sve!4v1595973036924!5m2!1ses-419!2sve" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </section>
        
        <section class="redes-sociales">
            <div class="row row-logo">
                <div class="col-md-6 col-xs-2 col-logo text-center">
                    <img class="logo" src="img/logodef.PNG" alt="">
                </div>
        
                    <div class="col-md-6 col-xs-4 redes text-center">
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>                    
                        <a href="https://www.instagram.com/tecni.cargo/" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="whatsapp"><i class="fa fa-whatsapp"></i></a>
                    </div>
                </div>
        </section>
    </section>

<footer class="footer">
        <div class="row">
            <div class="col creditos">
                <a class="referencia" target="_blank" href="http://www.tecnisistema.com/"><p>Sitio Web desarrollado por Tecnisistema Lanwork Place, C.A</p></a>
            </div>
        </div>
    </div>

</footer>

<?php 
    include('correo.php');
?>
    
</body>
</html>