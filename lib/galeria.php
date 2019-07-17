<div class="owl-carousel owl-theme owl-page" id="pageCarusel">
    <?php
        $total_imagenes = count(glob('img/'.$tag.'/{*.jpg}', GLOB_BRACE)) - 2;
        for ($foto=0; $foto < $total_imagenes; $foto++) { 
            ?>
                <a class="item" data-fancybox="gallery" href="<?php echo 'img/'.$tag.'/'.$foto.'.jpg'; ?>">
                    <img src="<?php echo 'img/'.$tag.'/'.$foto.'.jpg'; ?>" alt="<?php echo $titulo; ?>" />
                </a>
            <?php
        }
    ?>
</div>