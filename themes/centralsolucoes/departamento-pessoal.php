<main class="main-departamentos container">    
    <div class="bx-banner-topo">
        <div class="banner-topo content">
            <div class="info-dp">
                <div class="thumb-info-dp">
                    <img src="<?= REQUIRE_PATH; ?>/assets/image/central-solucoes-contabilidade.png" alt=""/>
                </div>
            </div>
            <div class="info-dp">
                <div class="desc-info-dp">
                    <p>
                        A contabilidade é uma das ferramentas oferecidas pelo <strong>GRUPO CENTRAL SOLUÇÕES</strong> para o gerenciamento integrado do patrimônio de seus clientes. Indispensável para a gestão de negócios, o setor é atendido por profissionais especializados e atualizados com as normas mais recentes de Contabilidade Nacional e Internacional, especialmente voltadas para as demandas necessárias.
                    </p>
                    <div class="bx-btn-dp">
                        <a href="<?= HOME; ?>/contato"><span class="fa fa-user"></span> Solicite um orçamento</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="bx-departamentos">
            <h1>Departamento Pessoal</h1>
            <p>
                Parte integrante da estrutura organizacional, o Departamento Pessoal é responsável pelos assuntos referentes aos funcionários, desde a sua contratação, ao pagamento de salário. No <strong>GRUPO CENTRAL SOLUÇÕES</strong>, a área responde pelo cumprimento da legislação trabalhista e previdenciária da organização, envolvendo os processos de admissões e demissões, folha de pagamento, transporte, licenças, 13º salário, férias, benefícios, treinamento e orientação, além do arquivamento e manutenção da documentação exigida pelo governo, entre outros.
            </p>
            <p>
                Além disso, nossa equipe multiprofissional especializada trabalha com a atualização de livros e/ou fichas de empregados, apuração e elaboração das guias para pagamento dos impostos incidentes (encargos trabalhistas) sobre a folha de pagamento; e com a elaboração das obrigações acessórias trabalhistas, como CAGED, RAIS e Informe de Rendimentos. Todos os serviços correspondem às normas e convenções coletivas, dando segurança ao empresário, reduzindo seus riscos trabalhistas.
            </p>

            <div class="list-departamentos">
                <div class="">
                    <div class="header-servicos-2"> 
                        <div class="header-link-2">
                            <h2>Links úteis</h2>
                            <p>Para mais esclarecimentos, selecionamentos algum</p>
                        </div>
                    </div>
                    <?php
                    for ($i = 1; $i <= 12; $i++):
                        ?>
                        <div class="bx-receita">
                            <div class="banner-receita">
                                <a href="" target="_blank">
                                    <img src="<?= REQUIRE_PATH; ?>/assets/image/rf-01.png" alt=""/>
                                </a>  
                            </div> 
                        </div>  
                        <?php
                    endfor;
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>