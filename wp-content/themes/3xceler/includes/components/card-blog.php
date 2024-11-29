<div class="card-blog">
   
    <a href="<?= $args['link']; ?>" title="<?= $args['title']; ?>" target="_blank">
         <?php if($args['image'] == null): ?>
            <img src="<?= get_template_directory_uri() .'/dist/imgs/placeholder.jpg' ; ?>"  alt="<?= $args['title']; ?>" title="<?= $args['title']; ?>" class="d-none d-lg-block"> 
        <?php else: ?>
            <img src="<?= $args['image']; ?>"  alt="<?= $args['title']; ?>" title="<?= $args['title']; ?>" class="d-none d-lg-block"> 
        <?php endif; ?>
        <div class="infos">
            <h3 class="title">
                <?= $args['title']; ?>
            </h3>
        </div>
    </a>
</div>