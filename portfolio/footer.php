<div class=line-top-footer></div>
		<footer>
			<p>© Copyright 2024 – Jérémie BERTON. Tous droits réservés</p>
			<!-- menu footer -->
			<?php
				$defaults = array(
				'theme_location' => 'footer-menu', 
				'container' => '', 
				'menu_class' => 'my-footer-menu', 
				'menu' => 'footer'
				);
				wp_nav_menu($defaults);

			?>
			<!-- Lightbox photo -->
			<?php get_template_part( 'template-parts/lightbox', 'none' );?>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>