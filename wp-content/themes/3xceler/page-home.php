<?php
// Template Name: Home
?>
<?php 
    $args = array(
    'page' => 'home',
    'class' => ''
    ); 
?>

<?php get_template_part('header', null, $args); ?>
<section id="bg-top-home">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <h1 class="title-large"><span>Transformação</span><br>Digital</h1>
                <p>
                    Impulsionada pela inovação e pelo comportamento humano, nossa agência está mudando a forma como as marcas se conectam com o público em um mundo digital. Descubra por que os líderes de mercado escolhem nossas soluções corporativas.
                </p>
                <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/seta-bg-top.png" title="Role Para baixo" alt="Role Para baixo" class="d-none d-lg-block">
            </div>
            <div class="col-lg-6 col-12 col-img">
                <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/X.png" title="Agência de Marketing Digital" alt="Agência de Marketing Digital" class="d-none d-lg-block">
            </div>
        </div>
    </div>
</section>
<section id="sobre">
    <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/prop-shiny-purple.png" class="shiny-purple d-none d-lg-block" tilte="Agência de Marketing Digital" alt="Agência de Marketing Digital">
    <div class="container">
        <div class="row line-1">
            <div class="col-12 col-lg-7 col-text">
                <h2 class="title-large">
                    <span class="bg-title">Loucura</span> e
                    <span class="bg-title">Espontaneidade</span><br>
                    <span>jovial, somadas a sabedoria dos</span><br>
                    mais <span class="bg-title">Experientes</span>
                </h2> 
                <p>
                    Fundada em 2013, estamos em um acelerado e consistente ritmo de crescimento, com mais de 400 projetos entregues, somos responsáveis pelo marketing digital contínuo de mais de 70 empresas, trabalhando a interação destas marcas de maneira planejada e eficiente. 
                </p>
                <p>
                    Temos um grande diferencial do mercado, que é um planejamento amplo e completo e com objetivo de tornar nossos clientes referências em seu mercado. 
                </p>
                <p>
                    Nosso objetivo é nos tornarmos um parceiro fundamental para o crescimento das empresas em todos os âmbitos do marketing digital e sermos responsáveis por todo departamento online de nossos clientes.
                </p>
            </div>
            <div class="col-12 col-lg-5 col-img d-none d-lg-block">
                <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/prop-old-man.png" title="Agência de Marketing Digital" alt="Agência de Marketing Digital" >
            </div>
        </div>
    </div>
