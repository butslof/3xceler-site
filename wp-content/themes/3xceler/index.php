<?php $args = "blog"; ?>
<?php 
    $args = array(
    'page' => 'blog',
    'class' => 'int-blog'
    ); 
?>

<?php get_template_part('header', null, $args); ?>

<section id="content-blog">
    <div class="container">
        <div class="row line-intro">
            <div class="col-lg col-12">
                <h1 class="title-large">
                    <span>Fique por dentro de todas as novidades do</span>
                    <span class="bg-title">
                        <div class="text-background"></div>
                        MARKETING DIGITAL
                    </span>
                </h1>
                <h2 class="sub-title">Leia nosso blog</h2>
            </div>
            <div class="col-lg-4 col-12 d-none d-lg-block">
                <?php get_template_part('includes/components/form-search', null, null); ?>
            </div>
            <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/prop-shiny-purple.png" class="shiny-purple d-none d-lg-block" tilte="Agência de Marketing Digital" alt="Agência de Marketing Digital">
            <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/blog-prop-circled-upper-right.jpg" class="bg-top" title="bg" alt="bg">
        </div>
    </div>
    <div class="container-fluid container-posts">


        <?php 
            $query = new WP_Query(array(
                'posts_per_page'=> 12,
                'post_type'        => 'post',
                'post_status' => 'publish',
                'paged' => $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1
            ));
            $dlist = [];
            if( $query->have_posts() ) : $cont = 0
                
        ?>
            <?php while( $query->have_posts() ) : $query->the_post(); $cont++; array_push($dlist, get_the_ID());?>
                <?php if($cont % 2 != 0): ?>
                    <article class="row line-post line-right">
                        <div class="col-lg col-12 col-text text-right">
                            <div class="content-box" >
                                <a href="<?= get_permalink() ?>" title="<?= get_the_title();?>" target="_blank">
                                    <img src="<?= get_field('imagem'); ?>" title="<?= get_the_title();?>" alt="<?= get_the_title();?>" class="d-lg-none img-post-mob">
                                    <div class="info-post d-lg-none">
                                        <span class="mobile-author-avatar-wrapper">
                                            <img class="mobile-author-avatar" src="<?= get_template_directory_uri(); ?>/dist/imgs/logo-3xceler-header-mobile.png" alt="Agência 3xceler" title="Agência 3xceler">
                                        </span>
                                        Por: <span class="autor">Agência 3xceler</span>   |  <span class="date"><?= get_the_date() ?></span>
                                    </div>
                                    <h2 class="title-posts">
                                        <?php echo(limit_words(get_the_title(),89)); ?>
                                    </h2>
                                    <div class="info-post d-none d-lg-block">
                                        Por: <span class="autor">Agência 3xceler</span>   |  <span class="date"><?= get_the_date() ?></span>
                                    </div>
                                    <p class="resumo d-none d-lg-block">
                                        <?php echo(limit_words(get_the_excerpt(),260)); ?>
                                    </p>
                                </a>
                                <a href="<?= get_permalink() ?>" title="<?= get_the_title();?>" class="button-veja-mais d-lg-none" target="_blank">
                                    Saiba mais
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-12 col-img d-none d-lg-block" id="box-img-<?= $cont; ?>" onmouseout="disableButtonLink('box-img-<?= $cont; ?>')" onmousemove="coordenadas(event, 'box-img-<?= $cont; ?>')">
                            <a href="<?= get_permalink(); ?>" title="<?= get_the_title();?>" target="_blank">
                                <img src="<?= get_field('imagem'); ?>" title="<?= get_the_title();?>" alt="<?= get_the_title();?>">
                            </a>
                            <a class="link-circle" href="<?= get_permalink() ?>" title="<?= get_the_title();?>"  target="_blank">Saiba mais</a>
                            <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/prop-rectangle-blog-feed.png" class="prop-rectangle-feed" title="retangulo" alt="retangulo" class="d-none d-lg-block">
                        </div>
                    </article>
                <?php else: ?>
                    <article class="row line-post line-left">
                        <div class="col-lg-5 col-12 col-img d-none d-lg-block" id="box-img-<?= $cont; ?>" onmouseout="disableButtonLink('box-img-<?= $cont; ?>')" onmousemove="coordenadas(event, 'box-img-<?= $cont; ?>')">
                            <a href="<?= get_permalink(); ?>" title="<?= get_the_title();?>" target="_blank">
                                <img src="<?= get_field('imagem'); ?>" title="<?= get_the_title();?>" alt="<?= get_the_title();?>">
                            </a>
                            <a class="link-circle" href="<?= get_permalink() ?>" title="<?= get_the_title();?>"  target="_blank">Saiba mais</a>
                            <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/prop-rectangle-blog-feed.png" class="prop-rectangle-feed" title="retangulo" alt="retangulo" class="d-none d-lg-block">
                        </div>
                        <div class="col-lg col-12 col-text text-left">
                            <div class="content-box">
                                <a href="<?= get_permalink() ?>" title="<?= get_the_title();?>" target="_blank">
                                    <img src="<?= get_field('imagem'); ?>" title="<?= get_the_title();?>" alt="<?= get_the_title();?>" class="d-lg-none img-post-mob">
                                    <div class="info-post d-lg-none">
                                        <span class="mobile-author-avatar-wrapper">
                                            <img class="mobile-author-avatar" src="<?= get_template_directory_uri(); ?>/dist/imgs/logo-3xceler-header-mobile.png" alt="Agência 3xceler" title="Agência 3xceler">
                                        </span>
                                        Por: <span class="autor">Agência 3xceler</span>   |  <span class="date"><?= get_the_date() ?></span>
                                    </div>
                                    <h2 class="title-posts">
                                        <?php echo(limit_words(get_the_title(),89)); ?>
                                    </h2>
                                    <div class="info-post d-none d-lg-block">
                                        Por: <span class="autor">Agência 3xceler</span>   |  <span class="date"><?= get_the_date() ?></span>
                                    </div>
                                    <p class="resumo d-none d-lg-block">
                                        <?php echo(limit_words(get_the_excerpt(),260)); ?>
                                    </p>
                                </a>
                                <a href="<?= get_permalink() ?>" title="<?= get_the_title();?>" class="button-veja-mais d-lg-none" target="_blank">
                                    Saiba mais
                                </a>
                            </div>
                    </article>
                <?php endif; ?>
            <?php endwhile;?>
        <?php 
            wp_reset_postdata();
            endif;
        ?>
  
       
        <div class="row d-lg-none">
            <div class="col-12">
                <?php get_template_part('includes/components/form-search', null, null); ?>
            </div>
        </div>
    </div>
    <div class="container container-mais-acessados">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="title-large">
                    <span class="bg-title">
                        <div class="text-background"></div>
                        Artigos mais acessados
                    </span>
                </h2>
            </div>
        </div>
        <div class="row line-items container-posts-load-more">
            <?php
                $posts = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 8,
                    'meta_key' => 'ed_post_views_count',
                    'orderby' => 'meta_value_num',
                    'post__not_in' => $dlist,
                ));
                if($posts->have_posts()){
                    while($posts->have_posts()){
                        $posts->the_post();
                        array_push($dlist, get_the_ID());
                        $args = array(
                            'link' => get_permalink(),
                            'title' => get_the_title(), 
                            'image' => get_field('imagem')
                        );
                        echo '<div class="col-lg-3 col-12">';
                            get_template_part('includes/components/card-blog', null, $args);
                        echo '</div>';
                    } 
                }else{
                    echo "<h3><strong style='font-size:20px;'> Nenhum Post Encontrado! :(</strong></h3>";
                }
            ?>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <!-- <img  -->
                <a href="<?= get_home_url(); ?>/" title="Agencia 3xceler"><img src="<?= get_template_directory_uri(); ?>/dist/imgs/logo-minimal.png" alt="Agencia 3xceler" title="Agencia 3xceler" class="gif-loader"></a>
                <button id="button-load-more"class="button-veja-mais load-more-posts margin-0-auto" total-pagination="<?= $posts->max_num_pages; ?>" data-pagination="1" onclick="loadMorePosts(<?= json_encode($dlist); ?>, this)">VER MAIS</button>
            </div>
        </div>
    </div>
