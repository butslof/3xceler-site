</main>

<?php 
  $classFooter = "";
if($args == 1){
  $classFooter = "site";
}elseif($args == 2){
  $classFooter = "blog";
}
?>
<footer id="footer" class="<?= $classFooter; ?>">
  <?php
    
    if($args == 1): 
  ?>
  <div class="container">
    <div class="row">
      <div class="col-12 col-intro">
        <h2 class="title-large title-large-full">Entre em Contato!</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-12 col-text contact-box ">
          <?php
              $args = array(
                  'unidade' => 'São Paulo',
                  'title' => 'São Paulo',
                  'text' => 'Rua Bom Pastor nº 2.732 | Conj. 56/57 - Ipiranga | São Paulo / SP | Brasil'
              );
          ?>
          <?php get_template_part('includes/components/contacts-box', null, $args); ?>
      </div>
      <div class="col-lg-6 col-12 col-text contact-box ">
          <?php
              $args = array(
                  'unidade' => 'Natal',
                  'title' => 'Natal',
                  'text' => 'R. Pedro Fonseca Filho, 8989 - Ponta Negra, Natal - RN, 59090-080'
              );
          ?>
          <?php get_template_part('includes/components/contacts-box', null, $args); ?>
      </div>
    </div>
    <nav class="footer-navigation-main row d-none d-lg-flex">
      <div class="col-3">
        <a class="d-block w-100 margin-2g" href="<?= get_home_url(); ?>/#sobre" title="Logotipo ag. 3xceler">
          <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/logo-footer.png" class="logo-footer" alt="Logotipo ag. 3xceler">
        </a>
        <p class="p-sobre-footer">Agregar valores, ações de interação, linguagem e abordagens bem definidas, apelo e impacto visual, são os pilares que sustentam a boa reputação de uma marca em seu respectivo mercado. Acreditamos que gerir marcas é isso, fazer do prefixo uma constante, fazer da sua marca uma potência.</p>
        <a href="<?= get_home_url(); ?>/#sobre" class="link-saiba-mais" title="Saiba Mais">Saiba Mais</a>
      </div>
      <div class="col-3 footer-column">
        <ul class="t-primary t-xg upper">
          <li>
            <a href="<?= get_home_url(); ?>/" title="Home">Home</a>
          </li>
          <li>
            <a href="<?= get_home_url(); ?>/#sobre" title="Sobre nós">SOBRE NÓS</a>
          </li>
          <li>
            <a class="opaque" href="#" title="portfólio">portfólio</a>
          </li>
          <li>
            <a target="_blank" href="<?= get_home_url(); ?>/blog/" title="blog" >BLOG</a>
          </li>
          <li>
            <a href="#contact-footer" title="contato">CONTATO</a>
          </li>
        </ul>
      </div>
      <div class="col-3 footer-column">
        <ul class="t-primary t-xg upper">
          <li>
            <a href="#" title="serviços">Serviços</a>
            <ul class="t-g bold">
              <li>
                <a href="<?= get_home_url(); ?>/otimizacao-de-sites/" title="otimização de sites">
                  <i class="fa fa-long-arrow-right"></i>
                  Otimização de Sites </a>
              </li>
              <li>
                <a href="<?= get_home_url(); ?>/criacao-de-sites/" title="criação de sites">
                <i class="fa fa-long-arrow-right"></i>
                Criação de Sites </a>
              </li>
              <li>
                <a href="<?= get_home_url(); ?>/links-patrocinados/" title="Links Patrocinados">
                <i class="fa fa-long-arrow-right"></i>
                Links Patrocinados </a>
              </li>
              <li>
                <a class="opaque" href="#" title="Landing Pages">
                <i class="fa fa-long-arrow-right"></i>
                Landing Pages </a>
              </li>
              <li>
                <a class="opaque" href="#" title="Social Media">
                <i class="fa fa-long-arrow-right"></i>
                Social Media </a>
              </li>
              <li>
                <a class="opaque" href="#" title="Branding">Branding</a>
                <ul class="reg t-s list-dotted">
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
            </ul>
          </li>
        </ul>
      </div>
      <div class="col-3 footer-column">
        <ul class="t-primary t-xg upper">
          <li>
            <ul class="t-g bold">
              <li>
                <a href="#" title="Performance" >
                  <i class="fa fa-long-arrow-right"></i>
                  Performance </a>
                <ul class="reg t-s list-dotted">
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
              <li>
                <a href="#" title="Consultoria">
                <i class="fa fa-long-arrow-right"></i>
                Consultoria </a>
                <ul class="reg t-s list-dotted">
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
                    <a class="opaque" href="#" title="Conversion Rate Optimization (CRO)" >Conversion Rate Optimization (CRO)</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <div class="container">
    <div class="row d-lg-none line-sobre-mob">
      <div class="col-12">
        <a class="d-block w-100 margin-2g" href="<?= get_home_url(); ?>">
          <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/logo-footer.png" class="logo-footer" alt="Logotipo ag. 3xceler">
        </a>
        <p class="p-sobre-footer">Agregar valores, ações de interação, linguagem e abordagens bem definidas, apelo e impacto visual, são os pilares que sustentam a boa reputação de uma marca em seu respectivo mercado. Acreditamos que gerir marcas é isso, fazer do prefixo uma constante, fazer da sua marca uma potência.</p>
        <!-- <a href="/" class="link-saiba-mais">Saiba Mais</a> -->
      </div>
    </div>
  </div>
  <?php
    elseif($args == 2): 
  ?>
    <div class="container">
      <div class="row line-cols">
        <div class="col-lg-6 col-12">
          <a class="d-block w-100 margin-2g" href="<?= get_home_url(); ?>">
            <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/logo-footer.png" class="logo-footer d-none d-lg-block" alt="Logotipo ag. 3xceler">
            <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/logo-minimal-white.png" class="logo-footer d-lg-none" alt="Logotipo ag. 3xceler">

            
          </a>
          <div class="fones">
            <a href="tel:0<?= formatNumber(getNumbers('fixo-sp')); ?>"> <?= getNumbers('fixo-sp'); ?> | </a>
            <a href="tel:0<?= formatNumber(getNumbers('fixo-sp-2')); ?>"> <?= getNumbers('fixo-sp-2'); ?></a>
          </div>
          <address>
            Rua Cantagalo, n°. 1404, Vila Gomes Cardim, São Paulo - SP - CEP: 03.319-001
          </address>
        </div>
        <div class="col-lg-6 col-12 col-nav">
          <ul class="nav-menu flexed wrap ai-center d-none d-lg-flex">
            <li class="nav-item" id="menu-item-id-3923">
              <a href="/">Home</a>
            </li>
            <li class="nav-item" id="menu-item-id-4153">
              <a href="/#sobre-nos">Sobre Nós</a>
            </li>
            <li class="nav-item" id="menu-item-id-3924">
              <a href="https://www.3xceler.com.br/blog/" target="_blank">Blog</a>
            </li>
            <li class="nav-item" id="menu-item-id-4156">
              <a href="/#main-footer">Contato</a>
            </li>
          </ul>
          <div class="social-footer">
            <span class="follow-title-footer">
              <span class="text">Siga Nos</span>
            </span>
            <span class="line"></span>
            <a href="https://www.facebook.com/agencia3xceler" target="_blank" title="Nosso Facebook">
              <i class="fa fa-facebook-square"></i>
            </a>
            <a href="https://www.instagram.com/agencia3xceler/" target="_blank" title="Nosso Instagram">
              <i class="fa fa-instagram"></i>
            </a>       
            <a href="https://br.linkedin.com/organization-guest/company/agencia-3xceler?challengeId=AQG_iY9S8-VyJQAAAXNtNZccJxR6Jal2Vr9ItR0NFsG5oLB_2KeYg03ymoqce7mKXMzTb7LpXOEtlwMDEq3J8_gqfmG0-p7pSA&submissionId=bac6d9e9-2685-2316-29fd-46b7cc4ff00b" target="_blank" title="Nosso Linkedin">
              <i class="fa fa-linkedin-square"></i>
            </a>   
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <div class="direitos">
    <p>
      Agência 3xceler Marketing Performance - Todos os Direitos Reservados | Copyright <?= date("Y"); ?>
    </p>
  </div>
</footer>

<!-- tracking here -->

<?php 
  include 'includes/tracking.php'; 
	wp_footer(); 
  include 'includes/scripts-globals.php'; 
?>

</body>
</html>




