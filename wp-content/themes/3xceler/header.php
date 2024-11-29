<!doctype html>

<html lang="pt">



  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="<?= get_template_directory_uri(); ?>/dist/imgs/favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title><?= wp_title('|') ?></title> 
    

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-37425064-94"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-37425064-94');
    </script>

    
    <?php wp_head();?>

    <script>

    if ( window.history.replaceState ) {

        window.history.replaceState( null, null, window.location.href );

    }

    </script>
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-52384M4');</script>
    <!-- End Google Tag Manager -->
    
    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '243281417202559');
      fbq('track', 'PageView');
    </script>
    
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=243281417202559&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->

  </head>
  <?php
    $MenuHeader = "";
    if(!is_front_page()){
      $MenuHeader = "menu-single-page";
    }
  ?>
  <body class="<?= str_replace(".php","",get_page_template_slug()) ?>" >
      
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-52384M4"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <!-- HEADER -->

    <header class="sticky-top <?= $MenuHeader; ?> <?= $args['class']; ?>" id="menu-top" >

      <div class="container">

        <div class="row">

            <div class="col-lg-3 col-12">

              <a href="<?= get_home_url(); ?>/" title="Agencia 3xceler"><img src="<?= get_template_directory_uri(); ?>/dist/imgs/logo.png" alt="Agencia 3xceler" title="Agencia 3xceler" class="logo-header logo-princ d-lg-block d-none"></a>
              <a href="<?= get_home_url(); ?>/" title="Agencia 3xceler"><img src="<?= get_template_directory_uri(); ?>/dist/imgs/logo-3xceler-header-mobile.png" alt="Agencia 3xceler" title="Agencia 3xceler" class="logo-princ logo-mob-princ logo-header d-lg-none"></a>
              <a href="<?= get_home_url(); ?>/" title="Agencia 3xceler"><img src="<?= get_template_directory_uri(); ?>/dist/imgs/logo-minimal.png" alt="Agencia 3xceler" title="Agencia 3xceler" class="logo-header logo-blog d-none"></a>

              <button class="hamb d-lg-none"><span></span><span></span><span></span></button>

            </div>

            <div class="col-lg-9 col-12" id="nav-menu-container">

              <nav class="navbar navbar-expand-lg">

                <div class="collapse navbar-collapse offcanvas-collapse" id="navbarNav">
                  <?php
                    $locations = get_nav_menu_locations();
                    $menu = wp_get_nav_menu_object( $locations[ 'header' ] );
                    $items = wp_get_nav_menu_items($menu->term_id, array( 'order' => 'DESC' ));
                    $menus = buildTree($items);

                  ?>
                  <ul class="navbar-nav">
                    <!-- <?php $contMenu = 0; ?>
                   <?php foreach( $menus as $item ) : ?>
                      <?php $contMenu++; ?>
                      <?php if( empty( $item['children'] ) ) : ?>
                        <li class="nav-item">
                          <a class="nav-link <?= $item['classes'][0];?>" title="<?= $item['title']; ?>" href="<?= $item['url']; ?>"><?=  $item['title']; ?></a>
                          <?php if($item['classes'][0] == 'divisor'): ?>
                            <span class="divisor-link-nav "></span>
                          <?php endif; ?>
                        </li>
                      <?php else :   ?>
                        <li class="nav-item dropdown d-none d-lg-block">
                          <a class="nav-link dropdown-toggle d-none d-lg-block" title="<?= $item['title']; ?>" href="<?= $item['url']; ?>" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                          <?= $item['title']; ?>
                          </a>
                          <a class="nav-link dropdown-toggle d-lg-none" type="button" title="<?= $item['title']; ?>" id="navbarDropdown-<?= $contMenu; ?>" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $item['title']; ?>
                          </a>
                          <div class="dropdown-menu m-0" aria-labelledby="navbarDropdown-<?= $contMenu; ?>">
                            <?php foreach( $item['children'] as $category ) : ?>
                                <a class="dropdown-item" title="<?= $category['title']; ?>" href="<?= $category['url']; ?>">
                                <?= $category['title']; ?>
                                </a>
                            <?php  endforeach; ?>
                          </div>
                          <?php if($item['classes'][0] == 'divisor'): ?>
                            <span class="divisor-link-nav divisor-c-drop"></span>
                          <?php endif; ?>
                        </li>
                        <div class="dropdown d-lg-none">
                          <a class="nav-link dropdown-toggle d-none d-lg-block" title="<?= $item['title']; ?>"  href="<?= $item['url']; ?>" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <?= $item['title']; ?>
                          </a>
                          <a class="nav-link dropdown-toggle d-lg-none" type="button" title="<?= $item['title']; ?>" id="navbarDropdown-<?= $contMenu; ?>" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $item['title']; ?>
                          </a>
                          <div class="dropdown-menu m-0" aria-labelledby="navbarDropdown-<?= $contMenu; ?>">
                            <?php foreach( $item['children'] as $category ) : ?>
                                <a class="dropdown-item" href="<?= $category['url']; ?>" title="<?= $category['url']; ?>">
                                <?= $category['title']; ?>
                                </a>
                            <?php  endforeach; ?>
                          </div>
                        </div>
                      <?php endif; ?>
                    <?php endforeach; ?> -->
                    <li class="nav-item">
                      <a class="nav-link" title="Home" href="<?= get_home_url(); ?>/">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" title="Sobre Nós" href="<?= get_home_url(); ?>/#sobre">Sobre Nós</a>
                    </li>
                    <li class="nav-item button-open-service">
                      <a class="nav-link" title="Serviços" href="#">Serviços</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" title="Blog" href="<?= get_home_url(); ?>/blog/" target="_blank">Blog</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" title="Contato" href="<?= get_home_url(); ?>/#contact-footer">Contato</a>
                    </li>
                    <li class="nav-item buttons-tel">
                      <a href="tel:0<?= formatNumber(getNumbers('fixo-sp')); ?>" title="telefone"><?= getNumbers('fixo-sp'); ?> /</a>
                      <a href="tel:0<?= formatNumber(getNumbers('fixo-sp-2')); ?>" title="telefone"> <?= getNumbers('fixo-sp-2'); ?></a>
                    </li>
                    <li class="nav-item redes-sociais-menu-blog d-none">
                      <a href="https://www.facebook.com/agencia3xceler" target="_blank" title="Nosso Facebook">
                        <i class="fa fa-facebook-square"></i>
                      </a>
                      <a href="https://www.instagram.com/agencia3xceler/" target="_blank" title="Nosso Instagram">
                        <i class="fa fa-instagram"></i>
                      </a>       
                      <a href="https://br.linkedin.com/organization-guest/company/agencia-3xceler?challengeId=AQG_iY9S8-VyJQAAAXNtNZccJxR6Jal2Vr9ItR0NFsG5oLB_2KeYg03ymoqce7mKXMzTb7LpXOEtlwMDEq3J8_gqfmG0-p7pSA&submissionId=bac6d9e9-2685-2316-29fd-46b7cc4ff00b" target="_blank" title="Nosso Linkedin">
                        <i class="fa fa-linkedin-square"></i>
                      </a>                    
                    </li>
                    <li class="nav-item button-hamb">
                      <button class="hamb is-open"><span></span><span></span><span></span></button>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
        </div>
     
        <div class="burger-overlay">
            <div class="container" id="menu-princ">
              <div class="row line-1" >
                <div class="col-6 box-1 box">
                  <a href="<?= get_home_url(); ?>/#sobre" class="close-menu" title="Sobre Nós">
                    <div class="box-vertical">
                      <span class="title-menu">
                        Sobre<br>
                        Nós
                      </span>
                      <p class="d-lg-block d-none">
                        Movidos pela <br> paixão                   
                        <i class="fa fa-long-arrow-right"></i>
                      </p>
                    </div>
                  </a>
                </div>
                <div class="col-6 box-2 box">
                  <a href="<?= get_home_url(); ?>/blog/" title="blog" target="_blank">
                    <div class="box-horizontal">
                      <span class="title-menu">
                        Blog
                      </span>
                      <p class="d-lg-block d-none">
                        Dicas, Novidades e Curiosidades               
                        <i class="fa fa-long-arrow-right"></i>
                      </p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="row line-2">
                <div class="col-12 box-3 box">
                  <a href="#" title="Portfólio">
                    <div class="box-horizontal">
                      <span class="title-menu opaque">
                        Portfólio
                      </span>
                      <p class="opaque d-lg-block d-none">
                        Orgulho do que fazemos               
                        <i class="fa fa-long-arrow-right"></i>
                      </p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="row line-3">
                <div class="col-6 box-4 box">
                  <a href="#" class="button-open-service" data-name-button="Serviços" title="Serviços">
                    <div class="box-horizontal">
                      <span class="title-menu">
                        Serviços <i class="fa fa-chevron-right d-lg-none"></i>
                      </span>
                      <p class="d-lg-block d-none">
                        Como podemos te ajudar      
                        <i class="fa fa-long-arrow-right"></i>
                      </p>
                    </div>
                  </a>
                </div>
                <div class="col-6 box-5 box">
                  <a href="<?= get_home_url(); ?>/#contact-footer" class="close-menu" title="Contato">
                    <div class="box-vertical">
                      <span class="title-menu">
                        Contato
                      </span>
                      <p class="d-lg-block d-none">
                        Venha tomar um café                   
                        <i class="fa fa-long-arrow-right"></i>
                      </p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="container" id="menu-secundary">
              <div class="row">
                <div class="col-12">
                  <button class="btn-voltar button-close-service">
                    <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/icon-arrow-left-tertiary.png" class="d-none d-lg-block"  alt="Voltar ao menu anterior">
                    <i class="fa fa-long-arrow-left d-lg-none"></i>
                    <span  class="d-lg-none name-buttom">
                      
                    </span>
                  </button>
                  <ul class="second-level-menu-body">
                    <li>
                      <a href="<?= get_home_url(); ?>/otimizacao-de-sites/" title="Otimização de Sites">Otimização de Sites</a>
                    </li>
                    <li>
                      <a href="<?= get_home_url(); ?>/criacao-de-sites/" title="Criação de Sites">Criação de Sites</a>
                    </li>
                    <li>
                      <a href="<?= get_home_url(); ?>/links-patrocinados/" title="Links Patrocinados">Links Patrocinados</a>
                    </li>
                    <li>
                      <a class="opaque" href="#" title="Landing Pages">Landing Pages</a>
                    </li>
                    <li>
                      <a class="opaque" href="#" title="Social Media">Social Media</a>
                    </li>
                    <li class="has-children opaque">Branding <ul class="second-level-menu-body-sub">
                        <li>
                          <a class="opaque" href="#" title="Design de Marcas">Design de Marcas</a>
                        </li>
                        <li>
                          <a class="opaque" href="#" title="Identidade Visual">Identidade Visual</a>
                        </li>
                        <li>
                          <a class="opaque" href="#" title="Naming">Naming</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a class="opaque" href="#" title="Marketing de Conteúdo">Marketing de Conteúdo</a>
                    </li>
                    <li class="has-children"  data-id-button="performance" data-name-button="Performance">Performance <i class="fa fa-chevron-right d-lg-none"></i>
                      <ul class="second-level-menu-body-sub" id="body-sub-menu-performance">
                        <li>
                          <a class="opaque" href="#" title="FaceAds / InstaAds / WhatsappAds">FaceAds / InstaAds / WhatsappAds</a>
                        </li>
                        <li>
                          <a class="opaque" href="#" title="LinkedinAds">LinkedinAds</a>
                        </li>
                        <li>
                          <a href="<?= get_home_url(); ?>/links-patrocinados/" title="Gestão de Links Patrocinados">Gestão de Links Patrocinados</a>
                        </li>
                        <li>
                          <a class="opaque" href="#" title="Conversion Rate Optimization (CRO)">Conversion Rate Optimization (CRO)</a>
                        </li>
                      </ul>
                    </li>
                    <li class="has-children" data-id-button="consultoria" data-name-button="Consultoria">Consultoria <i class="fa fa-chevron-right d-lg-none"></i>
                      <ul class="second-level-menu-body-sub" id="body-sub-menu-consultoria">
                        <li>
                          <a href="<?= get_home_url(); ?>/otimizacao-de-sites/" title="Otimização de Sites">Otimização de Sites</a>
                        </li>
                        <li>
                          <a href="<?= get_home_url(); ?>/links-patrocinados/" title="Links Patrocinados" >Links Patrocinados</a>
                        </li>
                        <li>
                          <a class="opaque" href="#" title="Digital Strategy Planning">Digital Strategy Planning</a>
                        </li>
                        <li>
                          <a class="opaque" href="#" title="Conversion Rate Optimization (CRO)">Conversion Rate Optimization (CRO)</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
        </div>
    </header>


    <!-- FIM HEADER -->

    <main id="<?= $args['page']; ?>" class="<?= $args['class']; ?>">







