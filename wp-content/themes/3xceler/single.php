
<?php ed_set_post_views(get_the_ID());?>

<?php 
    $args = array(
    'page' => 'single-post',
    'class' => 'int-blog'
    ); 
?>

<?php get_template_part('header', null, $args); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



<div class="helper-header">
    <div id="progress-bar" class="scroll-bar"></div>    
    <div class="container d-none d-lg-block">
        <div class="row">
            <div class="col-12">
                <div class="center-content flexed row jf-between ai-center">
                    <p class="t-s t-primary">
                    <span class="t-secondary">•</span> <?= the_title(); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="intro">
    <div class="container">
        <div class="row line-intro">
            <div class="col-lg col-12">
                <?php if(get_the_post_thumbnail_url()): ?>
                    <img src="<?=get_the_post_thumbnail_url();?>" title="<?= the_title(); ?>" alt="<?= the_title(); ?>"  class="image-destaque-large d-none d-lg-block">
                <?php endif; ?>
                <h1 class="title-large">
                <?= the_title(); ?>
                </h1>
            </div>
            <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/blog-prop-circled-upper-right.jpg" class="bg-top" title="bg" alt="bg">
        </div>
    </div>
    <hr>
</div>
<div class="container container-content">
    <div class="row">
        <div class="col-12 col-lg-2 sidebar-left d-none d-lg-block">
            <aside class="author-widget">
                <img src="<?= get_template_directory_uri(); ?>/dist/imgs/logo-minimal.png" class="author-picture margin-s" alt="Agência 3xceler" title="Agência 3xceler">
                <div class="author-info">
                    <p >Por: <strong class="autor-name">Agência 3xceler</strong>
                    </p>
                    <p class="data"><?= get_the_date() ?></p>
                    <div class="social">
                        <a href="https://www.facebook.com/agencia3xceler" class="social-icon facebook" target="_blank" title="Nosso Facebook">
                        <i class="fa fa-facebook-square"></i>
                        </a>
                        <a href="https://www.instagram.com/agencia3xceler/" class="social-icon instagram" target="_blank" title="Nosso Instagram">
                        <i class="fa fa-instagram"></i>
                        </a>       
                        <a href="https://br.linkedin.com/organization-guest/company/agencia-3xceler?challengeId=AQG_iY9S8-VyJQAAAXNtNZccJxR6Jal2Vr9ItR0NFsG5oLB_2KeYg03ymoqce7mKXMzTb7LpXOEtlwMDEq3J8_gqfmG0-p7pSA&submissionId=bac6d9e9-2685-2316-29fd-46b7cc4ff00b" target="_blank" class="social-icon linkedin" title="Nosso Linkedin">
                        <i class="fa fa-linkedin-square"></i>
                        </a>   
                    </div>
                </div>
            </aside>
            <div class="wrap-sticky">
                <h3 class="title">Índice</h3>
                <ul class="list-dotted container-indice with-borders t-primary bold">
                </ul>
            </div>
        </div>
        <div class="col-12 col-lg-7 content the-content">
            <?= the_content(); ?>
            <a href="https://www.3xceler.com.br/criacao-de-sites/?utm_source=blog&utm_medium=footer-artigo&utm_campaign=criacao-de-sites" target="_blank"><img class="image-bottom-pro" src="<?= get_template_directory_uri( ) ?>/dist/imgs/banner-footer-criacao-de-sites.jpg" alt="Criação de Sites Responsivos" title="Criação de Sites Responsivos"></a>
        </div>
        <div class="col-12 col-lg-3 d-none d-lg-block">
            <aside class="sidebar-right">
                <div class="top-sidebar-banner-wrapper margin-g">
                    <a href="https://www.3xceler.com.br/otimizacao-de-sites/?utm_source=BannerSite&amp;utm_medium=SEO&amp;utm_campaign=SidebarBlog" target="_blank">
                    <img class="top-sidebar-banner" src="<?= get_template_directory_uri( ) ?>/dist/imgs/banner-sidebar.jpg" alt="SEO 3xceler: Alcance as primeiras páginas do Google" title="SEO 3xceler: Alcance as primeiras páginas do Google">
                    </a>
                </div>
                <?php                     
                    $dlist = [];
                    array_push($dlist, get_the_ID());
                    $query = new WP_Query(array(
                        'posts_per_page'=> 5,
                        'post_type'        => 'post',
                        'post_status' => 'publish',
                        'post__not_in' => $dlist
                    ));
                    if( $query->have_posts() ) : $cont = 0
                ?>
                <div class="list-wrapper">
                    <h4 class="title">Últimos Artigos</h4>
                    <ul class="list-dotted with-borders t-r t-primary">
                        <?php while( $query->have_posts() ) : $query->the_post();?>
                            <li>
                                <a href="<?= get_permalink(); ?>" title="<?= get_the_title(); ?>" target="_blank"><?= get_the_title(); ?></a>
                            </li>
                        <?php endwhile;?>
                    </ul>
                </div>
                <?php 
                    wp_reset_postdata();
                    endif;
                ?>
                <div class="top-sidebar-banner-wrapper margin-g margin-top-banner-sidebar">
                    <a href="https://www.3xceler.com.br/criacao-de-sites/?utm_source=blog&utm_medium=banner-lateral&utm_campaign=criacao-de-sites" target="_blank">
                    <img class="top-sidebar-banner" src="<?= get_template_directory_uri( ) ?>/dist/imgs/banner-sidebar-criacao-de-sites.jpg" alt="Criação de Sites Responsivos" title="Criação de Sites Responsivos">
                    </a>
                </div>
            </aside>
        </div>
    </div>
