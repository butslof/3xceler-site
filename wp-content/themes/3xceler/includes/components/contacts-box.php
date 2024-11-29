<span class="title-large-min">
    <?= $args['title']; ?>
</span>
<address>
    <?= $args['text']; ?>
</address>
<div class="contacts-box">
    <?php get_template_part('includes/components/buttons/email', null, null); ?>
    <?php 
        $number = '';
        if($args['unidade'] == 'Natal'){
            $number = getNumbers('fixo-natal');
        }elseif($args['unidade'] == 'São Paulo'){
             $number = getNumbers('fixo-sp');
        }
        $args = array(
            'number' => $number
        );
        get_template_part('includes/components/buttons/button-telefone-fixo', null, $args); 
    
    ?>
    <?php get_template_part('includes/components/buttons/ver-no-mapa', null, null); ?>
</div>