</section>

</main>
<?php get_template_part('footer', null, 2); ?> 
<script>
    function loadMorePosts(list){
        var wpVars = JSON.parse(hoist);
        const containerPosts = document.querySelector(".container-posts-load-more");
        const loading = document.querySelector(".gif-loader");
        loading.style.display = "block";
        const buttondataPagination = document.getElementById('button-load-more');
        const dataPagination = buttondataPagination.getAttribute('data-pagination');
        const totalPagination = buttondataPagination.getAttribute('total-pagination');
    
       
        let params = new URLSearchParams();
        params.append("action", "load_post_more_visited");
        params.append("list", list);
        params.append("pageOffset", dataPagination);

        axios.post(wpVars.admin_url, params).then((res) => {
            loading.style.display = "none";
            containerPosts.innerHTML +=(res.data);
            buttondataPagination.setAttribute('data-pagination', parseInt(dataPagination) + parseInt(1));
            if(buttondataPagination.getAttribute('data-pagination') == totalPagination ){
             buttondataPagination.style.display = "none";
            }
        });
    }
</script>

<script>	
    function coordenadas(event, id)	{	
        var element = document.getElementById(id);

        var bounds = event.target.getBoundingClientRect();

        x=event.clientX - bounds.left;				
        y=event.clientY - bounds.top;		

        element.querySelector('.link-circle').style.visibility= "visible";
        element.querySelector('.prop-rectangle-feed').style.visibility= "visible";

        element.querySelector('.link-circle').style.transform = "translate("+x+"px ,"+y+"px)";
	}
    function disableButtonLink(id){
        var element = document.getElementById(id);
        element.querySelector('.link-circle').style.visibility = "hidden";
        element.querySelector('.prop-rectangle-feed').style.visibility = "hidden";

    }
</script>