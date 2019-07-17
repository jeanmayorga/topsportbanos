<?php 
    $host= "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
?>
<meta charset="utf-8">
<meta name="description" content="<?php echo $description; ?>"/>
<meta name="keywords" content="<?php echo $keywords; ?>">
<link rel="canonical" href="<?php echo $host; ?>" />
<link rel="publisher" href="https://plus.google.com/100491429476852263214/"/>
<meta property="og:locale" content="es_LA" />
<meta property="og:type" content="article" />
<meta property="og:title" content="<?php echo $titulo; ?> | Top Sport Adventure" />
<meta property="og:description" content="<?php echo $description; ?>" />
<meta property="og:url" content="<?php echo $host; ?>" />
<meta property="og:site_name" content="Top Sport Adventure" />
<meta property="article:publisher" content="https://www.facebook.com/topsportadventure/" />
<meta property="article:author" content="http://fb.com/topsportadventure" />
<meta property="og:image" content="img/<?php echo $tag; ?>/wall.jpg" />
<meta property="og:image:width" content="1400" />
<meta property="og:image:height" content="800" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="<?php echo $description; ?>" />
<meta name="twitter:title" content="<?php echo $titulo; ?>" />
<meta name="twitter:site" content="@socialmood" />
<meta name="twitter:image" content="img/<?php echo $tag; ?>/wall.jpg" />
<meta name="twitter:creator" content="@socialmood" />
<meta name="robots" content="index, follow" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="css/datedropper.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.1/dist/jquery.fancybox.min.css" />
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Product",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.5",
    "reviewCount": "11"
  },
  "description": "<?php echo $description; ?>",
  "name": "<?php echo $titulo; ?>",
  "image": "img/<?php echo $tag; ?>/wall.jpg",
  "offers": {
    "@type": "Offer",
    "availability": "http://schema.org/InStock",
    "price": "<?php echo $precio; ?>",
    "priceCurrency": "USD"
  }
}
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128500930-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-128500930-1');
</script>
