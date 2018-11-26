<!--------------------------------- SLIDE SITE -------------------------------->
<div class="main-slider container">
    <?php
    require_once 'inc/banner-topo.php';
    ?>
    <div class="clear"></div>
</div>

<!-- --------------------------------- CONTEUDO ---------------------------- -->
<main class="main-home container">
    <section class="sec-home">
        <h1 class="font-zero">Informações Gerais</h1>                 
        <article class="content">

            <div class="desc-home">
                <h2>Soluções integradas 
                    para você.</h2>
                <p>
                    Nossas soluções são conduzidas por uma equipe multiprofissional 
                    especializada, para atender com qualidade e eficiência em todas
                    as áreas de atuação.Confira o portfólio de serviços e solicite seu orçamento.    
                </p>
            </div>

            <div class="banner-desc">
                <a href="<?= HOME; ?>/condominio" class="banner-desc-info">
                    <div class="thumb">
                        <img src="<?= REQUIRE_PATH; ?>/assets/image/condominios.png"  alt=""/>
                    </div>
                    <h3>Condomínio</h3>
                </a>
                <a href="<?= HOME; ?>/terceirizacao" class="banner-desc-info">
                    <div class="thumb">
                        <img src="<?= REQUIRE_PATH; ?>/assets/image/terceirizacao.png" alt=""/>
                    </div>
                    <h3>Terceirização</h3>
                </a>
                <a href="<?= HOME; ?>/contabilidade" class="banner-desc-info">
                    <div class="thumb">
                        <img src="<?= REQUIRE_PATH; ?>/assets/image/contabilidade.png" alt=""/>
                    </div>
                    <h3>Contabilidade</h3>
                </a>
                <div class="btnContHome">
                    <a href="<?= HOME; ?>/#contato">Entre em Contato</a>
                </div>
            </div>
            <div class="clear"></div>
        </article>
    </section>
    <section class="sec-home-two container">
        <h1 class="font-zero">Como Valorizar Seu Patrimônio</h1>
        <!-------------------- VALORES ---------------------------------->
        <article class="art-valores">
            <div class="thumb-valores">
                <img src="<?= REQUIRE_PATH; ?>/assets/image/banner-05.jpg" alt=""/>
            </div>
            <div class="desc-valores">
                <h2>Soluções que valorizam o seu patrimônio</h2>
                <p>

                    Estabelecida em Brasília, a Central Soluções está consolidada no mercado,
                    tendo experiência na prestação de serviços para órgãos governamentais,
                    grandes condomínios e lojas, oferecendo sua expertise no gerenciamento de
                    soluções integradas, resultando em segurança, confiança e conforto
                    a seus clientes.
                </p>
                <div class="box-btn">
                    <a class="btnConhecer" href="<?= HOME; ?>/#localizacao">Venha nos conhecer</a>
                </div>
            </div>
            <div class="clear"></div>
        </article>
        <div class="clear"></div>
        <!-------------------- CLIENTES ---------------------------------->
        <article class="art-clientes">                   
            <div class="content">
                <div class="desc-clientes">
                    <h2>Clientes</h2>  
                </div>

                <div class="desc-slider-cli">
                    <?php
                        require_once 'inc/slyde-clientes.php';
                    ?>
                </div>
            </div>
            <div class="clear"></div>
        </article>

        <!-------------------- PORQUE ---------------------------------->
        <article class="art-porque">                   
            <div class="content">
                <div class="desc-porque">
                    <h2>
                        Por que escolher o <br/>
                        <span> Grupo Central Soluções.</span>
                    </h2>  
                </div>

                <div class="thumb-icon">
                    <div class="icon-pq">
                        <img src="<?= REQUIRE_PATH; ?>/assets/image/icones1.png" alt=""/>
                    </div>   
                    <div class="icon-pq">
                        <img src="<?= REQUIRE_PATH; ?>/assets/image/icones2.png" alt=""/>
                    </div>   
                    <div class="icon-pq">
                        <img src="<?= REQUIRE_PATH; ?>/assets/image/icones3.png" alt=""/>
                    </div>   
                    <div class="icon-pq">
                        <img src="<?= REQUIRE_PATH; ?>/assets/image/icones4.png" alt=""/>
                    </div>   
                </div>
            </div>
            <div class="clear"></div>
        </article>                
        <div class="clear"></div>
    </section>
</main>