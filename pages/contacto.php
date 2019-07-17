<!doctype html>
<html lang="es">
<head>
    <title>Contacto</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="css/datedropper.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.1/dist/jquery.fancybox.min.css" />
</head>
<body>
    <?php include "lib/header.php"; ?>
    <article class="ui container wall-minus">
        <h1>Contactanos</h1>
        <div class="ui stackable grid">
            <div class="eight wide column">
                <form class="ui form contacto">
                    <div class="field">
                        <label>Nombres</label>
                        <input type="text" id="name" name="name" placeholder="Juan Perez">
                    </div>
                    <div class="field">
                        <label>Correo Electronico</label>
                        <input type="text" id="email" name="email" placeholder="usuario@correo.com">
                    </div>
                    <div class="field">
                        <label>Número de Telefono</label>
                        <input type="text" id="phone" name="number" placeholder="0987654321">
                    </div>
                    <div class="field">
                        <label>¿Qué deseas saber o porque quieres contactarnos?</label>
                        <textarea id="message"></textarea>
                    </div>
                    <button class="ui orange button large float-right contacto-submit" type="submit">Enviar</button>
                </form>
            </div>
            <div class="eight wide column">
                <h2>Nos ubicamos en:</h2>
                <div class="YTvideo-out">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1948.7656412360304!2d-78.42405027065263!3d-1.397537287365083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d3916e6dc92cff%3A0xdf5be66ecb756c1!2sTop+Sport+Adventure!5e0!3m2!1ses-419!2sec!4v1540861251194" class="YTvideo" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="paypal-contacto">
                    <img src="img/paypal.png"/>
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