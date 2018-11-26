<?php require_once './app/config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>Grupo Central Soluções</title>        
        <link rel="shortcut icon" href="<?= INCLUDE_PATH; ?>//assets//image/favicon.png" type="image/x-icon">               
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500" rel="stylesheet">
        <link href="<?= INCLUDE_PATH; ?>/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= INCLUDE_PATH; ?>/assets/css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="<?= INCLUDE_PATH; ?>/assets/css/jcarousel.responsive.css" rel="stylesheet" type="text/css"/>
        <link href="<?= INCLUDE_PATH; ?>/assets/css/media.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <!--------------------------------------------------------CABECALHO-------------------------->    
        <header class="main-header bg-grey container">
            <div class="content">

                <!------------------------------------------------------ MENU MOBI ------------------------------------------>
                <div class="sidebar_nav">   
                    <div class="logo-menu-mobi">
                        <img src="<?= INCLUDE_PATH; ?>/assets/image/logo-menu-mobi.png" alt=""/>
                    </div>

                    <ul class="menu_mobile"> 
                        <li><a title="Home" href="<?= HOME; ?>">Home</a></li>
                        <li><a title="Quem Somos" href="<?= HOME; ?>/quemsomos">Quem Somos</a></li>
                        <li><a title="Condominio" href="<?= HOME; ?>/condominio">Condomínio</a></li>
                        <li><a title="Terceirização" href="<?= HOME; ?>/terceirizacao">Terceirização</a></li>
                        <li><a title="Contabilidade" href="<?= HOME; ?>/contabilidade">Contabilidade</a></li>
                        <li><a title="Fale Conosco" href="<?= HOME; ?>/contato">Contato</a></li>
                        <li><a title="Blog" href="<?= HOME; ?>/blog">Blog</a></li>
                    </ul>
                </div>
                <!------------------------------------------------------ MENU MOBI ------------------------------------------>

                <div class="topo">
                    <div class="main-logo">
                        <a href="<?= HOME; ?>" class="logo">
                            <img src="<?= INCLUDE_PATH; ?>/assets/image/logo-grupo-central.png" alt="" title="Grupo Central Soluções"/>
                        </a>
                    </div>
                    <div class="login-topo">                        
                        <div class="login">
                            <strong><i class="fa fa-home"></i></strong> 
                            <a href="<?= HOME; ?>/adicionar" class="modal_ajax"> Área do <span>Condominío</span></a>
                        </div>                        
                    </div>
                    <div class="central-contato"> 
                        <ul>
                            <li class="list-fone">
                                <div class="phone">
                                    <div class="thumb-phone">
                                        <img src="<?= INCLUDE_PATH; ?>/assets/image/phone-b.png" alt=""/>
                                    </div> 
                                    <div class="box-central">
                                        <h3>CENTRAL DE ATENDIMENTO<br/>
                                            <span>( 6 1 ) 3 3 5 6  -  8 5 1 4</span>
                                        </h3>
                                    </div>
                                </div> 
                            </li>

                            <li class="social-topo">
                                <a href="https://www.facebook.com/centralsolucoesdf" class="face" target="_blank">                                 
                                    <img src="<?= INCLUDE_PATH; ?>/assets/image/face-b.png" alt=""/>
                                </a>  
                                <a href="https://www.instagram.com/centralsolucoes/" class="instan" target="_blank">
                                    <img src="<?= INCLUDE_PATH; ?>/assets/image/instan-b.png" alt="Instagram" title="Instagram"/>                                   
                                </a>
                            </li>

                    </div>
                </div>
                <button class="sidebarBtn">
                    <span></span>
                </button>
                <div class="clear"></div>
            </div>
            <!-------------------------------------------------------- FIM TOPO LOGO -------------------------------------------->
            <div class="nav-topo  container">
                <div class="content">


                    <div class="header-menu">
                        <ul class="menu">
                            <li><a href="<?= HOME; ?>" title="Início">INÍCIAL</a></li>
                            <li class="services"><a href="<?= HOME; ?>/quemsomos" title="Quem Somos">QUEM SOMOS</a></li>
                            <li class="services"><a href="<?= HOME; ?>/condominio" title="Condomínios">CONDOMÍNIOS</a></li>
                            <li><a href="<?= HOME; ?>/terceirizacao" title="Terceirização">TERCEIRIZAÇÃO</a></li>
                            <li><a href="<?= HOME; ?>/contabilidade" title="Contabilidade">CONTABILIDADE</a></li>
                            <li><a href="#contato" title="Contato">CONTATO</a></li>                                  
                            <li><a href="<?= HOME; ?>/trabalhe-conosco" title="Trabalhe Conosco">TRABALHE CONOSCO</a></li>                                  
                            <li><a href="<?= HOME; ?>/blog" title="Blog">BLOG</a></li>                                  
                        </ul>
                    </div>

                    <div class="clear"></div>
                </div>               
            </div>
        </header> 

        <!-- --------------------------------- conteudo ---------------------------- -->
        <?php
        $Url[1] = (empty($Url[1]) ? null : $Url[1]);
        if (file_exists(REQUIRE_PATH . '/' . $Url[0] . '.php')):
            require REQUIRE_PATH . '/' . $Url[0] . '.php';
        elseif (file_exists(REQUIRE_PATH . '/' . $Url[0] . '/' . $Url[1] . '.php')):
            require REQUIRE_PATH . '/' . $Url[0] . '/' . $Url[1] . '.php';
        else:
            require REQUIRE_PATH . '/404.php';
        endif;
        ?>
        <!-- --------------------------------- conteudo ---------------------------- --> 


        <!------------------------------------ RODAPÉ ------------------------------ -->    
        <footer class="main-footer container">            
            <div class="sec-footer">   
                <div class="ctt-footer">
                    <div id="contato" class="content">                     
                        <div class="tlt-ctt-footer">
                            <h2>
                                Contato
                            </h2>                            
                            <p>Entre em contato. Será um prazer atendê-lo!</p>
                        </div>

                        <div class="box-ctt-footer ">
                            <div class="div-form-home contato-footer">
                                <?php
                                require './mailer/form-contato.php';
                                ?>
                            </div> 
                            <div class="info-contato-home contato-footer">   
                                <div class="">
                                    <p><i class="fa fa-phone"></i>(61) 3356-8514 </p>
                                    <p><i class="fa fa-envelope"></i>contato @ grupocentralsolucoes . com . br </p>
                                    <p><i class="fa fa-map-marker"></i>Edifício Pátio Capital QS 3 <br/>
                                        EPCT Lotes 3, 5, 7, 9 Torre Sul<br/>
                                        Salas 515/516 Águas Claras-DF </p>
                                </div>
                            </div>                       
                        </div>                       

                        <div class="clear"></div>
                    </div>
                </div> 
                <div class="clear"></div>
                <div class="map-ffoter container">
                    <iframe id="localizacao" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d245644.688411768!2d-48.043338!3d-15.846174!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5ad0ff3607c65440!2zQ2VudHJhbCBTb2x1w6fDtWVz!5e0!3m2!1spt-BR!2sbr!4v1539721648135" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <div class="clear"></div>
                </div>
            </div>
        </footer>

        <script src="<?= INCLUDE_PATH; ?>/assets/js/jquery-3.2.1.min.js"></script>
        <script src="<?= INCLUDE_PATH; ?>/assets/js/jquery.js"></script>
        <script src="<?= INCLUDE_PATH; ?>/assets/js/slider_show.js"></script>
        <script src="<?= INCLUDE_PATH; ?>/assets/js/jcarousel.responsive.js"></script>
        <script src="<?= INCLUDE_PATH; ?>/assets/js/jquery.jcarousel.min.js"></script>            
        <script src="themes/centralsolucoes/assets/js/script.js" type="text/javascript"></script>
        <script src="<?= INCLUDE_PATH; ?>/assets/js/scriptSite.js" type="text/javascript"></script>


        <script src="" type="text/javascript">
            $(function () {
                $("#btAtualizarValor").click(function () {
                    $("#id_price").val($("#novoValor").val());

                });
            });
        </script>

        <!---------------------------------MODAL-------------------------------------------------->
        <div class="modal_bg">
            <button id="close"><i class="fa fa-close"></i></button>
            <div class="modal"><div>

                </div>
            </div>
        </div>
        <!---------------------------------MODAL-------------------------------------------------->  

    </body>
</html>