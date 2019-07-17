<?php
    $titulo = "Rafting Baños Ecuador";
    $tag = "rafting-banos-ecuador";
    $precio = 30;
    
    $keywords = "Baños, Rafting, Rafting Banos Ecuador, Rafting Ecuador, rafting Baños, Top Sport Adventure, deportes, agua, river rafting ecuador, rafting pastaza river";
    $description = "El mejor Rafting en Baños de Agua Santa Ecudor ✅, los mejores ríos, ofertas y promociones por temporada y lo puedes hacer con los mejores, ✅ reserva ahora al mejor precio garantizado!";
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
                <img src="img/<?php echo $tag; ?>/wall.jpg" style="margin-top: -130px;"  alt="<?php echo $titulo; ?>">
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
                <div class="fb-share-button fb-like" data-href="<?php echo $host; ?>" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
                <h1><?php echo $titulo; ?></h1>
                <p>Rafting en Baños, Rafting en Ecuador, Rafting Banos Ecuador. El mejor Rafting en Baños de Agua Santa Ecuador, los mejores ríos, ofertas y promociones por temporada y lo puedes hacer con los mejores, reserva ahora al mejor precio garantizado!</p>
                <h2>Intinerario</h2>
                <p>Horario de Salida: 09H00 AM y en la tarde 02H30 PM. Nivel  de Rafting: III+ o IV (Dependiendo la temporada). Salimos vía Baños - Puyo por el lapso de 50 minutos, en esta ruta podemos ir mirando diferentes cascadas que existen en el trayecto. Al llegar al punto de inicio del descenso el guía  a cargo empezara con una breve charla de seguridad, utilización del equipo, técnicas de remado y rescate. En nuestro descenso por los rápidos disfrutaremos al máximo, realizando juegos en el agua así como también apreciaremos hermosos paisajes con una rica vegetación. Después terminado el recorrido en bote nos cambiamos para luego retornar, en el trayecto de regreso una parada para almorzar.</p>
                <div class="ui stackable grid">
                    <div class="eight wide column">
                        <div class="ui list">
                            <h2>Incluye</h2>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Traje Neopreno</div>
                            </div>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Zapatos</div>
                            </div>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Cd de Fotos</div>
                            </div>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Almuerzo</div>
                            </div>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Casco</div>
                            </div>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Chaleco Salvavidas</div>
                            </div>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Remo</div>
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
                                <div class="content">Traje de baño</div>
                            </div>
                            <div class="item">
                                <i class="reply green icon"></i>
                                <div class="content">Toalla</div>
                            </div>
                            <div class="item">
                                <i class="reply green icon"></i>
                                <div class="content">Bloqueador solar</div>
                            </div>
                            <div class="item">
                                <i class="reply green icon"></i>
                                <div class="content">Sandalias o zapatillas</div>
                            </div>
                        </div>
                    </div>
                </div>
                <h2>Precios</h2>
                <div class="ui stackable grid priceTag">
                    <div class="five wide column">
                        <h4 class="title">Nombre</h4>
                        <div class="content"><?php echo $titulo; ?></div>
                    </div>
                    <div class="two wide column">
                        <h4 class="title">Duración:</h4>
                        <div class="content">Medio Día</div>
                    </div>
                    <div class="two wide column">
                        <h4 class="title">Minimo:</h4>
                        <div class="content">1</div>
                    </div>
                    <div class="two wide column">
                        <h4 class="title">Precio:</h4>
                        <div class="content">$ 30 USD</div>
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
                <h2>Video</h2>
                <div class="YTvideo-out">
                    <iframe src="//www.youtube.com/embed/5mPkXNCf80A" frameborder="0" allowfullscreen="" class="YTvideo"></iframe>
                </div>
            </article>
            <aside class="five wide column">       
                <?php include('lib/callToActionForm.php'); ?>
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