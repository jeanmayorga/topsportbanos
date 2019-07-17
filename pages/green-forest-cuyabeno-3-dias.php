<?php
    $titulo = "Green Forest Cuyabeno 3 Dias 2 Noches";
    $tag = "green-forest-cuyabeno";
    $precio = 240;
    $keywords = "cuyabeno lodge, ecuador amazon tours, cuyabeno tours, cuyabeno national park, cuyabeno reserve, cuyabeno, amazon jungle, amazonia ecuador, parque nacional cuyabeno, reserva faunistica cuyabeno, cuyabeno hotel";
    
    $description = "Green Forest Ecolodge en Cuyabeno ofrece tours a la selva amazónica de Ecuador, ven y vive la mejor experiencia con animales salvajes de la amazonia ecuatoriana";
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
                        <h2>Adentrate en Cuyabeno - Dia 1</h2>                
                        <p>El transporte lo recogerá en el punto de encuentro a las 09:00am y para los pasajeros que lleguen al Aeropuerto de Lago Agrio es a las 10:30am para dirigirnos hacia la entrada a la Reserva Cuyabeno (Puente Río Cuyabeno) por unas 2 horas.</p>
                        <p>Almuerzo será servido y de inmediato comenzaremos nuestra exploración en la selva amazónica de Ecuador en barco. En el paseo en la canoa podrá escuchar los sonidos de la vida silvestre, mientras disfruta del paisaje a lo largo de las aguas del río Cuyabeno. En este viaje en canoa podrás observar una gran variedad de pájaros, monos y otras criaturas de la selva. Durante el trayecto nuestro guía proporcionará información sobre cómo interactúan los animales y las plantas dentro del ecosistema Cuyabeno en el que coexisten.</p>
                        <p>Finalmente llegamos al Ecolodge, nos acomodaremos en cada una de las cabañas. Después de la cena nuestro guía nativo nos dará una presentación de las actividades para los próximos días en el Parque Nacional Cuyabeno.</p>
                    </li>
                    <li>
                        <h2>Descubre la vida salvaje en la Amazonía Ecuador - Día 2</h2>
                        <p>En la mañana antes del desayuno, se escucha el ruido de los pájaros volando sobre la selva y un amanecer completamente fascinante. Después del desayuno, continuamos río arriba para iniciar un trekking a orillas de la Laguna Grande, donde se pueden ver diferentes especies de plantas, enormes árboles, hormigas, orquídeas, hierbas medicinales y un considerable número de animales de la selva amazónica, entenderemos como funciona el ecosistema de la amazonía. Luego de ésta actividad servirnos el almuerzo, tendrá tiempo para descansar por unos minutos en nuestras áreas comunes y hamacas a las riberas del Río Cuyabeno, luego de esto nos dirigimos río arriba para adentrarnos en la selva virgen y mágica de la Laguna de Caimancocha; dónde disfrutará de un increíble atardecer, al retorno visitaremos nuevamente Laguna Grande y si gusta podemos nadar y disfrutar el ocaso. Después de la cena, usted se embarcará en un emocionante paseo en canoa donde verá los famosos caimanes negros de la amazonía. Durante este trayecto escucharás los misteriosos ruidos del bosque.- Ésta es una experiencia que nuncas vas a olvidar.</p>
                    </li>
                    <li>
                        <h2>De Cuyabeno a la civilización - Dia 3</h2>
                        <p>Muy por la mañana haremos una observación de aves río abajo, disfrutaremos de la salida del sol, después nos serviremos el desayuno y finalmente viajaremos por el Río Cuyabeno de retorno hacia la civilización. El transporte nos llevará desde el ingreso al Parque Nacional Cuyabeno hacia Lago Agrio (punto de encuentro) para luego continuar con su viaje habitual en Ecuador. Fin de nuestros servicios.</p>
                    </li>
                </ul>
                <p class="strong">Nota: Recuerde que todas las excursiones y horas en este itinerario de muestra están sujetas a cambios y dependen en gran medida del clima, la temporada, las limitaciones de grupo, los intereses de grupo y las decisiones del guía basadas en la seguridad de los pasajeros y en las operaciones organizadas.</p>
                <h2>Precios</h2>
                <div class="ui stackable grid priceTag">
                    <div class="five wide column">
                        <h4 class="title">Nombre</h4>
                        <div class="content"><?php echo $titulo; ?></div>
                    </div>
                    <div class="two wide column">
                        <h4 class="title">Duración:</h4>
                        <div class="content">3 Días</div>
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