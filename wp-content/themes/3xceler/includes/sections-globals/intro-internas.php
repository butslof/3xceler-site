<section id="intro-internas">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-large text-center">
                    <div class="left">
                        <?= $args['title1']; ?>
                    </div>
                    <div class="right">
                        <?= $args['title2']; ?>
                    </div>
                </h1>
            </div>
        </div>
        <div class="row line-breadcrumb">
            <div class="col-lg-6 col-12 col-bread">
                <?php get_template_part('includes/breadcrumb', null, null); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12 col-left">
                <?= $args['text1']; ?>
            </div>
            <div class="col-lg-6 col-12 col-right">
                <?= $args['text2']; ?>
                <div class="box-button">
                    <?php 
                        $args = $args['title-button'];                        
                        get_template_part('includes/components/buttons/solicitar-orcamento-light', null, $args); 
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>