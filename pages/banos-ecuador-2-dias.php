<?php
    $titulo = "Baños en 2 Días";
    $tag = "paquetes-en-banos";
    $precio = 95;
    
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
                <ul class="list-ext design">
                    <li>
                        <h3>DIA 1</h3>
                        <p>9:00 Canopy tres líneas 2.000 metros con seguridad y diversión.</p>
                        <p>10:30 am tour cascadas conopy y visita al pailón del diablo hasta las 1:30 pm (en Chiva).</p>
                        <p>2:00 pm Almuerzo.</p>
                        <p>4:00 pm Tour casa del Árbol (el columpio del fin del mundo).</p>
                        <p>9:00 pm tour Mirador de la Ciudad (en Chiva).</p>
                    </li>
                    <li>
                        <h3>DIA 2</h3>
                        <p>9:00 am Tour Rafting rio Pastaza nivel III + incluye almuerzo y fotografías hasta las 2:30 pm</p>
                        <p>2:45 pm Tour Canyoning (CHAMANA) descenso de cascadas (rapel) retorno a baños 5:30 pm incluye fotografías.</p>
                    </li>
                </ul>
                <div class="ui stackable grid">
                    <div class="eight wide column">
                        <div class="ui list">
                            <h2>Incluye</h2>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Transporte privado en Baños</div>
                            </div>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Almuerzo</div>
                            </div>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Fotografias</div>
                            </div>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Botas y Ponchos</div>
                            </div>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Guías profesionales</div>
                            </div>
                        </div>
                    </div>
                    <div class="eight wide column">
                        <div class="ui list">
                            <h2>¿Qué llevar?</h2>
                            <div class="item">
                                <i class="reply green icon"></i>
                                <div class="content">Repelente</div>
                            </div>
                            <div class="item">
                                <i class="reply green icon"></i>
                                <div class="content">Cámara</div>
                            </div>
                            <div class="item">
                                <i class="reply green icon"></i>
                                <div class="content">Toalla</div>
                            </div>
                            <div class="item">
                                <i class="reply green icon"></i>
                                <div class="content">Ropa para clima Tropical</div>
                            </div>
                            <div class="item">
                                <i class="reply green icon"></i>
                                <div class="content">Bloqueador solar</div>
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
                        <div class="content">2 Dias</div>
                    </div>
                    <div class="two wide column">
                        <h4 class="title">Minimo:</h4>
                        <div class="content">2</div>
                    </div>
                    <div class="two wide column">
                        <h4 class="title">Precio:</h4>
                        <div class="content">$ 95 USD</div>
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