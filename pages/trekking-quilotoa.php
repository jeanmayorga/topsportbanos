<?php
    $titulo = "Trekking Quilotoa";
    $tag = "trekking-quilotoa";
    $precio = 80;;
    
    $keywords = "trekking, quilotoa, ecuador, top sport adventure";
    $description = "La Laguna Quilotoa está localizado en la provincia de Cotopaxi, cantón Pujilí. Es un atractivo turístico único en América del Sur y considerada una de las 15 lagunas de origen volcánico más hermosas del mundo.";
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
                <p>La Laguna Quilotoa está localizado en la provincia de Cotopaxi, cantón Pujilí. Es un atractivo turístico único en América del Sur y considerada una de las 15 lagunas de origen volcánico más hermosas del mundo.</p>
                <h2>Intinerario</h2>
                <p>Salimos de Baños a las 08:30am, durante este trayecto de tres horas aproximadamente en carro privado tenemos la oportunidad de visitar la laguna de Yambo; así también en el trayecto de viaje Latacunga a Pujilí se puede apreciar cultivos indígenas, rebaños de borregos, llamas, típicas viviendas de adobe y paja y a la vez observar al volcán Cotopaxi.</p>
                <p>Al llegar al Quilotoa degustamos de nuestro almuerzo, para luego caminar hasta a la orilla de la laguna donde se puede tomar un paseo en kayak o simplemente disfrutar del paisaje.</p>
                <p>El ascenso se puede hacer a pie o se puede alquilar caballos por 10 USD.</p>
                <p>Finalmente emprendemos la caminata de regreso al vehículo que nos traerá a la ciudad de Baños.</p>
                <div class="ui stackable grid">
                    <div class="eight wide column">
                        <div class="ui list">
                            <h2>Incluye</h2>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Transporte privado</div>
                            </div>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">guía de turismo</div>
                            </div>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">almuerzo</div>
                            </div>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">entrada a la reserva</div>
                            </div>
                        </div>
                    </div>
                    <div class="eight wide column">
                        <div class="ui list">
                            <h2>No incluye</h2>
                            <div class="item">
                                <i class="reply green icon"></i>
                                <div class="content">Bebidas y snack adicionales durante el recorrido</div>
                            </div>
                            <div class="item">
                                <i class="reply green icon"></i>
                                <div class="content">artesanías</div>
                            </div>
                            <div class="item">
                                <i class="reply green icon"></i>
                                <div class="content">alquiler de kayak</div>
                            </div>
                            <div class="item">
                                <i class="reply green icon"></i>
                                <div class="content">alquiler del caballo</div>
                            </div>
                        </div>
                    </div>
                </div>
                <h2>Requirimientos</h2>
                <p>Ropa abrigada, zapatos cerrados y/o trekking, chaqueta de agua, guantes, protector solar, bocadillos, agua.</p>
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