<?php
$url = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
$url = ($url ? $url : 'index');
$url = explode('/', $url);
$urlCod = $url[1];

$artigoController = new PaginaController();
$helper = new Helper();

$listarArtigo = $artigoController->retornaUrlPagina($urlCod);
if ($listarArtigo == null):
    echo 'Não existe Artigo cadastrado';

else:
    $cod_artigo = $listarArtigo->getCod();
    $codCategoria = $listarArtigo->getCategoria()->getCod();
    $nomeCategoria = $listarArtigo->getCategoria()->getTitulo();
    $thumb = $listarArtigo->getThumb();
    $titulo = $listarArtigo->getTitulo();
    $data = $listarArtigo->getData();
    $descricao = html_entity_decode($listarArtigo->getDescricao());
    ?>
    <div class="main-artigo container">
        <div class="content">
            <h1>Artigo</h1>
            <div class="box-artigo">
                <h6>Public.: <span><?= $helper->converteData($data); ?></span></h6>
                <div id="artigoDia" class="thumb-img-artigo">
                    <img src="../upload/<?= $thumb; ?>" alt="<?= $titulo ?>" title="<?= $titulo ?>"/>    
                    <div class="desc-artigo">
                        
                    </div>
                    <div class="desc-artigo">
                        <h3><?= $titulo; ?></h3>
                        <p>
                            <?= $descricao; ?>
                        </p>
                    </div>

                </div>            
            <?php
            endif;
            ?>
            <div class="artigos-recentes">
                <h2>Artigos Recentes</h2>
              <?php
                    $artigoSidebar = $artigoController->ListaPaginaCategoria(2, 0, 5);
                    foreach ($artigoSidebar as $sidebar):
                ?>
                    <a href="<?= HOME; ?>/artigo/<?= $sidebar->getUrl(); ?>" class="box-art-thumb">               
                        <img src="<?= HOME; ?>/tim.php?src=upload/<?= $sidebar->getThumb();?>&w=80&h=50&zc=0" alt="<?= $sidebar->getTitulo();?>">
                        <div class="text-recente">
                            <h3><?php echo $helper->Words($sidebar->getTitulo(), 2);?></h3>
                            <p> 
                                <?php echo $helper->Words(html_entity_decode($sidebar->getDescricao()), 2); ?>
                            </p>
                        </div>
                    </a>
                    <?php
                endforeach;
                ?>
            </div>

        </div>
    </div>
</div>