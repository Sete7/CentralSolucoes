<?php
$categoriaController = new CategoriaController();
$clientesControlle = new PaginaController();
$helper = new Helper();
?>
<div class="div-slider" >
    <div class="wrapper">       
        <div class="jcarousel-wrapper">
            <div class="jcarousel">
                <ul>                                                                           
                    <?php
                    $listarClientes = $clientesControlle->ListaPaginaCategoria(4, 0, 20);
                    foreach ($listarClientes as $clientes):
                        ?>
                        <li>
                            <img src="<?= HOME; ?>/tim.php?src=upload/<?= $clientes->getThumb(); ?>&w=200&h=180&zc=0" alt="<?= $clientes->getTitulo(); ?>">
                            <div class="desc-clientes">
                                <h1><?= $clientes->getTitulo(); ?></h1>
                                <p><?= html_entity_decode($clientes->getDescricao()); ?></p>
                            </div>
                        </li>
                        <?php
                    endforeach;
                    ?>                    
                </ul>
            </div>

            <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
            <a href="#" class="jcarousel-control-next">&rsaquo;</a>

            <p class="jcarousel-pagination"></p>
        </div>
    </div>    
</div>
