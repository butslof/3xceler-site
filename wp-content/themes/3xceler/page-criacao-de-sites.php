<?php
// Template Name: Criação de Sites
?>
<?php 
    $args = array(
    'page' => 'criacao-de-sites',
    'class' => ''
    ); 
?>
<?php get_template_part('header', null, $args); ?>
<?php
    $args = array(
        'title1' => "Criação de",
        'title2' => "Sites",
        'text1' =>'<p>Não adianta rodar campanhas, fazer ações de marketing ou SEO se o seu site não passa credibilidade, confiança, não gera engajamento e, principalmente, possui baixa taxa de conversão.</p>',
        'text2' =>' 
            <p>
            Precisamos falar sobre nosso trabalho de criação de sites, basta você conhecer nossos projetos e entender os processos que desenvolvemos ao criar um site para nossos clientes e com certeza notará um grande diferencial em nosso trabalho.
            </p>
            <p>
            Já atendemos todos os tipos de segmentos, desde prestadores de serviços, tecnologia da informação, médicos, clínicas, indústrias, setor público e muito mais. Isso nos da muita bagagem para saber o que realmente mais funcionou para nossos clientes. Não importa se você já possui um site ou se ainda não. Nós somos a melhor agência para você desenvolver seu site.
            </p>
            <p>
            Entre em contato agora conosco, agende uma conferência e entenda melhor como podemos transformar seu site em um motor de vendas e leads.
            </p>
        ',
        'title-button' => "QUERO VENDER MAIS PELO MEU SITE"  
    );