</section>
<?php get_template_part('includes/sections-globals/agencia-certificada', null, null); ?>
<section id="presenca">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12 col-text contact-box">
                <h2 class="title-large title-large-full">
                    <span>Atendimento a Nível</span><br>
                    Mundial
                </h2>
                <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/bg-map.jpg" class="map-mundi d-none d-lg-block" title="Local" alt="Local" >
                <div class="d-none d-lg-block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="city inview" width="565" height="159"><path fill-rule="evenodd" fill="#1B1437" d="M564.214 137.031l-1.703 1.256c-1.697-2.734-4.545-4.241-7.461-4.145 1.847 1.739 3.122 4.136 3.558 6.828l-2.026.388c-.463-2.86-2.105-5.301-4.425-6.669-10.269 3.598-17.609 11.637-19.498 21.272h7.379c.302-3.388 2.929-6.043 6.116-6.043s5.814 2.655 6.116 6.043h2.874l2.038-5.726-5.985-2.402.796-1.199c1.348-2.028 3.524-3.238 5.822-3.238.572 0 1.138.081 1.692.228l.302-.846 1.917.811-.308.866c2.36 1.493 3.793 4.366 3.573 7.396l-.106 1.474-5.773-2.316-1.762 4.952h5.024v2.243h-2.057v-.002h-43.85v-42.017l-1.224-.361a12.16 12.16 0 011.224-3.072v-5.118a8.536 8.536 0 00-1.986 1.372l-1.328-1.711a10.44 10.44 0 013.314-2.071V94.736h-20.56v51.017h-8.696v10.407h16.213v2.241H292.002v-2.241h16.158l4.655-18.534-59.317.001v18.533h11.729v2.241H78.322v-2.241h88.475v-12.588H62.645v12.389h2.836v2.241h-2.836v.007H47.944v-.007H19.866v-23.751h-2.573v-2.844H4.628v2.844H2.057v24.543H0v-26.783h2.571v-2.845H19.35v2.845h2.572v23.75H31.96v-53.735c-4.158.461-7.7 3.675-8.806 8.141l-1.986-.583c1.272-5.132 5.219-8.883 9.929-9.688-3.53-1.742-7.75-1.168-10.787 1.632l-1.329-1.712c3.415-3.147 8.072-3.944 12.132-2.32-1.613-3.482-4.842-5.872-8.541-6.091l.112-2.236c4.477.265 8.373 3.18 10.296 7.415 1.923-4.238 5.833-7.15 10.313-7.415l.112 2.236c-3.755.222-7.026 2.681-8.613 6.249 4.14-1.82 8.968-1.077 12.482 2.162l-1.329 1.711c-3.054-2.815-7.306-3.382-10.849-1.603 4.615.882 8.459 4.607 9.711 9.66l-1.985.583c-1.107-4.466-4.648-7.68-8.806-8.141v53.735h13.928V89.132h133.554v67.028h5.713v-.001h3.496V96.516h-1.517v-2.241h3.933V34.338h2.057v3.11l.561 1.963L201.649-.01l5.909 39.421.561-1.964v-3.109h2.057v15.273h.145v2.242h-.145v34.296c1.788-3.467 4.812-6.076 8.416-7.121v-6.501h2.482v-2.881h2.057v2.881h2.482v6.501c3.604 1.045 6.628 3.654 8.416 7.121V51.853h-.145v-2.242h.145V34.338h2.056v3.109l.562 1.965L242.556-.01l5.908 39.421.561-1.963v-3.11h2.057v59.937h3.932v2.241h-1.516v11.632l68.182-79.37-1.167-6.918h6.574l2.453 10.395h9.74l2.612-10.395h6.582l-1.238 6.728 91.745 106.799h4.459V22.537l7.949-3.012h27.873l7.949 3.012V129.75h6.639V92.496h24.673v5.833c3.055.77 5.642 2.964 7.088 5.956 1.725-3.574 5.077-6.018 8.912-6.244l.111 2.236c-3.028.18-5.683 2.07-7.106 4.848 3.478-1.246 7.398-.503 10.296 2.169l-1.329 1.712c-2.466-2.275-5.849-2.824-8.766-1.585 3.926.863 7.173 4.071 8.247 8.403l-1.986.583c-.929-3.749-3.875-6.463-7.352-6.916v46.47h.522c1.374-19.27 8.287-34.945 17.263-39.561-1.601-2.167-4.037-3.496-6.635-3.544l.034-2.24c3.002.055 5.83 1.494 7.803 3.869-.432-3.41-2.555-6.379-5.616-7.599l.706-2.102c3.67 1.461 6.244 4.958 6.884 9.014 1.57-2.741 1.787-6.247.41-9.246l1.839-1.002c1.719 3.741 1.431 8.126-.562 11.532 3.705-.138 7.314 1.823 9.393 5.339l-1.729 1.213c-1.641-2.777-4.463-4.353-7.384-4.323 2.716 2.675 4.066 6.752 3.372 10.818l-2.023-.409c.594-3.474-.657-6.961-3.109-9.106.96 3.146.685 6.647-.873 9.576l-1.78-1.124c1.429-2.686 1.537-5.965.352-8.744-8.395 4.06-14.926 19.045-16.282 37.639h1.34c1.908-10.686 9.904-19.595 21.137-23.467 1.843-2.024 2.771-4.881 2.473-7.732l2.043-.253a12.651 12.651 0 01-1.17 6.763c2.308-1.493 3.919-4.112 4.21-7.148l2.045.234c-.299 3.118-1.729 5.876-3.839 7.783 2.685.596 5.139 2.293 6.752 4.89zm-1.362 13.089c-.351-1.86-1.566-3.455-3.261-4.136-1.674-.672-3.581-.313-4.942.846l8.203 3.29zm-12.739 5.373c-.457-1.915-2.059-3.333-3.959-3.333s-3.502 1.418-3.959 3.333h7.918zm-487.468-14.16h104.152v-1.33H62.645v1.33zm104.143-32.225v-3.958H62.649v3.958h104.139zm-104.139 2.239v26.417h6.368v-26.417h-6.368zm8.425 0v26.417h6.877v-26.417h-6.877zm8.934 0v26.417h6.878v-26.417h-6.878zm8.935 0v26.417h6.878v-26.417h-6.878zm8.935 0v26.417h6.877v-26.417h-6.877zm8.934 0v26.417h6.878v-26.417h-6.878zm8.935 0v26.417h6.878v-26.417h-6.878zm8.934 0v26.417h6.878v-26.417h-6.878zm8.935 0v26.417h6.878v-26.417h-6.878zm8.935 0v26.417h6.878v-26.417h-6.878zm8.934 0v26.417h6.878v-26.417h-6.878zm8.935 0v26.417h6.368v-26.417h-6.368zm19.021-19.975H50v64.589h10.588v-53.056h108.266v53.255h10.587V91.372zm38.015 64.788h9.294v-14.336c0-2.794-2.087-5.066-4.652-5.066-2.56 0-4.642 2.272-4.642 5.066v14.336zm-3.525 0h1.468v-14.336c0-4.029 3.005-7.307 6.699-7.307 3.699 0 6.708 3.278 6.708 7.307v14.336h1.468v-30.564h-16.343v30.564zm0-32.805h16.343v-22.367l-8.171-16.435-8.172 16.435v22.367zM195.18 44.981v4.629h1.323l-1.323-4.629zm1.69 6.872h-1.69v42.422h1.69V51.853zm4.779-37.959l-4.541 30.3.792 2.768 2.721-9.511v-8.066h2.056v8.066l2.722 9.511.791-2.768-4.541-30.3zm-2.721 37.959v42.422h5.443V51.853h-5.443zm5.075-2.242l-2.354-8.224-2.353 8.224h4.707zm4.116-4.63l-1.324 4.63h1.324v-4.63zm0 6.872h-1.69v42.422h1.69V51.853zm-1.69 44.663h-13.666v59.643h19.111V96.516h-5.445zm4.058-3.097h-.311v.856h4.754l6.548-13.168h-1.979c-5.154 1.291-9.012 6.312-9.012 12.312zm13.069-18.651h-2.907v3.848c.478-.055.962-.092 1.454-.092.491 0 .975.037 1.453.092v-3.848zm10.473 18.651h-.312c0-6-3.857-11.021-9.01-12.312h-1.98l6.548 13.168h4.754v-.856zm2.056-48.438v4.63h1.324l-1.324-4.63zm1.691 6.872h-1.691v42.422h1.691V51.853zm4.78-37.959l-4.542 30.3.792 2.769 2.721-9.511v-8.065h2.057v8.065l2.721 9.51.791-2.767-4.54-30.301zm-2.722 37.959v42.422h5.443V51.853h-5.443zm5.075-2.242l-2.353-8.224-2.354 8.224h4.707zm4.116-4.63l-1.323 4.63h1.323v-4.63zm0 6.872h-1.69v42.422h1.69V51.853zm2.416 44.663H232.33v59.644h19.111V96.516zm165.276 59.644h22.206v-12.838h-22.206v12.838zm-28.306 0h26.168v-5.295h-26.168v5.295zm-12.361 0h10.304v-11.228H376.05v11.228zm-19.375 0l-4.378-18.534h-10.154l3.127 18.534h11.405zM344.365 44.2l-.609 3.315 58.558 87.872h9.678L344.365 44.2zm70.271 91.187h9.591l-78.671-97.663-.665 3.618 69.745 94.045zm-71.43-84.883l-.637 3.463 46.555 81.42h10.649l-56.567-84.883zm-1.227 6.671l-.516 2.806 34.198 75.406h11.04l-44.722-78.212zm-1.178 6.406l-.421 2.287 20.683 69.519h12.304l-32.566-71.806zm-1.247 6.779l-.446 2.425 14.784 62.602h5.009L339.554 70.36zm3.624 85.8l-3.126-18.534h-12.856l-3.408 18.534h19.39zm-3.504-20.773l-5.773-34.227-6.294 34.227h12.067zm-26.297 0l15.726-62.62-.197-1.169-18.624 63.789h3.095zm-5.253 0l19.991-68.473-.377-2.236-31.657 70.709h12.043zm-14.332 0l33.32-74.422-.512-3.033-43.927 77.455h11.119zm-13.537 0l45.79-80.741-.582-3.453-56.227 84.194h11.019zm-13.562 0l58.125-87.039.19.151-.653-3.873-67.192 90.761h9.53zm-13.195 0h1.023l69.343-93.667-.612-3.63-69.754 88.114v9.183zM322.143 31.52l-68.645 79.907v11.345l69.276-87.512-.631-3.74zm7.927 2.977l2.007 8.507h4.502l2.137-8.507h-8.646zm2.536 10.748l1.652 6.996 1.758-6.996h-3.41zm10.855-21.144l-9.266 36.875-8.703-36.875h-2.509l8.228 48.764-20.919 83.295h11.398l12.298-66.879 7.777 46.106h10.004l-14.77-62.54 8.965-48.746h-2.503zm3.279 7.189l-.699 3.798.072-.068 80.852 100.367h9.199L346.74 31.29zm96.7 106.336h-89.019l4.377 18.534h15.196v-13.467h14.417v5.932h26.249v-7.544h26.32v15.079h2.46v-18.534zm6.381-115.135l-4.324 1.638V156.16h4.324V22.491zm11.017 133.669h8.994V65.946h-8.994v90.214zm-.208-92.455h9.391l.841-4.519h-11.073l.841 4.519zm10.65-6.76l.766-4.114h-13.441l.766 4.114h11.909zm-16.226-23.184l.766 4.114h19.011l.766-4.114h-20.543zm20.96-2.242l.767-4.116H453.87l.767 4.116h21.377zm-19.776 8.598l.766 4.116h16.643l.766-4.116h-18.175zm1.184 6.357l.766 4.115h14.275l.767-4.115h-15.808zm-5.544 109.686h6.903V65.046l-6.903-37.072V156.16zm.943-134.395l.632 3.397h23.745l.633-3.397h-25.01zm25.952 6.209l-6.884 36.971v91.215h6.884V27.974zm6.381-3.845l-4.324-1.638V156.16h4.324V24.129zm8.696 107.861h-6.639v11.522h6.639V131.99zm24.673-21.882c1.357-1.296 3.003-2.224 4.802-2.653a8.056 8.056 0 00-4.802-.521v3.174zm0-9.466v4.027a9.97 9.97 0 015.229.578c-1.101-2.226-2.989-3.894-5.229-4.605zm6.058 8.849c-2.463.322-4.656 1.782-6.058 3.938v42.532h6.058v-46.47zm-282.696-9.431l.846 1.335c.666 1.051 2.841 4.618 2.841 6.428v17.773h-7.373v-17.773c0-1.81 2.174-5.377 2.84-6.428l.846-1.335zm-1.63 23.295h3.261v-15.532c0-.571-.746-2.175-1.631-3.74-.884 1.566-1.63 3.169-1.63 3.74v15.532zm2.659 24.651h-2.057V134.17h2.057v13.836zm-1.387-88.571h2.057v26.306h-2.057V59.435zm-42.894 48.388c0-1.81 2.174-5.379 2.841-6.429l.845-1.334.846 1.334c.667 1.05 2.841 4.619 2.841 6.429v17.773h-7.373v-17.773zm2.056 15.532h3.26v-15.532c0-.571-.745-2.174-1.63-3.74-.884 1.566-1.63 3.169-1.63 3.74v15.532zm2.659 24.651h-2.057v-13.838h2.057v13.838zm-2.727-88.571h2.056v26.306h-2.056V59.435zm29.355 51.318c0 4.729-3.532 8.576-7.873 8.576-4.342 0-7.874-3.847-7.874-8.576 0-4.731 3.532-8.578 7.874-8.578 4.341 0 7.873 3.847 7.873 8.578zm-13.69 0c0 3.494 2.609 6.335 5.817 6.335 3.207 0 5.816-2.841 5.816-6.335 0-3.494-2.609-6.338-5.816-6.338-3.208 0-5.817 2.844-5.817 6.338zm9.015 0c0 1.922-1.435 3.485-3.198 3.485-1.764 0-3.2-1.563-3.2-3.485 0-1.923 1.436-3.487 3.2-3.487 1.763 0 3.198 1.564 3.198 3.487zm-4.341 0c0 .686.513 1.245 1.143 1.245.629 0 1.141-.559 1.141-1.245 0-.687-.512-1.245-1.141-1.245-.63 0-1.143.558-1.143 1.245zm185.234-56.58h-2.057c0-2.099-1.568-3.805-3.494-3.805v-2.241c1.865 0 3.515 1.011 4.522 2.553 1.007-1.542 2.656-2.553 4.521-2.553v2.241c-1.926 0-3.492 1.706-3.492 3.805zm-293.537 9.138c-3.223 0-5.845 2.857-5.845 6.366h-2.057c0-3.509-2.622-6.366-5.844-6.366-2.162 0-4.139 1.292-5.159 3.37l-1.814-1.056c1.379-2.809 4.05-4.555 6.973-4.555 2.944 0 5.514 1.767 6.872 4.377 1.359-2.61 3.929-4.377 6.874-4.377 2.923 0 5.594 1.746 6.972 4.555l-1.814 1.056c-1.019-2.079-2.996-3.37-5.158-3.37z"></path></svg>
                </div>
                <div class="d-none d-lg-block">
                    <?php
                        $args = array(
                            'unidade' => 'São Paulo',
                            'title' => 'São Paulo',
                            'text' => 'Rua Bom Pastor nº 2.732 | Conj. 56/57 - Ipiranga | São Paulo / SP | Brasil'
                        );
                    ?>
                    <?php get_template_part('includes/components/contacts-box', null, $args); ?>
                </div>
               
            </div>
            <div class="col-lg-6 col-12 col-imgs">
                <span class="title-text d-none d-lg-block">
                    Atendemos clientes em todo o mundo, nos mais diversos segmentos. Nossa pluralidade e jovialidade nos trouxeram até aqui e queremos muito mais.
                </span>
                <div class="splide slider-clientes">
                    <div class="splide__track">
                        <div class="splide__list">
                            <div class="splide__slide">
                                <div class="keeps-flex">
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-escada.png" title="Escada Super" alt="Escada Super">
                                    </div> 
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-justcontact.png" title="Just 4 Contact" alt="Just 4 Contact">
                                    </div>
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-gabaritando.png" title="Gabaritando" alt="Gabaritando">
                                    </div>
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-justoffices.png" title="Just 4 Offices" alt="Just 4 Offices">
                                    </div>
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-haruna.png" title="Haruna Construções" alt="Haruna Construções">
                                    </div>
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-level.png" title="Level Group" alt="Level Group">
                                    </div>
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-kraus.png" title="Kraus-Muller" alt="Kraus-Muller">
                                    </div>
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-mimura.png" title="Mimura" alt="Mimura">
                                    </div>
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-nova.png" title="Nova Seguros" alt="Nova Seguros">
                                    </div>
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-monte.png" title="Monte Cristo Coral e Orquestra" alt="Monte Cristo Coral e Orquestra">
                                    </div>
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-tubos.png" title="Tubos Oliveira" alt="Tubos Oliveira">
                                    </div>
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-mundial.png" title="Mundial Intercâmbio" alt="Mundial Intercâmbio">
                                    </div>
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-plenna.png" title="Plenna Mulher" alt="Plenna Mulher">
                                    </div>
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-mynd.png" title="Mynd" alt="Mynd">
                                    </div>
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-procap.png" title="Procap Hair" alt="Procap Hair">
                                    </div>
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-pc.png" title="PCXpress" alt="PCXpress">
                                    </div>
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-revesp.png" title="Revesp" alt="Revesp">
                                    </div>
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-pueri.png" title="Pueri Mundi" alt="Pueri Mundi">
                                    </div>
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-zelus.png" title="Zelus Condôs & Hotéis" alt="Zelus Condôs & Hotéis">
                                    </div>
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-recoma.png" title="Recoma" alt="Recoma">
                                    </div>
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div class="keeps-flex">
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-agmov.png" title="Agmov" alt="Agmov">
                                    </div>
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-wada.png" title="Dr. Alexandre Wada" alt="Dr. Alexandre Wada">
                                    </div>
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-amar-e-cuidar.png" title="Amar e Cuidar" alt="Amar e Cuidar">
                                    </div><div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-carlos.png" title="Dr. Carlos Vinícius" alt="Dr. Carlos Vinícius">
                                    </div>
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-brlink.png" title="BRlink" alt="BRlink">
                                    </div>
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-daniel.png" title="Dr. Daniel Rebolledo" alt="Dr. Daniel Rebolledo">
                                    </div>
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-cleanhouse.png" title="Clean House Faxinas" alt="Clean House Faxinas">
                                    </div>
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-iran.png" title="Dr. Iran Sanches" alt="Dr. Iran Sanches">
                                    </div>
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-cdmar.png" title="CDMAR" alt="CDMAR">
                                    </div>
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-ihome.png" title="iHome Resort" alt="iHome Resort">
                                    </div>
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-coredrinks.png" title="CoreDrinks" alt="CoreDrinks">
                                    </div>
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-kiwi.png" title="Kiwi Pilates" alt="Kiwi Pilates">
                                    </div>
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-corpus.png" title="Corpus Spa" alt="Corpus Spa">
                                    </div>
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-artcom.png" title="Artcom Vidros" alt="Artcom Vidros">
                                    </div>
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-cssat.png" title="CSSAT" alt="CSSAT">
                                    </div>
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-david.png" title="Dr. David Di Sessa" alt="Dr. David Di Sessa">
                                    </div>
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-drcaio.png" title="Dr. Caio Araujo" alt="Dr. Caio Araujo">
                                    </div>
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-wendell.png" title="Dr. Wendell Uguetto" alt="Dr. Wendell Uguetto">
                                    </div>
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-elite.png" title="Elite Detetives" alt="Elite Detetives">
                                    </div>
                                    <div class="customer-instance">
                                        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/clientes/customer-itaqua.png" title="Itaquá Resistências" alt="Itaquá Resistências">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="nossos-projetos">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 col-text">
                <h2 class="title-large min">
                    <span class="min">Nossos Projetos</span><br>
                    <span class="bg-title">Seus Resultados</span>
                </h2>
                <p>
                    Nossos projetos vão além da simples entrega de um site para nossos clientes. O planejamento da arquitetura da informação, linguagem, abordagem, apelo visual e conversão, geram resultados imediatos!
                </p>
                <p>
                    Uma forma poderosa para obter a resposta que você precisa, combinando mensagens de alto impacto e de real-time bidding para impactar as pessoas certas, no momento certo.
                </p>
                <a href="#" class="link" title="Entenda nossa abordagem">
                    Entenda nossa abordagem:<br>
                    <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/icon-arrow-right.png" class="d-none d-lg-block" title="Entenda nossa abordagem" alt="Entenda nossa abordagem">
                </a>
            </div>
            <div class="col-12 col-lg-5 col-img">
                <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/note-projeto.png" class="notebook d-none d-lg-block" title="Nossos Projetoss" alt="Nossos Projetos">
            </div>
        </div>
    </div>
    <div class="bg-itens">
        <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/prop-shiny-pink.png" class="prop-shiny-pink d-none d-lg-block" title="prop shiny pink" alt="prop shiny pink">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 col-text">
                    <h2>
                        <span class="number">
                            01
                        </span>
                        <span class="title">Criatividade</span>
                    </h2>
                    <p>
                        É tudo sobre a ideia e a concepção. Trabalhando com agências de publicidade tradicionais e nossos parceiros de mídia, aplicamos nossa metodologia a cada projeto.
                    </p>
                </div>
                <div class="col-12 col-lg-6 col-text">
                    <h2>
                        <span class="number">
                            02
                        </span>
                        <span class="title">Segmentação</span>
                    </h2>
                    <p>
                        Nossos detetives em dados rastreiam onde está sua audiência, e onde eles estão propensos a interagir (nem sempre é onde você pensa).
                    </p>
                </div>
                <div class="col-12 col-lg-6 col-text">
                    <h2>
                        <span class="number">
                            03
                        </span>
                        <span class="title">Tecnologia</span>
                    </h2>
                    <p>
                        Os nossos sistemas 'aprendem' o que funciona, então você está continuamente construindo sobre o sucesso alcançado – e ao mesmo tempo se aproximando mais do consumidor.
                    </p>
                </div>
                <div class="col-12 col-lg-6 col-text">
                    <h2>
                        <span class="number">
                            04
                        </span>
                        <span class="title">Agilidade</span>
                    </h2>
                    <p>
                        Não reportamos apenas. Analisamos constantemente o que está acontecendo, agindo rápido para se certificar de que você está onde precisa estar.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="sites-que-vendem-mais">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="title-large title-large-full">
                    <span>Sites que</span><br>
                    Vendem Mais!    
                </h2>
             
            </div>
        </div>
        <div class="row line-macbook">
            <div class="col-12">
                <span id="number-page-sites" class="d-none d-lg-block">01</span>
                <img  src="<?= get_template_directory_uri( ) ?>/dist/imgs/prop-shape3d-blue.png" alt="prop-shape3d-blue" class="prop-shape3d-blue d-none d-lg-block">
                <img  src="<?= get_template_directory_uri( ) ?>/dist/imgs/quadrado.png" alt="quadrado" class="quadrado d-none d-lg-block">
                <div class="macbook">
                    <div class="splide slider-sites">
                        <div class="splide__track">
                            <div class="splide__list">
                                <div class="splide__slide">
                                    <img  src="<?= get_template_directory_uri( ) ?>/dist/imgs/mockups/mockup_corpuspa_1300px.jpg" alt="Desenvolvimento de Sites - Corpus Spa">
                                </div>
                                <div class="splide__slide">
                                    <img alt="Desenvolvimento de Sites para imobiliárias - iHome Resort" src="<?= get_template_directory_uri( ) ?>/dist/imgs/mockups/mockup_1300px_ihomeresort.jpg">
                                </div>
                                <div class="splide__slide">
                                    <img alt="Desenvolvimento de sites para empresas - Tubos Oliveira" src="<?= get_template_directory_uri( ) ?>/dist/imgs/mockups/00_home_tubosoliveira-3.jpg">
                                </div>
                                <div class="splide__slide">
                                    <img alt="Desenvolvimento de sites para médicos - Viventre" src="<?= get_template_directory_uri( ) ?>/dist/imgs/mockups/00_home_viventre2020_final_1300.jpg">
                                </div>
                                <div class="splide__slide">
                                    <img alt="Desenvolvimento de sites profissionais - Yescert" src="<?= get_template_directory_uri( ) ?>/dist/imgs/mockups/00-home-yescert-1300.jpg">
                                </div>
                                <div class="splide__slide">
                                    <img alt="Desenvolvimento de sites profissionais - Yescert" src="<?= get_template_directory_uri( ) ?>/dist/imgs/mockups/01_landing_zelus1300.jpg">
                                </div>  
                                <div class="splide__slide">
                                    <img alt="Desenvolvimento de sites para empresas - Recoma" src="<?= get_template_directory_uri( ) ?>/dist/imgs/mockups/1300-recoma.jpg">
                                </div>  
                                <div class="splide__slide">
                                    <img alt="Desenvolvimento de sites para clínicas - Procap Hair" src="<?= get_template_directory_uri( ) ?>/dist/imgs/mockups/00_home_procaphair-1300.jpg">
                                </div>  
                                <div class="splide__slide">
                                    <img alt="Desenvolvimento de sites profissionais - Nova Seguros" src="<?= get_template_directory_uri( ) ?>/dist/imgs/mockups/00_home_novaseguros1300.jpg">
                                </div>  
                                <div class="splide__slide">
                                    <img alt="Sites para empresas - BrLink" src="<?= get_template_directory_uri( ) ?>/dist/imgs/mockups/mockup_brlink_1300px_17122020.jpg">
                                </div>      
                            </div>
                        </div> 
                        <div class="splide__arrows splide__arrows--ltr">
                            <button
                                class="splide__arrow splide__arrow--prev"
                                type="button"
                                aria-label="Previous slide"
                                aria-controls="splide01-track"
                            >
                                <i class="fa fa-arrow-left"></i>
                                Cliente Anterior
                            </button>
                            <button
                                class="splide__arrow splide__arrow--next"
                                type="button"
                                aria-label="Next slide"
                                aria-controls="splide01-track"
                            >
                                Próximo Cliente
                                <i class="fa fa-arrow-right"></i>
                            </button> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="social-media">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 col-text">
                <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/prop-shape-green-black.png" class="prop-shape-green-black d-none d-lg-block" title="prop-shape-green-black" alt="prop-shape-green-black">
                <h2 class="title-large title-large-full">
                    <span>Social</span><br>
                    Media
                </h2> 
                <p class="title-text">
                    Atraia clientes, aumente seu público e expanda seu alcance. Serviços de social media orientados para resultados e com o objetivo de melhorar a sua presença digital.
                </p> 
                <p>
                    Mais de 70% dos consumidores esperam que uma marca tenha presença nas redes sociais. Pensando nisso, a 3xceler oferece serviços competitivos de gerenciamento de mídias sociais, com um plano de ação personalizado para que a sua empresa possa começar a construir uma presença estratégica e coesa, gerando receitas a partir do Facebook, Instagram, LinkedIn e outras plataformas.
                </p>
                <a href="#" class="link-saiba-mais" title="Saiba Mais">
                    Saiba Mais 
                    <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/icon-arrow-right.png" title="Saiba Mais " alt="Saiba Mais ">
                </a>
            </div>
            <div class="col-12 col-lg-6 col-imgs d-none d-lg-block">
                <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/prop-hand-iphone.png" class="prop-hand-iphone" title="prop-hand-iphone" alt="prop-hand-iphone">
                <div class="likes-and-heart">
                    <div class="prop-love-small-blurred" aria-hidden="true"></div>
                    <div class="prop-love-small-blurred-2" aria-hidden="true"></div>
                    <div class="prop-like-small-blurred" aria-hidden="true"></div>
                    <div class="prop-like-small-blurred-2" aria-hidden="true"></div>
                    <div class="prop-love-medium" aria-hidden="true"></div>
                    <div class="prop-love-medium-2" aria-hidden="true"></div>
                    <div class="prop-like-big" aria-hidden="true"></div>
                    <div class="prop-like-big-2" aria-hidden="true"></div>
                    <div class="prop-love-small" aria-hidden="true"></div>
                    <div class="prop-love-small-2" aria-hidden="true"></div>
                    <div class="prop-like-small-blurred-2" aria-hidden="true"></div>
                    <div class="prop-love-big-blurred" aria-hidden="true"></div>
                    <div class="prop-love-big-blurred-2" aria-hidden="true"></div>
                </div>
            </div>
            <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/social-media-mobile.jpg" class="prop-social-media-mob d-lg-none" title="prop-social-media" alt="prop-social-media">
            <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/social-media.png" class="prop-social-media d-none d-lg-block" title="prop-social-media" alt="prop-social-media">
        </div>
    </div> 
</section> 
 <?php get_template_part('includes/sections-globals/contact-footer', null, null); ?>
 <?php get_template_part('footer', null, 1); ?> 
<script>
    var splideCliente = new Splide( '.slider-clientes', {
        perPage: 1,
        rewind : true, 
        pagination:  false,
        arrows:  false,
        autoplay: true,
        interval: 3000
       
    } );
    splideCliente.mount();
</script>
<script>
    var splideSites = new Splide( '.slider-sites', {
        perPage: 1,
        rewind : true, 
        pagination: false,
        classes: {
            arrows: 'splide__arrows your-class-arrows',
            arrow : 'splide__arrow your-class-arrow',
            prev  : 'splide__arrow--prev your-class-prev',
            next  : 'splide__arrow--next your-class-next',
        },
    } );
    splideSites.mount(); 
    splideSites.on( 'move', () => {
       var numberSlide = splideSites.index + 1;
       if(numberSlide < 10){
        numberSlide  = '0' + numberSlide; 
       }
       document.getElementById('number-page-sites').innerHTML =  numberSlide;
    } );
</script>



