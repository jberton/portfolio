<div class="overlay-image">
	<?php $thumb_id = get_post_thumbnail_id(get_the_ID());
	$alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);?>
    <img class="photo-card" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>" alt="<?php echo $alt; ?>" />
    <div class="hover">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <img class="icone-oeil" src="<?= get_stylesheet_directory_uri() . "/assets/images/Icon_eye.png" ?>" alt="Voir le projet web">
        </a>
        <a href="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>" class="js-load-lightbox" title="Agrandir la photo">
            <img class="icone-fullscreen" src="<?= get_stylesheet_directory_uri() . "/assets/images/Icon_fullscreen.png" ?>" alt="Agrandir l'image du projet web">
        </a>
        <p class="txt-ref">
            <?php the_field('langage'); ?>
        </p>
        <p class="txt-categ">
            <?php
            $categ = get_the_terms( get_the_ID(), 'typeprojet' );
            $categ = join(', ', wp_list_pluck( $categ , 'name') );
            echo $categ;
            ?>
        </p>
    </div>
    <div class="projet-info">
        <h3><?php the_title(); ?></h3>
        <p><?php the_field('objectif'); ?></p>
    </div>
</div>
