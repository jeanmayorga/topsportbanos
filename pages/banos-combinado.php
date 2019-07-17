<?php
    $titulo = "Tour Baños Combinado";
    $tag = "paquetes-en-banos";
    $precio = 35;
    
    $keywords = "Baños, Baños de Agua Santa, Banos Ecuador, Baños Ecuador, Paquetes en Baños, Top Sport Adventure, deportes, agua";
    $description = "Baños de Agua Santa se encuentra en la provincia de Tungurahua solamente a 180 Km de Quito y 35 Km de Ambato.  La ciudad turística de está ubicado en un valle con cascadas y aguas termales a lado del volcán Tungurahua con una altura de 5.016 metros.";
?>
<!doctype html>
<html lang="es">
<head>
    <title><?php echo $titulo; ?> | Top Sport Adventure</title>
    <?php include "lib/css.min.php"; ?>
</head>
<body>
    <?php include "lib/header.php"; ?>
        <div class="ui fluid container wall page">
            <figure>
                <img src="img/<?php echo $tag; ?>/wall.jpg" style="margin-top: -130px;">
            </figure>
            <div class="jumbotron">
                <div class="title animated fadeInUp"><?php echo $titulo; ?></div>
                <p class="subtitle animated fadeInUp">con Top Sport Adventure</p>
            </div>
	    	<div class="down-arrow">
	    		<img src="img/down-arrow.svg">
	    	</div>
        </div>
    <main role="main" class="ui fluid container">
        <div class="ui stackable grid container block first">
            <article class="eleven wide column">
                <h1><?php echo $titulo; ?></h1>
                <div class="fb-share-button fb-like" data-href="<?php echo $host; ?>" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
                <h2>Intinerario</h2>
                <p>El tour empieza en la mañana a partir de las 9 am hasta las 6 de la tarde primero tomamos las bicicletas en baños para llegar hasta la vía principal empezamos descender por la ruta de las cascadas durante el trayecto visitaremos la cascada Agoyan en donde realizaremos el Canopy de 2.000 metros luego en el sector del manto de la novia realizaremos el paso de la tarabita al final visitaremos el pailón del diablo la cascada más hermosa en la región, en el sector tendremos un almuerzo para luego retornar a Baños en la tarde visitaremos la casa del árbol el columpio del fin del mundo también visitaremos el vuelo de fantasía un columpio de 30 metros de altura conocido como la bestia al finalizar la actividad retornaremos a baños para visitar la fábrica de melcochas y dulces de guayaba a las 6:30 de la tarde más o menos finalizaríamos.</p>
                <div class="ui stackable grid">
                    <div class="sixteen wide column">
                        <div class="ui list">
                            <h2>Incluye</h2>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Bicicleta</div>
                            </div>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Guia</div>
                            </div>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Transporte a a casa del árbol</div>
                            </div>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Vuelo de Fantasía</div>
                            </div>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Almuerzo</div>
                            </div>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Canopy</div>
                            </div>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Entradas</div>
                            </div>
                        </div>
                    </div>
                </div>
                <h2>Precios</h2>
                <div class="ui stackable grid priceTag">
                    <div class="five wide column">
                        <h4 class="title">Nombre</h4>
                        <div class="content">Paquete Baños Ecuador</div>
                    </div>
                    <div class="two wide column">
                        <h4 class="title">Duración:</h4>
                        <div class="content">1 Dia</div>
                    </div>
                    <div class="two wide column">
                        <h4 class="title">Minimo:</h4>
                        <div class="content">2</div>
                    </div>
                    <div class="two wide column">
                        <h4 class="title">Precio:</h4>
                        <div class="content">$ 35 USD</div>
                    </div>
                    <div class="five wide column center aligned priceTag-right">
                        <div class="priceTag-buttons">
                            <a href="/precios" class="ui button">Mas Precios</a>
                            <a href="#" class="ui orange button reservaBtnTag">Resevar</a>
                        </div>
                    </div>
                </div>
                <h2>Galeria</h2>
                <?php include("lib/galeria.php"); ?>
            </article>
            <aside class="five wide column">       
                <?php include('lib/callToActionForm.php'); ?>
            </aside>
            </aside>
        </div>
    </main>
    <?php include 'lib/footer.php'; ?>
    <?php include 'lib/js.min.php'; ?>
    <script type="text/javascript" src="js/semantic/sticky.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/datedropper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.1/dist/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.1';
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
</body>
</html>