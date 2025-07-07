<?php get_header(); ?>
<div class="page-container">

	<?php 
	// Boucle principale de WordPress
	if (have_posts()) : 
		while (have_posts()) : the_post(); 
		
		// Obtenir l'ID du post sélectionné
			$current_id = get_the_ID();
		// Obtenir l'ID du post précédent
			// Si pas de post avant le premier alors prendre le dernier
			if (is_null(get_previous_post()->ID)){
				$connected = new WP_Query( array(
					// Arguments
					'post_type' => 'portfolio', // Custom Post type
					'orderby'  => 'date',
					'order' => 'DESC',
					));
				$previous_id = $connected->posts[0]->ID;
			}
			else {
				$previous_id = get_previous_post()->ID;
			};
		// Obtenir l'ID du post suivant
			// Si pas de post après le dernier alors prendre le premier
			if (is_null(get_next_post()->ID)){
				$connected = new WP_Query( array(
					// Arguments
					'post_type' => 'portfolio', // Custom Post type
					'orderby'  => 'date',
					'order' => 'ASC',
					));
				$next_id = $connected->posts[0]->ID;
			}
			else{
				$next_id = get_next_post()->ID;
			};
		// Définir tableau avec 3 photos pour la navigation
			$projectIDs = array( $next_id, $current_id, $previous_id );
		?>
			<h1 class="h1-singlepage"><?php the_title(); ?></h1>
			<div class="post-single">
				<!--  Informations sur la photo active -->
				
				<div class="post-info">
					<p><b><?php the_field('objectif'); ?></b></p>
					<p><b>Code :</b> <span id="ref-photo"><?php the_field('langage'); ?></span></p>
					<p><b>Type de projet :</b> <?php
						$categ = get_the_terms( get_the_ID(), 'typeprojet' );
						$categ = join(', ', wp_list_pluck( $categ , 'name') );
						echo $categ;
						?>
					</p>
					<p><b>Date  :</b> <?php echo get_the_date('Y');?></p>
					<p><b>Lien GitHub : </b><a href="<?php the_field('lien_github'); ?>" target="_blanck">Consultez le code</a></p>
					<p><b>Lien du site : </b><a href="<?php the_field('lien_du_site'); ?>" target="_blanck">Visitez le site</a></p>
					
				</div>
				<!--  Photos précédente, active, suivante -->
				<div class="post-photo">
					<div class="overlay-image">
						<a href="<?php the_field('lien_du_site'); ?>" target="_blanck">
							<?php echo(get_the_post_thumbnail()); ?>
							<div class="hover">
								<p class="txt-site">
									Visitez le site
								</p>
							</div>
						</a>
					</div>
				</div>
			</div>

			<div class="bloc-dessous">

				<!--  Liens pour naviguer parmi les photos -->
				<div class="lien-navigation">
					<?php 
						// Boucle pour une WP Query sur mesure
						$args = array(
							'post_type' => 'portfolio', // Custom Post type
							'orderby'  => 'date',
							'order' => 'DESC',
							'post__in' => $projectIDs,
						);
						$my_query = new WP_Query($args);
						if( $my_query->have_posts() ) :
								$my_query->the_post();
								?>
								<img id="img-1" src="<?php echo get_the_post_thumbnail_url( $next_id, 'thumbnail' ); ?>">
								<img id="img-2" src="<?php echo get_the_post_thumbnail_url( $current_id, 'thumbnail' ); ?>">
								<img id="img-3" src="<?php echo get_the_post_thumbnail_url( $previous_id, 'thumbnail' ); ?>">
						<?php endif ?>

					<div class="fleche">
						<a href="<?php echo(get_permalink( $next_id )); ?>" class="flecheGauche" onmouseover="changeleft()" onmouseout="changeBack()"><img src="<?= get_stylesheet_directory_uri() . "/assets/images/fleche-gauche.png" ?>" alt="flèche gauche navigation"></a>
						<a href="<?php echo(get_permalink( $previous_id )); ?>" class="flecheDroite" onmouseover="changeright()" onmouseout="changeBack()"><img src="<?= get_stylesheet_directory_uri() . "/assets/images/fleche-droite.png" ?>" alt="flèche droite navigation"></a>
					</div>
				</div>
			</div>

			<?php wp_reset_postdata(); ?>

		<!-- Zone de description du projet -->
		<div class="projet-description">
			<h2>Contexte</h2>
			<p><?php the_field('contexte'); ?></p>
			<h2>Description du projet</h2>
			<p><?php the_field('description'); ?></p>
		</div>

		<!--  Lien de contact -->
		<div class="lien-contact">
			<p>Vous avez un projet web à développer ?</p>
			<a href="http://jeremieberton.fr/#contact" class="btn-action">Contactez-moi</a>
		</div>

		<!-- Zone de photos apparentées -->
		<div class="projet-slider">
			<h2>Vous aimerez peut-être aussi...</h2>

		<!-- Exécuter la WP Query avec les arguments pour définir ce qu'on récupère -->
		<?php 
		$listephoto = new WP_Query(array(
			'post_type' => 'portfolio', // Custom Post type
			'posts_per_page' => -1, // Nombre de photos par page
			'order' => 'DESC', // Ordre ASCendant ou DESCendant
			'orderby' => 'date', // Ordre par date
			'post__not_in' => array($current_id), // Exclure la photo principale pour éviter doublon
			));
		?>

			<swiper-container class="swiper-container" pagination="false" effect="coverflow" grab-cursor="true" slides-per-view="auto" coverflow-effect-rotate="50" coverflow-effect-stretch="0" coverflow-effect-depth="100" autoplay="true" autoplay-delay="1000" loop="true" speed="2000" centered-slides="true">
				<?php
				while ( $listephoto->have_posts() ) {
					$listephoto->the_post();
					echo '<swiper-slide><a href="' . get_permalink() . '">';
					echo get_the_post_thumbnail( get_the_ID(), 'large' );
					echo '<figcaption>';
					the_title();
					echo'</figcaption>';
					echo '</a></swiper-slide>';
				}
				endwhile; ?>  
            </swiper-container>
		</div>		
		
	<?php endif; ?>

	<!--  Réinitialiser à la requête principale -->
	<?php wp_reset_postdata(); ?>

</div>
<?php get_footer(); ?>