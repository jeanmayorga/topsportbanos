<?php
    $titulo = "Tour a la Selva Puyo (2 Días)";
    $tag = "selva-puyo-2-dias";
    $precio = 140;
    
    $keywords = "Baños, Selva, Puyo, puyopungo, selva puyopungo";
    $description = "Nuestra aventura se la realiza por el corredor ecológico LLanganates Sangay miraremos mucha naturaleza, cascadas, ríos y mucha diversidad de ecosistemas al llegar a la selva visitaremos la comunidad indígena QUECHUA.";
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
                <h2>Primer Dia</h2>
                <p>Nuestra aventura se la realiza por el corredor ecológico LLanganates Sangay miraremos mucha naturaleza, cascadas, ríos y mucha diversidad de ecosistemas al llegar a la selva visitaremos la comunidad indígena QUECHUA de cotococha visita cultural donde el turista puede apreciar la elaboración de artesanías la vida en estado natural y poder tener el contacto con animales libres como monos papagayos loros y mas también podremos practicar el disparo de la cerbatana luego haremos un recorrido en canoa de 30 a 40 minutos por el rio Puyo.<br>En la tarde caminata hacia la cascada Hola Vida en donde tendrán la opción de tomar un baño en la cascada.<br>Almuerzo y visita al mirador de indichuris<br>Arribo a las cabañas dejamos el equipaje, en las cabañas, cenamos tomamos las linternas y haremos una caminata nocturna en la selva para poder observar especies de insectos y demás, retorno a las cabañas para descansar.</p>
                <h2>Segundo Dia</h2>
                <p>Desayuno luego Tendremos una caminata de dos o tres horas (explicación de la flora e insectos) visita y baño en la cascada escondida almuerzo y retorno a Baños<br> NOTA: TODOS LOS GUIAS DE NUESTRA COMPANIA POSEEN LICENCIAS<br> El paseo en canoa se lo realizara siempre que el rio ofrezca las condiciones para hacerlo.</p>
                <div class="ui stackable grid">
                                    <div class="eight wide column">
                        <div class="ui list">
                            <h2>Incluye</h2>
                                                        <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">
                                    Transporte privado                                </div>
                            </div>
                                                        <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">
                                    Almuerzo                                </div>
                            </div>
                                                        <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">
                                    Entradas                                </div>
                            </div>
                                                        <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">
                                    Botas                                </div>
                            </div>
                                                        <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">
                                    Ponchos                                </div>
                            </div>
                                                        <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">
                                    Guia Certificado                                </div>
                            </div>
                                                    </div>
                    </div>
                                    <div class="eight wide column">
                        <div class="ui list">
                            <h2>¿Qué llevar?</h2>
                                                        <div class="item">
                                <i class="reply green icon"></i>
                                <div class="content">
                                    Repelente para mosquitos                                </div>
                            </div>
                                                        <div class="item">
                                <i class="reply green icon"></i>
                                <div class="content">
                                    Ropa para clima tropical                                </div>
                            </div>
                                                        <div class="item">
                                <i class="reply green icon"></i>
                                <div class="content">
                                    Bloqueador solar                                </div>
                            </div>
                                                        <div class="item">
                                <i class="reply green icon"></i>
                                <div class="content">
                                    Cámara                                </div>
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
                        <div class="content">2 Días</div>
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