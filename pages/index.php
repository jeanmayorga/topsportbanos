<?php 
    $tag = "paquetes-en-banos";
    $titulo = "Top Sport Adventure";
    $keywords = "Top Sport Adventure, Baños, Ecuador, Baños de Agua Santa, Baños ecuador, tours, rafting, rafting en baños.";
    $description = "Nuestro compromiso en TopSport es ofrecer un servicio y atención al cliente, que garantice el cumplimiento de los servicios contratados por nuestros turistas y clientes; sustentados en la honestidad, experiencia, trabajo en equipo y personal calificado, a través del mejoramiento continuo e innovación de la infraestructura, tecnología, proceso y productos.";

    $host= "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
?>
<!doctype html>
<html lang="es">
<head>
    <title><?php echo $titulo; ?></title>
    <?php include "lib/css.min.php"; ?>
</head>
<body>
    <?php include "lib/header.php"; ?>
    <section class="ui fluid container wall owl-carousel owl-theme">
        <figure class="item">
            <section class="jumbotron">
                <h2 class="title animated fadeInUp">Paquetes turísticos</h2>
                <p class="subtitle animated fadeInUp">con Top Sport Adventure.</p>
                <a href="/paquetes-banos-de-agua-santa" class="ui button orange huge">Conocer mas</a>
            </section>
            <iframe src="https://www.youtube.com/embed/NjHSimqPt-E?playlist=PLEkdG_jCLpobekEzCoNBcObqwzIEnHJ0s&autoplay=1&loop=1&mute=1&controls=0&VQ=HD720" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </figure>
            <figure class="item">
            <section class="jumbotron">
                <h2 class="title animated fadeInUp">Rafting en Baños Ecuador</h2>
                <p class="subtitle animated fadeInUp">con Top Sport Adventure.</p>
                <a href="/rafting-banos-ecuador" class="ui button orange huge">Conocer mas</a>
                <p class="ended animated fadeInUp">$30 por persona.</p>
            </section>
            <img src="img/rafting-banos-ecuador/wall.jpg" style="margin-top: -130px;">
        </figure>
        <figure class="item">
            <section class="jumbotron">
                <h2 class="title animated fadeInUp">Cuyabeno Caiman Lodge</h2>
                <p class="subtitle animated fadeInUp">con Top Sport Adventure.</p>
                <a href="/cuyabeno-caiman-lodge" class="ui button orange huge">Conocer mas</a>
                <p class="ended animated fadeInUp">$250 por persona.</p>
            </section>
            <img src="img/cuyabeno-caiman-lodge/wall.jpg" style="margin-top: -130px;">
        </figure>
        <figure class="item">
            <section class="jumbotron">
                <h2 class="title animated fadeInUp">Canyoning en Baños Ecuador</h2>
                <p class="subtitle animated fadeInUp">con Top Sport Adventure.</p>
                <a href="/canyoning-rio-blanco" class="ui button orange huge">Conocer mas</a>
                <p class="ended animated fadeInUp">$25 por persona.</p>
            </section>
            <img src="img/canyoning-rio-blanco/wall.jpg" style="margin-top: -130px;">
        </figure>
        <figure class="item">
            <section class="jumbotron">
                <h2 class="title animated fadeInUp">Tour a la Selva Puyo</h2>
                <p class="subtitle animated fadeInUp">con Top Sport Adventure.</p>
                <a href="/selva-puyo-1-dia" class="ui button orange huge">Conocer mas</a>
                <p class="ended animated fadeInUp">$40 por persona.</p>
            </section>
            <img src="img/selva-puyo-1-dia/wall.jpg" style="margin-top: -130px;">
        </figure>
        <figure class="item">
            <section class="jumbotron">
                <h2 class="title animated fadeInUp">La Casa del Arbol</h2>
                <p class="subtitle animated fadeInUp">con Top Sport Adventure.</p>
                <a href="/casa-del-arbol" class="ui button orange huge">Conocer mas</a>
                <p class="ended animated fadeInUp">$8 por persona.</p>
            </section>
            <img src="img/casa-del-arbol/wall.jpg" style="margin-top: -130px;">
        </figure>
    </section>
    <main class="ui fluid container block">
        <div class="ui container">
            <div class="ui stackable grid">
                <div class="four wide column product-g">
                    <a href="/rafting-banos-ecuador">
                        <figure>
                            <img src="img/rafting-home.jpg" />
                            <figcaption>Rafting en Baños Ecuador</figcaption>
                        </figure>
                    </a>
                </div>
                <div class="four wide column product-g">
                    <a href="/selva-puyo-1-dia">
                        <figure>
                            <img src="img/selva-home.jpg" />
                            <figcaption>Selva Puyo 1 Día</figcaption>
                        </figure>
                    </a>
                </div>
                <div class="four wide column product-g">
                    <a href="/canyoning-rio-blanco">
                        <figure>
                            <img src="img/canyoning-home.jpg" />
                            <figcaption>Canyoning en Baños Ecuador</figcaption>
                        </figure>
                    </a>
                </div>
                <div class="four wide column">
                    <h2>Aventura, Diversion y Seguridad garantizada.</h2>
                    <p>Nuestro compromiso en TopSport es ofrecer un  servicio y atención al cliente, que garantice el cumplimiento de los servicios contratados por nuestros turistas y clientes; sustentados en la honestidad, experiencia, trabajo en equipo y personal calificado, a través del mejoramiento continuo e innovación de la infraestructura, tecnología, proceso y productos. </p>
                </div>
            </div>
            <h2>Oferta</h2>
            <div class="ui stackable grid">
                <div class="three-parts wide column">
                    <a href="/puenting-san-francisco" class="product clear">
                        <figure>
                           <img src="img/puenting-san-francisco/product.jpg" />
                        </figure>
                        <div class="title">
                            Puenting San Francisco
                        </div>
                        <div class="description">
                            Este es un salto pendular el segundo más alto del ecuador se lo realiza en el puente de SAN FRANCISCO la altura de este puente es de 90 MTRS aproximadamente para realizar este salto tenemos ...
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
                    <a href="/canopy-puntzan" class="product clear">
                        <figure>
                           <img src="img/canopy-puntzan/product.jpg" />
                        </figure>
                        <div class="title">
                            Canopy Puntzan
                        </div>
                        <div class="description">
                            Puntzan está en el parque nacional Sangay. Es una experiencia natural. Vas a estar rodeada de naturaleza, cascadas y ríos. Hay 6 cables desde 200 hasta 550 metros. Esta aventura solo está a ....
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
                    <a href="/selva-puyo-2-dias" class="product clear">
                        <figure>
                           <img src="img/selva-puyo-2-dias/product.jpg" />
                        </figure>
                        <div class="title">
                            Tour a la Selva Puyo 2 Días
                        </div>
                        <div class="description">
                            Nuestra aventura se la realiza por el corredor ecológico LLanganates Sangay miraremos mucha naturaleza, cascadas, ríos y mucha diversidad de ecosistemas al llegar a la selva visitaremos la comunidad indígena ....
                        </div>
                        <div class="float-left priceProduct">
                            <span class="desde">
                                Precio:
                            </span>
                            <span class="precio">
                                $140 USD
                            </span>
                        </div>
                        <button class="ui orange button large float-right">Vér mas</button>
                    </a>
                </div>
            </div>
            <h2>En chiva</h2>
            <div class="ui stackable grid">
                <div class="three-parts wide column">
                    <a href="/ruta-de-las-cascadas-chiva" class="product clear">
                        <figure>
                           <img src="img/ruta-de-las-cascadas-chiva/product.jpg" />
                        </figure>
                        <div class="title">
                            Ruta de las cascadas
                        </div>
                        <div class="description">
                            TOUR en chiva a las cascadas contamos con unidades nuevas guías nativos y naturalistas la duración del tour es de 3 horas son 7 cascadas y miradores en la última tendremos una caminata.
                        </div>
                        <div class="float-left priceProduct">
                            <span class="desde">
                                Precio:
                            </span>
                            <span class="precio">
                                $8 USD
                            </span>
                        </div>
                        <button class="ui orange button large float-right">Vér mas</button>
                    </a>
                </div>
                <div class="three-parts wide column">
                    <a href="/mirador-de-la-ciudad-en-chiva" class="product clear">
                        <figure>
                           <img src="img/mirador-de-la-ciudad-en-chiva/product.jpg" />
                        </figure>
                        <div class="title">
                            Mirador de la Ciudad
                        </div>
                        <div class="description">
                            El tour tiene una duración de 2 horas subimos a la parte alta de la montaña exacta mente a 2.320 sobre el nivel del mar en la parte alta de la montaña podemos observar la ciudad de baños ...
                        </div>
                        <div class="float-left priceProduct">
                            <span class="desde">
                                Precio:
                            </span>
                            <span class="precio">
                                $5 USD
                            </span>
                        </div>
                        <button class="ui orange button large float-right">Vér mas</button>
                    </a>
                </div>
                <div class="three-parts wide column">
                    <a href="/casa-del-arbol" class="product clear">
                        <figure>
                           <img src="img/casa-del-arbol/product.jpg" />
                        </figure>
                        <div class="title">
                            Casa del Arbol
                        </div>
                        <div class="description">
                        Es tour tiene una duración de 2 horas visita al columpio de la casa del árbol y mirador del volcán también tiene un pequeño canopy el cual pueden utilizar durante la visita el recorrido los .....
                        </div>
                        <div class="float-left priceProduct">
                            <span class="desde">
                                Precio:
                            </span>
                            <span class="precio">
                                $8 USD
                            </span>
                        </div>
                        <button class="ui orange button large float-right">Vér mas</button>
                    </a>
                </div>
            </div>
            <h2>Otros</h2>
            <div class="ui stackable grid">
                <div class="three-parts wide column">
                    <a href="ruta-de-las-cascadas-bicicleta" class="product clear">
                        <figure>
                           <img src="img/ruta-de-las-cascadas-bicicleta/product.jpg" />
                        </figure>
                        <div class="title">
                            Ruta de las Cascadas
                        </div>
                        <div class="description">
                            Tour en bicicleta a las cascadas el tour es de 3 horas son 7 cascadas y miradores en la última tendremos una caminata. El tour mas popular en Baños Ecuador consiste en la visita a las diferentes cascadas que existen en la carretera Banos.
                        </div>
                        <div class="float-left priceProduct">
                            <span class="desde">
                                Precio:
                            </span>
                            <span class="precio">
                                $8 USD
                            </span>
                        </div>
                        <button class="ui orange button large float-right">Vér mas</button>
                    </a>
                </div>
                <div class="three-parts wide column">
                    <a href="/escalada" class="product clear">
                        <figure>
                           <img src="img/escalada/product.jpg" />
                        </figure>
                        <div class="title">
                            Escalada en Roca
                        </div>
                        <div class="description">
                        En esta ciudad nos encontramos rodeados de muros naturales de roca basáltica gracias a las diferentes erupciones del volcán Tungurahua el lugar más idóneo para realizar la actividad Escalada en roca o Rock Climbing es el sector de san Martin...
                        </div>
                        <div class="float-left priceProduct">
                            <span class="desde">
                                Precio:
                            </span>
                            <span class="precio">
                                $30 USD
                            </span>
                        </div>
                        <button class="ui orange button large float-right">Vér mas</button>
                    </a>
                </div>
                <div class="three-parts wide column">
                    <a href="/parapente" class="product clear">
                        <figure>
                           <img src="img/parapente/product.jpg" />
                        </figure>
                        <div class="title">
                            Parapente
                        </div>
                        <div class="description">
                        Salida 14:30 PM desde Baños en transporte hasta el Cerro Nitón cerca de la cuidad de Pelileo, en este lugar haremos un vuelo tándem llamado TOP landing esto es despegar de un punto, hacer el vuelo que demora entre 15 y 20 minutos dependiendo...
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
    </main>
    <?php include 'lib/footer.php'; ?>
    <?php include 'lib/js.min.php'; ?>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                items:1,
                loop:true,
                margin: 0,
                nav:false,
                autoplay:true,
                autoplayTimeout:8000,
                autoplayHoverPause:true,
                nav: true,
                navText: ["<i class='icon angle left'></i>","<i class='icon angle right'></i>"]
            });
        });
    </script>
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