<?php $args = "blog"; ?>
<?php 
    $args = array(
    'page' => 'blog',
    'class' => 'int-blog'
    ); 

    $category = get_the_category();  
?>

<?php get_template_part('header', null, $args); ?>

<section id="content-blog">
    <div class="container">
        <div class="row line-intro">
            <div class="col-lg col-12">
                <h1 class="title-large search-page">
                    <span>Tag Selecionada:</span>
                    <span class="bg-title">
                        <div class="text-background"></div>
                        <?= $category[0]->name; ?>                       
                    </span>
                </h1>
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
        if( have_posts() ) :
    ?>
        <?php
            while(have_posts() ) : the_post(); $cont++;
        ?>

                <?php if($cont % 2 != 0): ?>
                    <article class="row line-post line-right">
                        <div class="col-lg col-12 col-text text-right">
                            <div class="content-box" >
                                <a href="<?= get_permalink() ?>" title="<?= get_the_title();?>">
                                    <img src="<?= get_field('imagem'); ?>" title="<?= get_the_title();?>" alt="<?= get_the_title();?>" class="d-lg-none img-post-mob">
                                    <div class="info-post d-lg-none">
                                        <span class="mobile-author-avatar-wrapper">
                                            <img class="mobile-author-avatar" src="<?= get_avatar_url( get_the_author_email(), '60' ); ?>" alt="<?= get_the_author(); ?>" title="<?= get_the_author(); ?>">
                                        </span>
                                        Por: <span class="autor"><?= get_the_author(); ?></span>   |  <span class="date"><?= get_the_date() ?></span>
                                    </div>
                                    <h2 class="title-posts">
                                        <?php echo(limit_words(get_the_title(),89)); ?>
                                    </h2>
                                    <div class="info-post d-none d-lg-block">
                                        Por: <span class="autor"><?= get_the_author(); ?></span>   |  <span class="date"><?= get_the_date() ?></span>
                                    </div>
                                    <p class="resumo d-none d-lg-block">
                                        <?php echo(limit_words(get_the_excerpt(),260)); ?>
                                    </p>
                                </a>
                                <a href="<?= get_permalink() ?>" title="<?= get_the_title();?>" class="button-veja-mais d-lg-none">
                                    Saiba mais
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-12 col-img d-none d-lg-block" id="box-img-<?= $cont; ?>" onmouseout="disableButtonLink('box-img-<?= $cont; ?>')" onmousemove="coordenadas(event, 'box-img-<?= $cont; ?>')">
                            <a href="<?= get_permalink(); ?>" title="<?= get_the_title();?>" >
                                <img src="<?= get_field('imagem'); ?>" title="<?= get_the_title();?>" alt="<?= get_the_title();?>">
                            </a>
                            <a class="link-circle" href="<?= get_permalink() ?>" title="<?= get_the_title();?>"  >Saiba mais</a>
                            <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/prop-rectangle-blog-feed.png" class="prop-rectangle-feed" title="retangulo" alt="retangulo" class="d-none d-lg-block">
                        </div>
                    </article>
                <?php else: ?>
                    <article class="row line-post line-left">
                        <div class="col-lg-5 col-12 col-img d-none d-lg-block" id="box-img-<?= $cont; ?>" onmouseout="disableButtonLink('box-img-<?= $cont; ?>')" onmousemove="coordenadas(event, 'box-img-<?= $cont; ?>')">
                            <a href="<?= get_permalink(); ?>" title="<?= get_the_title();?>" >
                                <img src="<?= get_field('imagem'); ?>" title="<?= get_the_title();?>" alt="<?= get_the_title();?>">
                            </a>
                            <a class="link-circle" href="<?= get_permalink() ?>" title="<?= get_the_title();?>"  >Saiba mais</a>
                            <img src="<?= get_template_directory_uri( ) ?>/dist/imgs/prop-rectangle-blog-feed.png" class="prop-rectangle-feed" title="retangulo" alt="retangulo" class="d-none d-lg-block">
                        </div>
                        <div class="col-lg col-12 col-text text-left">
                            <div class="content-box">
                                <a href="<?= get_permalink() ?>" title="<?= get_the_title();?>">
                                    <img src="<?= get_field('imagem'); ?>" title="<?= get_the_title();?>" alt="<?= get_the_title();?>" class="d-lg-none img-post-mob">
                                    <div class="info-post d-lg-none">
                                        <span class="mobile-author-avatar-wrapper">
                                            <img class="mobile-author-avatar" src="<?= get_avatar_url( get_the_author_email(), '60' ); ?>" alt="<?= get_the_author(); ?>" title="<?= get_the_author(); ?>">
                                        </span>
                                        Por: <span class="autor"><?= get_the_author(); ?></span>   |  <span class="date"><?= get_the_date() ?></span>
                                    </div>
                                    <h2 class="title-posts">
                                        <?php echo(limit_words(get_the_title(),89)); ?>
                                    </h2>
                                    <div class="info-post d-none d-lg-block">
                                        Por: <span class="autor"><?= get_the_author(); ?></span>   |  <span class="date"><?= get_the_date() ?></span>
                                    </div>
                                    <p class="resumo d-none d-lg-block">
                                        <?php echo(limit_words(get_the_excerpt(),260)); ?>
                                    </p>
                                </a>
                                <a href="<?= get_permalink() ?>" title="<?= get_the_title();?>" class="button-veja-mais d-lg-none">
                                    Saiba mais
                                </a>
                            </div>
                    </article>
                <?php endif; ?>
            <?php endwhile;?>
        <?php 
            else: 
                echo "
                    <div class='container'>
                        <div class='row'>
                            <div class='col-12'>
                                <h2>Nenhum Post encontrado!</h2>
                            </div>
                        </div>
                    </div>
                    
                    ";
            wp_reset_postdata();
            endif;
        ?>
        <div class="row d-lg-none">
            <div class="col-12">
                <?php get_template_part('includes/components/form-search', null, null); ?>
            </div>
        </div>
    </div>
 
</section>

</main>
<?php get_template_part('footer', null, 2); ?> 
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