?>
<?php get_template_part('includes/sections-globals/intro-internas', null, $args); ?>
<section id="pq-criar-seu-site">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="title-large min">
                    <span class="bg-title">POR QUE CRIAR SEU SITE CONOSCO?</span>
                </h2>
                <p>
                    Ao invés de tentarmos convencer você, te convidamos a ler esse conteúdo, visitar nosso portfólio e, ao final de sua análise, tirar suas próprias conclusões, podendo, inclusive, marcar um papo sem compromisso com a gente para tirar suas dúvidas. A criação de site para sua empresa é um fator importante para quem quer ampliar e melhorar suas vendas. Cada negócio possui uma necessidade diferente, por isso nem sempre o cliente consegue visualizar qual o melhor investimento para seu projeto. Nós avaliamos seu quadro de necessidades e objetivos e os direcionamos à melhor solução.
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid container-slides">
        <div class="row row-slide">
            <div class="col-12 col-slider">
                <div class="bg-mockup"></div>
                <div class="splide slider-clientes">
                    <div class="splide__track">
                        <div class="splide__list">
                            <div class="splide__slide">
                                <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/mockups-ints/01-core-drinks.jpg" class="no-lazy" alt="core drinks" title="core drinks" class="presentation-instance">
                            </div>
                            <div class="splide__slide">
                                <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/mockups-ints/02-bem-estar-idosos.jpg" class="no-lazy" alt="bem estar do idoso" title="bem estar do idoso" class="presentation-instance">
                            </div>
                            <div class="splide__slide">
                                <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/mockups-ints/03-carneiro-cagnacci.jpg" class="no-lazy" alt="carneiro cagnacci" title="carneiro cagnacci" class="presentation-instance">
                            </div>
                            <div class="splide__slide">
                                <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/mockups-ints/04-cssat.jpg" alt="cssat" class="no-lazy" title="cssat" class="presentation-instance">
                            </div>
                            <div class="splide__slide">
                                <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/mockups-ints/05-caio-araujo.jpg" class="no-lazy" alt="caio araujo" title="caio araujo" class="presentation-instance">
                            </div>
                            <div class="splide__slide">
                                <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/mockups-ints/06-enercom.jpg" class="no-lazy" alt="enercom" title="enercom" class="presentation-instance">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="box-drag text-center">
                    <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/icon-drag-primary.png" alt="Ícone indicando ação de deslizar para mover o carrossel" title="Ícone indicando ação de deslizar para mover o carrossel">
                    <br><span class="text">Próximo Cliente</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="como-funciona">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="title-large title-large-full">
                    <span>Etapas da</span><br>
                    Criação de Sites
                </h2>
                <span class="title-link">
                    Confira nosso passo a passo: 
                </span>
                <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/icon-arrow-right.png" class="d-none d-lg-block" title="Entenda nossa abordagem" alt="Entenda nossa abordagem">

            </div>
        </div>
        <div class="row row-etapa">
            <div class="col-12 col-etapa">
                <span class="title-large min">
                    <span>Primeira Etapa </span><br>
                    <span class="bg-title">
                        Estudo de Mercado
                    </span>
                </span>
                <div class="number">01</div>
            </div>
        </div>
        <div class="row line-items">
            <div class="col-12 ">
                <div class="d-lg-flex">
                    <div class="timeline-step splide__slide">
                        <h3 class="t-2g t-primary margin-2xg item-title" data-index="01.">Análise de<br> Concorrência</h3>
                        <p class="t-s t-primary item-text">
                            Uma das etapas iniciais e principais de nosso planejamento para criação de um site novo para nossos clientes é o mapeamento da concorrência direta e uma avaliação com profundidade para entender como o mercado está se posicionando, tecnologias, arquitetura de informação, formas de conversão, mas, acima de tudo, verificar os problemas que todos eles ou alguns tenham hoje.
                        </p>
                        <p>
                            Esta etapa é muito importante para entendermos melhor como o mercado está atualmente, obtermos sacadas para trazer diferenciais para o projeto de criação de site e, principalmente, criarmos oportunidades para melhorarmos e/ou otimizarmos problemas que ainda não foram solucionados.
                        </p>
                    </div>
                    <div class="timeline-step splide__slide">
                        <h3 class="t-2g t-primary margin-2xg item-title" data-index="02.">Análise de <br>Oportunidades</h3>
                        <p class="t-s t-primary item-text">
                            A análise de oportunidades de nosso planejamento é onde começamos a mapear tráfego orgânico e pago dos concorrentes. Levantamos o que eles andam fazendo em relação a anúncios e em relação ao SEO. Quais são as palavras que geram mais tráfego, topo, meio e fundo do funil e a partir disso, iniciamos o mapeamento mental para o novo projeto baseado nos estudos realizados.
                        </p>
                        <p>
                            É importante compreender que para um projeto de criação de site, estas etapas são fundamentais para obtermos resultados acima da média, pois para cada oportunidade detectada, existe um tipo de conteúdo e, principalmente, um tipo de arquitetura de informação para fomentar o usuário ou levá-lo a uma ação de conversão.
                        </p>
                    </div>
                    <div class="timeline-step splide__slide">
                        <h3 class="t-2g t-primary margin-2xg item-title" data-index="03.">Wireframing e <br>Prototipagem</h3>
                        <p class="t-s t-primary item-text">
                            Chegou a grande hora de começar a montar o wireframe da arquitetura de informação para seu novo site. Esta é a etapa final de prototipagem que antecede a criação do layout. Nela definimos quais informações serão apresentadas em cada página do layout, prevendo funcionalidades, diagramação e tecnologias que serão utilizadas.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/prop-arrows-up.png"  class="bg-arrows" title="arrows" alt="arrows">
    </div>