</div>
<hr class="d-none d-lg-block">
<div class="container d-none d-lg-block">
    <div class="row line-outher-posts">
        <div class="col-6">
            <?php
                $previous = get_previous_post();
            if (get_previous_post()): ?>
                <a href="<?= get_permalink($previous); ?>">
                    <i class="fa fa-long-arrow-left"></i> 
                    Post Anterior  
                    <span>
                     | <?php echo(limit_words(get_the_title($previous),60)); ?>
                    </span>
                </a>
            <?php endif; ?>
        
        </div>
        <div class="col-6 text-end">
            <?php
                $next = get_next_post();
            ?>
            <?php if (get_next_post()): ?>
                <a href="<?= get_permalink($next); ?>">
                    <span>
                        <?php echo(limit_words(get_the_title($nexts),60)); ?> | 
                    </span>  Próximo Post  
                    <i class="fa fa-long-arrow-right"></i> 
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>
<hr class="d-none d-lg-block">
<?php endwhile; wp_reset_postdata();?>
<?php endif; ?>
<?php if( have_rows('postagens_relacionadas') ): ?>
    <div class="container">
        <div class="row line-intro-relacionados">
            <div class="col-12">
                <aside class="author-widget d-lg-none">
                    <img src="<?= get_template_directory_uri(); ?>/dist/imgs/logo-minimal.png" class="author-picture margin-s" alt="Agência 3xceler" title="Agência 3xceler">
                    <div class="author-info">
                        <p >Por: <strong class="autor-name">Agência 3xceler</strong>
                        </p>
                        <p class="data"><?= get_the_date() ?></p>
                        <div class="social">
                            <a href="https://www.facebook.com/agencia3xceler" class="social-icon facebook" target="_blank" title="Nosso Facebook">
                            <i class="fa fa-facebook-square"></i>
                            </a>
                            <a href="https://www.instagram.com/agencia3xceler/" class="social-icon instagram" target="_blank" title="Nosso Instagram">
                            <i class="fa fa-instagram"></i>
                            </a>       
                            <a href="https://br.linkedin.com/organization-guest/company/agencia-3xceler?challengeId=AQG_iY9S8-VyJQAAAXNtNZccJxR6Jal2Vr9ItR0NFsG5oLB_2KeYg03ymoqce7mKXMzTb7LpXOEtlwMDEq3J8_gqfmG0-p7pSA&submissionId=bac6d9e9-2685-2316-29fd-46b7cc4ff00b" target="_blank" class="social-icon linkedin" title="Nosso Linkedin">
                            <i class="fa fa-linkedin-square"></i>
                            </a>   
                        </div>
                    </div>
                </aside>
                <h2 class="title-large">
                    ARTIGOS RELACIONADOS
                </h2>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row line-relacionados">     
            <?php if( have_rows('postagens_relacionadas') ): ?>
                <?php while( have_rows('postagens_relacionadas') ) : the_row(); ?>
                    <?php
                    $featured_posts = get_sub_field('postagem_relacionada');
                    if( $featured_posts ): ?>
                            <?php 
                                $args = array(
                                    'link' => get_permalink($featured_posts->ID),
                                    'title' => get_the_title($featured_posts->ID), 
                                    'image' => get_field('imagem', $featured_posts->ID)
                                );
                                echo '<div class="col-lg-3 col-12">';
                                    get_template_part('includes/components/card-blog', null, $args);
                                echo '</div>';
                            ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                <?php  endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>

</main>

<?php get_template_part('footer', null, 2); ?> 

<!-- adicionando ancora links para o content -->
<script>
    let headings = document.querySelectorAll('.content h2');
    let containerIndice = document.querySelector('.container-indice');

    let headingsArr = Array.from(headings);

    headings.forEach((heading, idx) => {
        heading.setAttribute('id', `heading-${idx}`);
    });

    console.log(headingsArr);

    var listItems = headingsArr.map(function(heading, idx){
        return "<li key=" + idx+ ">" +
            "<a href='#heading-" + idx + "'>" +
                heading.textContent +
           "</a></li>"
    });
    containerIndice.innerHTML = listItems.join('');
</script>

<!-- inserindo target blank nos links do content -->
<script>
    let links = document.querySelectorAll('.the-content a');

    let linksArr = Array.from(links);

    links.forEach((link, idx) => {
         link.setAttribute('target', `_blank`);
    });
</script>


<!-- adicionando progress bar no header -->
<script>
    window.onscroll = function() {myFunction()};
    function myFunction() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("progress-bar").style.width = scrolled + "%";
    }
</script>
