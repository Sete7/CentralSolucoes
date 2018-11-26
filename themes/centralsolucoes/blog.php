<?php
$categoriaController = new CategoriaController();
$subCategoriaController = new SubcategoriaController();
$paginaController = new PaginaController();
$pagina = new Pagina();
$helper = new Helper();
?>
<main class="main-blog  container">
    <section class="sec-blog">     
        <div class="content">
            <?php
            $retornaCategoria = $categoriaController->retornaCategoria(2);
            $titulo = $retornaCategoria->getTitulo();
            ?>
            <h1 class="title-blog"><?= $titulo; ?></h1>
            <article class="box-blog">
                <?php
                $pagina = $paginaController->ListaPaginaCategoria(2, 0, 10);
                foreach ($pagina as $itemBlog):
                ?>
                <div class="row-blog">

                    <h6><span>Public.: <?= $helper->converteData($itemBlog->getData()); ?></span></h6>
                    <div class="thumb-blog">
                        <img src="<?= HOME; ?>/tim.php?src=/upload/<?= $itemBlog->getThumb(); ?>&w=200&h=150&zc=0" alt=""/>
                    </div>

                    <div class="info-blog">
                        <h1><?= $helper->Words($itemBlog->getTitulo(), 3) ?></h1>
                        <a href="<?= HOME; ?>/artigo/<?= $itemBlog->getUrl(); ?>" class="btn btn-artigo">Saiba Mais</a>
                    </div>                
                </div>
                <?php
                endforeach;
                ?>

            </article>
        </div>
    </section>
</main>