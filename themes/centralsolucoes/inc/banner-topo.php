<?php
$sliderController = new SliderController();
$helper = new Helper();
?>
<section class="slider">
    <h1 class="font-zero">Últimas do site:</h1>
    <div class="slider_controll">
        <div class="slide_nav back"><i class="fa fa-chevron-left"></i></div>
        <div class="slide_nav go"><i class="fa fa-chevron-right"></i></div>
    </div> 
<?php
$controle_active = 2;
$tamDesktop = "g";
$sliderDesktop = $sliderController->ListarTamanhoSlider($tamDesktop);
foreach ($sliderDesktop as $sli):
    if ($controle_active == 2):
        ?>
            <article class="slider_item first">
                <h1 class="font-zero">Banner</h1>
                <a href="#"  title="" class="box-slider">
                    <picture alt="Restaurante Mineiro D'Lurdes">
                        <source media="(min-width: 1280px)" srcset="tim.php?src=uploads/01.jpg&w=1366&h=400" />
                    </picture> 
                    <img src="<?= HOME;?>/upload/<?= $sli->getSlider_thumb(); ?>" alt="" title="">
                </a>
            </article>
        <?php
        $controle_active = 1;
    else:
        ?>
            <article class="slider_item">
                <h1 class="font-zero">Banner</h1>
                <a href="#"  title="" class="box-slider">
                    <picture alt="">
                        <!--<source media="(min-width:1600px)" srcset="tim.php?src=uploads/01.jpg&w=200&h=600">-->
                    </picture>    
                    <img src="<?= HOME;?>/upload/<?= $sli->getSlider_thumb(); ?>" alt="" title="">
                </a>
            </article>
    <?php
    endif;
endforeach;
?>

</section>