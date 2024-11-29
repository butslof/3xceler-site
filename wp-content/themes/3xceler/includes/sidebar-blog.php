<?php ed_set_post_views(get_the_ID()); ?>
<div class="col-3 sidebar d-none d-lg-block">
    <div class="box-sidebar box-sidebar-img shadow text-center border-boxs">
        <picture class="logo-sidebar">
            <img  src="<?= get_template_directory_uri() ?>/dist/imgs/logo.svg"  alt="IALUI" title="IALUI" >
        </picture>
        <div class="text">
            <p >
                <?= get_field('sobre-generico', 'option'); ?>
            </p>
            <p class="txt-redes">
                Siga nossas redes sociais
                <?php $redes =  get_field('redes_sociais', 'option'); ?>
                <div class="redes-blog">
                    <div class="d-flex box">
                        <a href="<?= $redes['instagram']; ?>" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a href="<?= $redes['facebook']; ?>" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </div>
                </div>
            </p>
        </div>
    </div>
    <?php get_template_part('includes/components/box-category-sidebar', null, null); ?>
    <?php get_template_part('includes/components/box-artigos-mais-visitados', null, null); ?>

</div>