</section>
<section id="etapa-2">
    <!-- <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/prop-paper-left.png"  class="icon-papper-1" title="icon-papper" alt="icon-papper">
    <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/prop-pencils-right.png"  class="icon-papper-2" title="icon-papper" alt="icon-papper"> -->

    <div class="container">
        <div class="row lines-etapas"> 
            <div class="col-12">
                <h2 class="title-large min">
                    <span class="min">Segunda Etapa</span><br>
                    <span class="bg-title">Criação</span>
                </h2>
                <div class="number">02</div>
            </div>
        </div>
        <div class="row line-blocks">
            <div class="col col-space-block-55-right ">
                <div class="box">
                    <h3 class="title-large min">
                       <span class="min strong"> Apelo e Impacto Visual</span>
                    </h3>
                    <p>
                        O apelo e impacto visual é tão importante quanto a arquitetura de informação, nem mais, nem menos. É com ele que envolvemos nosso público algo, geramos mais credibilidade e desenvolvemos uma identidade visual que converse diretamente com seu público-alvo.
                    </p>
                    <p>
                        Um site que tenha uma identidade visual, paleta de cores, bem definidas, possuem uma taxa de conversão muito maior que um site que foi projetado sem estas preocupações. Não nos falta casos de sucesso para evidenciarmos isso em nossos projetos.
                    </p>
                </div>
            </div>
            <div class="col col-space-block-55-right ">
                <div class="box">
                    <h3 class="title-large min">
                       <span class="min strong">Linguagem e Abordagem</span>
                    </h3>
                    <p>
                        A linguagem e abordagem na hora de criar um site é importante para que você possa desenvolver textos e headlines mais persuasivos e que de maneira totalmente fluida a sua empresa possa se comunicar diretamente com seu público-alvo.                    </p>
                    <p>
                        Ela deve ser definida como se a própria marca ou empresa estivesse falando com o consumidor, de forma a fazer o contato mais personalizado, agradável e eficiente tanto para a empresa quanto para o consumidor.
                    </p>
                </div>
            </div>
            <div class="col col-space-block-55-right ">
                <div class="box">
                    <h3 class="title-large min">
                       <span class="min strong"> Experiência de Usuário (UI/UX)</span>
                    </h3>
                    <p>
                        Além de tudo isso que já falamos por aqui, não podemos deixar de falar da experiência do usuário e como ele navega e utiliza seu site, seja em dispositivos desktop ou mobile, principalmente em relação a Apps.
                    </p>
                    <p>
                        O UX torna o projeto mais útil e eficiente já no caso da UI, a função deste é transformar todas as ideias do UX em algo funcional, intuitivo, navegáveis e claro, esteticamente, visualmente agradável aos usuários.
                    </p>
                </div>
            </div>
            <div class="col col-space-block-55-right ">
                <div class="box">
                    <h3 class="title-large min">
                       <span class="min strong">Criação de Layout Exclusivo</span>
                    </h3>
                    <p>
                    A regra aqui é muito clara, para manter a qualidade de nosso trabalho acima da média do mercado, não trabalhamos com templates ou reaproveitamento de materiais. Por mais que isso possa parecer mais trabalhoso é isso que nos difere de nossos concorrentes.
                    </p>
                    <p>
                    Cada projeto é desenvolvido com exclusividade o que torna nosso trabalho único no mercado, mas que além disso, torna o projeto e site.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="etapa-3">
    <div class="container">
        <div class="row lines-etapas"> 
            <div class="col-12">
                <h2 class="title-large min">
                    <span class="min">Terceira Etapa</span><br>
                    <span class="bg-title">Desenvolvimento</span>
                </h2>
                <div class="number">03</div>
            </div>
        </div>
        <div class="row line-blocks">
            <div class="col col-space-block-55-right ">
                <div class="box">
                    <h3 class="title-large min">
                       <span class="min strong">Estudo de Tecnologias e Infraestrutura</span>
                    </h3>
                    <p>
                    Na etapa de desenvolvimento, seja front-end ou back-end, é importante saber o tamanho do projeto e quais tecnologias devem ser utilizadas. Dependendo do tamanho do projeto e a necessidade do cliente, vamos administrar alguns conteúdos específicos ou todo e qualquer conteúdo do site, bem como criar novas páginas a partir de módulos exclusivos.                    </p>
                    <p>
                    Para isso, avaliamos o projeto como um todo e definimos qual framework e configurações de servidor serão mais adequados para o projeto de nosso cliente e definimos toda tecnologia a ser utilizada.
                    </p>
                    <p>
                        Pegamos diversos projetos de clientes que chegam até nós e na maioria dos casos o cliente se preocupa muito com a otimização, porém toda semântica do código do site atual, além de não estar adequada para os mecanismos de buscas, os sites chegam com plugins como elementor, entre outros, que facilitam a criação do site, porém não possuem boa performance em SEO, além de estar cheio de ferramentas e códigos inutilizáveis para o site.
                    </p>
                    <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/prop-mockup-code-mail-mobile.jpg" class="notebook d-lg-none" alt="notebook" title="notebook">
                </div>
            </div>
            <div class="col col-space-block-55-right ">
                <div class="box">
                    <h3 class="title-large min">
                       <span class="min strong">Desenvolvimento Front-End</span>
                    </h3>
                    <p>
                    O desenvolvimento front-end é um dos principais fatores quando o assunto é SEO, especificamente em otimização on-page, e como somos uma agência referência em otimização de sites <strong>Otimização de Sites</strong>, não poderia ser diferente, nós entregamos todos os nossos projetos 100% otimizado e em alguns casos, nossos projetos conseguem resultados acima da média, apenas com o lançamento do site. A semântica do código precisa ser limpa (clean code) e perfeita para os mecanismos de busca. 
                    <p>
                        Esta etapa do projeto leva, em média, duas semanas para ser concluída e logo depois o novo site fica disponível para aprovação do cliente em nosso ambiente de homologação. É importante ressaltar que a avaliação da tecnologia a ser utilizada, bem como o framework, é fundamental nesta etapa do projeto também.
                    </p>
                    <p>
                        Na entrega final da criação do site ao nosso cliente, entregamos junto um relatório de performance, gerado pelo PageSpedy e Lighthouse, ambas ferramentas do Google que analisam o projeto e geram uma nota de avaliação.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-12 ">
                <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/web-dev-logos-mobile.jpg" class="img-fluid d-lg-none" alt="tecnologias" title="tecnologias">

                <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/prop-mockup-code-mail.png" class="notebook d-none d-lg-block" alt="notebook" title="notebook">
            </div>
        </div>
    </div>
    <div class="container-fluid d-none d-lg-block">
        <div class="row">
            <div class="col-12">
                <div id="tecnologias">
                    <div class="splide slider-tecnologia-1">
                        <div class="splide__track">
                            <div class="splide__list">
                                <div class="splide__slide"> 
                                    <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/logo-bootstrap.png" class="icon-tecnologias" alt="bootstrap" title="bootstrap">
                                </div>
                                <div class="splide__slide"> 
                                    <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/logo-node.png" class="icon-tecnologias" alt="node js" title="node js">
                                </div>
                                <div class="splide__slide"> 
                                    <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/logo-typescript.png" class="icon-tecnologias" alt="typescript" title="typescript">
                                </div>
                                <div class="splide__slide"> 
                                    <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/logo-github.png" class="icon-tecnologias" alt="github" title="github">
                                </div>
                                <div class="splide__slide"> 
                                    <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/logo-angular.png" class="icon-tecnologias" alt="angular" title="angular">
                                </div>
                                <div class="splide__slide"> 
                                    <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/logo-sass.png" class="icon-tecnologias" alt="sass" title="sass">
                                </div>
                                <div class="splide__slide"> 
                                    <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/logo-wordpress.png" class="icon-tecnologias" alt="wordpress" title="wordpress">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="splide slider-tecnologia-2">
                        <div class="splide__track">
                            <div class="splide__list">
                                <div class="splide__slide"> 
                                    <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/logo-bitbucket.png" class="icon-tecnologias" alt="bitbucket" title="bitbucket">
                                </div>
                                <div class="splide__slide"> 
                                    <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/logo-babel.png" class="icon-tecnologias" alt="babel" title="babel">
                                </div>
                                <div class="splide__slide"> 
                                    <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/logo-npm.png" class="icon-tecnologias" alt="npm" title="npm">
                                </div>
                                <div class="splide__slide"> 
                                    <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/logo-html.png" class="icon-tecnologias" alt="html" title="html">
                                </div>
                                <div class="splide__slide"> 
                                    <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/logo-js.png" class="icon-tecnologias" alt="js" title="js">
                                </div>
                                <div class="splide__slide"> 
                                    <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/logo-css.png" class="icon-tecnologias" alt="css" title="css">
                                </div>
                                <div class="splide__slide"> 
                                    <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/logo-magento.png" class="icon-tecnologias" alt="magento" title="magento">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row line-blocks">
            <div class="col col-space-block-55-right ">
                <div class="box">
                    <h3 class="title-large min">
                       <span class="min strong">Desenvolvimento Back-End</span>
                    </h3>
                    <p>
                    O desenvolvimento back-end para criação de site, nada mais é que todo código responsável pela gestão e entrega de dados para o front-end. Na prática, enquanto o front-end estiliza toda a estrutura o back-end faz a entrega das informações como imagens, textos e afins baseado nas informações contidas no banco de dados do projeto.
                    <p>
                    A programação back-end é utilizada apenas para projetos onde teremos um CMS por trás do site, onde o cliente possa administrar algumas ou todas as informações do site, bem como criar páginas, alterar imagens, textos e afins.
                    </p>
                    <p>
                     Além disso, o back-end também é responsável por algumas funcionalidades específicas, como integrações a ferramentas, geração de boletos entre outras.
                    </p>
                </div>
            </div>
            <div class="col col-space-block-55-right ">
                <div class="box">
                    <h3 class="title-large min">
                       <span class="min strong">Homologação</span>
                    </h3>
                    <p>
                    O ambiente de homologação é uma das fases finais do projeto. Nós publicamos o site em um ambiente dedicado aos sites desenvolvidos pela agência e o cliente pode acessar para validar todas as funcionalidades, páginas conteúdos etc.
                    <p>
                    Nesta fase, enquanto o cliente valida o site, nossos analistas solicitam a nosso time de desenvolvimento (programação) todos os ajustes necessários em relação a otimização on-page do site. Esta etapa dura, em média, 3 a 5 dias úteis, podendo variar, a depender do tamanho do projeto de nosso cliente.
                    </p>
                    <p>
                    Para nós, é importante que todos os detalhes sejam validados e que tenhamos uma aprovação completa de nosso cliente para então fazermos a publicação do novo site de nosso cliente em ambiente de produção.
                    </p>
                </div>
            </div>
            <div class="col col-space-block-55-right ">
                <div class="box">
                    <h3 class="title-large min">
                       <span class="min strong">Controle de Qualidade e Suporte</span>
                    </h3>
                    <p>
                    Em nossos projetos, oferecemos além de manutenção, um suporte para que sempre que nosso cliente precise, possa ser atendido pela nossa equipe de atendimento a qualquer necessidade.
                    <p>
                    Nossa equipe de desenvolvimento e de analistas estão sempre em cima de qualquer novidade de tecnologias e sempre que temos alguma novidade que possa melhorar o desempenho de nossos projetos, nós apresentamos aos nossos clientes. Desta maneira, conseguimos manter todos os sites desenvolvidos pela agência no mais alto padrão de qualidade, entregando sempre o melhor resultado do mercado.
                    </p>
                    <p>
                    A qualquer momento nosso cliente pode solicitar mudanças, melhorias ou ajustes com nosso time de atendimento. Você terá todo o suporte necessário conosco.
                    </p>
                </div>
            </div>
        </div>
        <div class="row line-blocks">
            <div class="col-lg col-12 col-space-block-55-right ">
                <div class="box">
                    <h3 class="title-text">
                        Site Mobile
                    </h3>
                    <p>
                    Hoje temos dois tipos de soluções para sites mobile, projetos responsivos (desktop a mobile) e sites exclusivos para mobile. A diferença de criar um site conosco é que você teria um projeto exclusivo desktop, que seria responsivo até um tablet, e outro exclusivamente feito para mobile, que é a melhor solução. Com esta versão mobile, podemos ter um aproveitamento melhor de interface e funcionalidades exclusivas para dispositivos móveis. A melhor solução, pois com esta versão podemos ter um aproveitamento melhor de interface e funcionalidades exclusivas para dispositivos móveis.
                </div>
            </div>
            <div class="col-lg col-12 col-space-block-55-right mt-lg-5">
                <div class="box">
                    <p>
                    O problema de desenvolver um site desktop e torná-lo responsivo direto na programação, sem planejar separadamente por dispositivos e, principalmente, sem se preocupar com arquitetura de informação (UX e UI para mobile), é que com certeza você terá alguns problemas e precisará remover conteúdos que possam ser valiosos para seu negócio. Isso porque não será possível apresentar o mesmo conteúdo, da maneira como foi projetado no layout desktop, assim como também você perde a possibilidade de ter funcionalidades especialmente feitas para os dispositivos móveis.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="mockups-mobs">
    <div class="container-fluid container-mockups">
        <div class="row">
            <div class="col-12 splide slider-mockups-mob">
                <div class="splide__track">
                    <div class="splide__list">
                        <div class="splide__slide"> 
                            <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/mockups/brlink_344x686.png"  alt="br link" title="br link">
                        </div>
                        <div class="splide__slide"> 
                            <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/mockups/ihome_344x686.png"  alt="ihome" title="ihome">
                        </div>
                        <div class="splide__slide"> 
                            <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/mockups/tubos_oliveira_344x686.png"  alt="tubos oliveira" title="tubos oliveira">
                        </div>
                        <div class="splide__slide"> 
                            <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/mockups/viventre_344x686.png"  alt="viventre" title="viventre">
                        </div>
                        <div class="splide__slide"> 
                            <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/mockups/SejaVip_344x686.png"  alt="Corpus spa" title="Corpus spa">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_template_part('includes/sections-globals/otimizacao-de-performance', null, null); ?>

