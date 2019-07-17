<?php
    $titulo = "Cuyabeno Lodge Cuyabeno 4 Dias";
    $tag = "cuyabeno-lodge-cuyabeno";
    $precio = 380;
    
    $keywords = "cuyabeno, cuyabeno lodge, cuyabeno, parque, selva cuyabeno, selva";
    $description = "Cuando el Cuyabeno Lodge empezó a operar en 1988, los dueños lo diseñaron de manera que los huéspedes puedan sentir la armonía entre el ambiente circundante y las facilidades que necesita el visitante moderno.";
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
                <ul class="list-ext design">
                    <li>
                        <h2>Día 1: Quito – Lago Agrio – Rio Cuyabeno – Laguna Grande – Cuyabeno Lodge</h2> 
                        <p>Cruzando los Andes hacia la ciudad petrolera de Lago Agrio en bus o en avión, llegada aprox. a las 10:00 am. Transporte privado hacia el puente en el río Cuyabeno (100 km). Los ofrecemos el almuerzo en el restaurante del Puente o llegando en el Lodge según los horarios aéreos. Transporte en una canoa a motor por el río Cuyabeno hasta la Laguna Grande donde se encuentra la Cuyabeno Lodge. Durante este recorrido, se puede ya apreciar la riqueza de la flora y fauna. Después de una siesta, paseo de exploración en la Laguna, natación y observación del atardecer.</p>
                    </li>
                    <li>
                        <h2>Día 2</h2>
                        <p>Temprano en la mañana antes del desayuno, observación de aves y búsqueda de delfines. Después, caminata en tierra firme con su guía naturalista quien le explicará sobre la selva, la vida animal, las plantas medicinales y la vida de los indígenas. Después del almuerzo una siesta. Más tarde, paseo en canoa por el bosque de macrolobiums cubiertos de abundantes epifitos. Búsqueda de monos y aves.</p>
                    </li>
                    <li>
                        <h2>Día 3</h2>
                        <p>Después del desayuno, viaje en canoa por el río Cuyabeno seguido de una corta caminata en tierra firme hacia la Comunidad Siona. Los indígenas explicarán su cultura y se observará la confección del típico “casabe”. Retorno al Lodge para el almuerzo. En la tarde, una siesta y un refrescante baño en la Laguna Grande. Después de la cena excursión nocturna para observar caimanes, insectos y aves nocturnas.</p>
                    </li>
                    <li>
                        <h2>Día 4</h2>
                        <p>Después del desayuno, viaje al Puente donde nuestro vehículo le llevará a Lago Agrio a fin de tomar el bus o el avión de retorno a Quito. Les ofrecemos un box lunch.</p>
                    </li>
                </ul>
                <p class="strong">Nota: por favor considerar que el horario de salida el último día del tour varia de acuerdo a los horarios de la aerolínea TAME.</p>
                <p class="strong">Este itinerario es un ejemplo, puede añadir días y itinerarios/actividades que se ajusten a los intereses del grupo</p>
                <h2>Nuestros actividades incluyen:</h2>
                <ul>
                    <li>Pasear en canoa de exploración en la Laguna Grande, natación, admiración del atardecer</li>
                    <li>Observar aves, buscar delfines y monos</li>
                    <li>Caminar en el bosque primario, explicaciones sobre la selva, la vida animal, las plantas medicinales y la vida de los indígenas</li>
                    <li>Visitar a la Comunidad Siona y compartir un poco de su cultura</li>
                    <li>Ir de excursión nocturna para observar caimanes, insectos y aves</li>
                    <li>Relajarse en una hamaca o admirar la vista desde el último piso de la torre</li>
                </ul>
                <h2>Precios</h2>
                <div class="ui stackable grid priceTag">
                    <div class="five wide column">
                        <h4 class="title">Nombre</h4>
                        <div class="content">Habitación Standar</div>
                        <div class="content">Habitación Superior Torre</div>
                    </div>
                    <div class="two wide column">
                        <h4 class="title">Duración:</h4>
                        <div class="content">4 Días</div>
                        <div class="content">4 Días</div>
                    </div>
                    <div class="two wide column">
                        <h4 class="title">Minimo:</h4>
                        <div class="content">2</div>
                        <div class="content">2</div>
                    </div>
                    <div class="two wide column">
                        <h4 class="title">Precio:</h4>
                        <div class="content">$ 380 USD</div>
                        <div class="content">$ 440 USD</div>
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