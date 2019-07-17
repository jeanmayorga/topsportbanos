<?php
    $tag = "canyoning-casahurco";
    $titulo = "Canyoning en Baños";

    $keywords = "Baños, Canyoning, Canyoning Banos Ecuador, Canyoning Ecuador, Canyoning Baños, Top Sport Adventure, deportes, agua, cascadas";
    $description = "Ecuador tiene muchos lugares perfectos para el deporte extremadamente divertido del canyoning. Con su ubicación entre el masivo volcán Tungurahua, dos parques nacionales y ríos salvajes, Baños tiene una geografía única que se adapta perfectamente para un emocionante día de canyoning!.";
?>
<!doctype html>
<html lang="es">
<head>
    <title><?php echo $titulo; ?></title>
    <?php include "lib/css.min.php"; ?>
</head>
<body>
    <?php include "lib/header.php"; ?>
    <article class="ui container wall-minus">
        <h1>Canyoning en Baños</h1>
                <div class="fb-share-button fb-like" data-href="<?php echo $host; ?>" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
        <p>Ecuador tiene muchos lugares perfectos para el deporte extremadamente divertido del canyoning. Con su ubicación entre el masivo volcán Tungurahua, dos parques nacionales y ríos salvajes, Baños tiene una geografía única que se adapta perfectamente para un emocionante día de canyoning!.</p>
        <div class="ui fluid container block">
            <div class="ui container">
                <div class="ui stackable grid">
                    <div class="three-parts wide column">
                        <a href="/canyoning-rio-blanco" class="product clear">
                            <figure>
                            <img src="img/canyoning-rio-blanco/product.jpg" />
                            </figure>
                            <div class="title">
                                Canyoning Rio Blanco
                            </div>
                            <div class="description">
                                Este programa se encuentra ubicado en zona de amortiguamiento del parque nacional Llanganates. Salimos de Baños 12 kilómetros hacia la comunidad de rio blanco en donde recibirán una charla de seguridad.
                            </div>
                            <div class="float-left priceProduct">
                                <span class="desde">
                                    Precio:
                                </span>
                                <span class="precio">
                                    $25 USD
                                </span>
                            </div>
                            <button class="ui orange button large float-right">Vér mas</button>
                        </a>
                    </div>
                    <div class="three-parts wide column">
                        <a href="/canyoning-chamana" class="product clear">
                            <figure>
                            <img src="img/canyoning-chamana/product.jpg" />
                            </figure>
                            <div class="title">
                                Canyoning Chamana
                            </div>
                            <div class="description">
                            Como todos los programas de canyoning primero una capacitación previa antes de ir al cañón. Está a poca distancia del centro de la cuidad 8 minutos aproximadamente esta serie de cascadas que descienden del parque nacional Sangay.
                            </div>
                            <div class="float-left priceProduct">
                                <span class="desde">
                                    Precio:
                                </span>
                                <span class="precio">
                                    $20 USD
                                </span>
                            </div>
                            <button class="ui orange button large float-right">Vér mas</button>
                        </a>
                    </div>
                    <div class="three-parts wide column">
                        <a href="/canyoning-casahurco" class="product clear">
                            <figure>
                            <img src="img/canyoning-casahurco/product.jpg" />
                            </figure>
                            <div class="title">
                                Canyoning Casahurco
                            </div>
                            <div class="description">
                                Hora y lugar de reunión (9am en la oficina) para después salir en transporte por un tiempo de 40 minutos. Al llegar al punto de inicio les será entregado todo el equipo personal luego el guía dará una charla de seguridad, utilización del equipo, técnicas de descenso en cascadas y todo cuanto respecta a este deporte de aventura.
                            </div>
                            <div class="float-left priceProduct">
                                <span class="desde">
                                    Precio:
                                </span>
                                <span class="precio">
                                    $60 USD
                                </span>
                            </div>
                            <button class="ui orange button large float-right">Vér mas</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </article>
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