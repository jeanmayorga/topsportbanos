<?php
    $titulo = "Ruta de las Cascadas (Bicicleta)";
    $tag = "ruta-de-las-cascadas-bicicleta";
    $precio = 8;
    
    $keywords = "Baños, ruta de las cascadas, Cascadas, bicicletas, bikes in baños, tarabita, agoyan, puenting";
    $description = "Tour en bicicleta a las cascadas el tour es de 3 horas son 7 cascadas y miradores en la última tendremos una caminata. El tour mas popular en Baños Ecuador consiste en la visita a las diferentes cascadas que existen en la carretera Banos.";
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
                <div class="fb-share-button fb-like" data-href="<?php echo $host; ?>" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
                <h1><?php echo $titulo; ?></h1>
                <h2>Intinerario</h2>
                <p>Tour en bicicleta a las cascadas el tour es de 3 horas son 7 cascadas y miradores en la última tendremos una caminata. El tour mas popular en  Baños Ecuador consiste en la visita a las diferentes cascadas que existen en la carretera Banos.</p>
                <ul class="list-ext design">
                    <li>
                        Represa de Agoyan
                    </li>
                    <li>
                        Cascada de Agoyan
                    </li>
                    <li>
                        Tarabita de Agoyan (La tarabita tiene un adicional de 1.50 x persona)
                    </li>
                    <li>
                        Canopy (El canopy tiene un precio de 10 dólares x persona)
                    </li>
                    <li>
                        Cascada esperanza
                    </li>
                    <li>
                        Bola Extrema (Precio aparte: 10 USD/Persona)
                    </li>
                    <li>
                        Cascada el manto de la novia
                    </li>
                    <li>
                        Cascada el pailón del diablo
                    </li>
                </ul>
                <h2>Nota</h2>
                <p>La entrada a la cascada el pailón del diablo tiene un costo de $2.00 para poder ingresar a la caminata.</p>
                <div class="ui stackable grid">
                    <div class="eight wide column">
                        <div class="ui list">
                            <h2>Incluye</h2>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Bicicleta</div>
                            </div>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Casco</div>
                            </div>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Mapa</div>
                            </div>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Kit de reparación</div>
                            </div>
                        </div>
                    </div>
                    <div class="eight wide column">
                        <div class="ui list">
                            <h2>No incluye</h2>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Guia</div>
                            </div>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Transporte</div>
                            </div>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Alimentación</div>
                            </div>
                        </div>
                    </div>
                </div>
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