<main class="main-condominio container">
    <section class="sec-condominio">
        <h1 class="font-zero">Nosso Condomínio</h1>
        <div class="content">
            <!--------------------------------------------------- ARTIGO 1 --------------------------------->
            <article class="art-cod-comercial">
                <div class="container-cond">
                    <div class="thumb-cond">
                        <img src="<?= REQUIRE_PATH; ?>/assets/image/comercial.png" alt=""/>
                    </div>
                </div>
                <div class="container-cond">
                    <h2>Condomínio <strong>Comercial</strong></h2>
                    <p>Para administrar um condomínio comercial, é preciso dominar as exigências que
                        a complexidade deste segmento requer. O <strong>GRUPO CENTRAL SOLUÇÕES</strong> oferece uma equipe
                        multiprofissional especializada, com um trabalho diferenciado, com qualidade e expertise,
                        somadas à inovação e implantação de novas tecnologias, garantindo um atendimento de
                        excelência aos diversos tipos e tamanhos de condomínios comerciais.</p>

                    <p>Com experiência na gestão de grandes condomínios , o <strong>GRUPO CENTRAL SOLUÇÕES</strong> trabalha
                        com uma gama de serviços integrados, personalizados e exclusivos, que facilitam a
                        administração, garantindo o pleno funcionamento da atividade comercial.</p>

                    <p>A administração de condomínios comerciais obedece à mesma legislação dos residenciais,
                        entretanto, possui necessidades e exigências específicas em termos de segurança
                        e conservação. Por isso, o cliente conta, ainda, com o suporte necessário para
                        atender essas e outras demandas, como garantir segurança nas obrigações trabalhistas,
                        financeiras, fiscais e legais, além de outras soluções que contribuem para a 
                        gestão condominial ágil, transparente e eficiente.</p>
                </div>
            </article>

            <!--------------------------------------------------- ARTIGO 2 --------------------------------->
            <!--<article class="art-cod-residencial">-->
            <article class="container-cond-b">
                <div class="desc-cond">
                    <h2>Condomínio <strong>residencial</strong></h2>
                    <p>Com estrutura especializada para atender condomínios residenciais, o <strong>GRUPO CENTRAL
                            SOLUÇÕES</strong>, tem a ferramenta certa para auxiliar síndicos e condôminos na operacionalização
                        administrativa, financeira e jurídica, com profissionalização, sustentabilidade e
                        melhoria contínua na qualidade dos serviços prestados.</p>

                    <p>Os clientes do <strong>GRUPO CENTRAL SOLUÇÕES</strong> também têm acesso exclusivo à área restrita,
                        localizada no topo da página. Com seu login e senha, o usuário acessa o sistema de
                        integração dos serviços para condôminos, o CENTRALNET; tem acesso online a boletos,
                        balancetes e informativos; reservas online de áreas de lazer do condomínio; além de
                        acesso aos estatutos e atas, bem como suporte online da equipe do <strong>GRUPO CENTRAL SOLUÇÕES</strong>.</p>
                </div>
                <div class="desc-cond">
                    <div class="thumb-resd">
                        <img src="<?= REQUIRE_PATH; ?>/assets/image/residencial.png" alt=""/>
                    </div>
                </div>                
            </article>

            <!--------------------------------------------------- ARTIGO 3 --------------------------------->
            <article class="art-info-thumb">
                <h2>Soluções integradas para seu condomínio</h2>
                <p>Nosso objetivo é facilitar a gestão do condomínio, oferecendo soluções integradas
                    operacionais e administrativas, de pessoal, financeira, jurídica e contábil.</p>
                <a href="<?= HOME; ?>/assessoria-administrativa-condominial" class="thumb-info-resd">
                    <div class="thumb-if-resd">
                        <img src="<?= REQUIRE_PATH; ?>/assets/image/adc.png" alt=""/>
                    </div>               
                    <div class="titulo-servicos">                                   
                        <h3> Assessoria Administrativa Condominial</h3> 
                    </div>               
                </a>               

                  <a href="<?= HOME; ?>/rh-departamento-pessoal" class="thumb-info-resd">
                    <div class="thumb-if-resd">
                        <img src="<?= REQUIRE_PATH; ?>/assets/image/dp.png" alt=""/>
                    </div>  
                    <div class="titulo-servicos">
                        <h3>Departamento Pessoal</h3>
                    </div>
                </a>

                   <a href="<?= HOME; ?>/assessoria-contabil-prestacao-de-contas" class="thumb-info-resd">
                    <div class="thumb-if-resd">
                        <img src="<?= REQUIRE_PATH; ?>/assets/image/acpc.png" alt=""/>
                    </div>  
                    <div class="titulo-servicos"> 
                        <h3>Assessoria contábil – prestação de contas</h3>
                    </div>
                </a>

                   <a href="<?= HOME; ?>/controle-de-inadimplencia-eficiente" class="thumb-info-resd">
                    <div class="thumb-if-resd">
                        <img src="<?= REQUIRE_PATH; ?>/assets/image/cie.png" alt=""/>
                    </div>  
                    <div class="titulo-servicos"> 
                        <h3>Controle de inadimplência eficiente</h3>
                    </div>
                </a>
            </article>
        </div>

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
    </section>
</main>