<?php get_template_part('includes/sections-globals/contact-footer', null, null); ?>
<?php get_template_part('footer', null, 1); ?> 
<script>
    var splideCliente = new Splide( '.slider-clientes', {
        type: 'loop',
        // autoplay: true,
        // interval: 3000,
        autoWidth: true,
        perPage: 3,
        arrows: false,
        pagination: true,
        focus: 'center',
        breakpoints: {
            1024: {
                perPage: 1,
                pagination: false,
                focus: false, 
                autoWidth: false
            },
        }
    } );
    splideCliente.on( 'pagination:mounted', function ( data ) {
        // You can add your class to the UL element
        data.list.classList.add( 'splide__pagination--custom' );

        // `items` contains all dot items
        data.items.forEach( function ( item ) {
            item.button.textContent = String( item.page + 1 );
        } );
    } );
    splideCliente.mount();

    var splideTecOne = new Splide( '.slider-tecnologia-1', {
        type: 'loop',
        autoplay: true,
        interval: 3000,
        autoWidth: true,
        infinite: true,
        perPage: 6,
        padding: 10,
        arrows: false,
        pagination: false,
        focus: 'center', 
        direction: 'ltr'
    } );
    splideTecOne.mount();
    var splideTecTwo = new Splide( '.slider-tecnologia-2', {
        type: 'loop',
        autoplay: true,
        interval: 3000,
        autoWidth: true,
        perPage: 6,
        padding: 10,
        infinite: true,
        arrows: false,
        pagination: false,
        focus: 'center', 
        direction: 'rtl',
        speed      : 1,
        rewindSpeed: 1
    } );
    splideTecTwo.mount();
    var splidemuckupsMob = new Splide( '.slider-mockups-mob', {
        type: 'loop',
        autoWidth: true,
        perPage: 5,
        infinite: true,
        arrows: false,
        pagination: false,
        focus: 'center', 
    } );
    splidemuckupsMob.mount();
 
</script>