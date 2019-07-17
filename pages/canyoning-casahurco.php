<?php
    $titulo = "Canyoning Casahurco";
    $tag = "canyoning-casahurco";
    $precio = 60;
    
    $keywords = "Baños, Canyoning, Canyoning Banos Ecuador, Canyoning Ecuador, Canyoning Baños, Top Sport Adventure, deportes, agua, cascadas, casahurco";
    $description = "Hora y lugar de reunión (9am en la oficina) para después salir en transporte por un tiempo de 40 minutos. Al llegar al punto de inicio les será entregado todo el equipo personal luego el guía dará una charla de seguridad.";
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
                <p>Hora y lugar de reunión (9am en la oficina) para después salir en transporte por un tiempo de 40 minutos. Al llegar al punto de inicio les será entregado todo el equipo personal luego el guía dará una charla de seguridad, utilización del equipo, técnicas de descenso en cascadas y todo cuanto respecta a este deporte de aventura.</p>
                <p>Después de la charla y práctica empezamos con el descenso por el rio Cashaurco. En el trayecto tendremos 5 cascadas de entre 3 a 20 metros de altura, también tendremos actividades como saltos en posa, deslizamientos en pequeños toboganes y una tirolesa muy vertical por una cascada. Para continuar con el descenso de rapel, al finalizar esta actividad degustaremos una exquisita trucha al carbón.</p>
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
                                <div class="content">Arnes de Silla</div>
                            </div>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Mosquetones</div>
                            </div>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Cinta de Vida</div>
                            </div>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Cd de Fotos</div>
                            </div>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Box Lauch</div>
                            </div>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Casco</div>
                            </div>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Transporte</div>
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
                        <div class="content">Día Completo</div>
                    </div>
                    <div class="two wide column">
                        <h4 class="title">Minimo:</h4>
                        <div class="content">2</div>
                    </div>
                    <div class="two wide column">
                        <h4 class="title">Precio:</h4>
                        <div class="content">$ <?php echo $precio; ?> USD</div>
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
                    <iframe src="//www.youtube.com/embed/JBfITtbIfZk" frameborder="0" allowfullscreen="" class="YTvideo"></iframe>
                </div>
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