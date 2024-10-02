<!-- Afficher le header -->
<?php get_header(); ?>

    <!-- Contenu de la page d'accueil -->
    <main class="main">

        <!-- Hero header page d'accueil -->
        <div class="hero-header">
            <section class="video-hero-header">
                <video autoplay muted loop poster="<?php echo get_template_directory_uri() . '/assets/images/reunion-developpement-web.jpg'; ?> ">
                    <source
                    src="<?php echo get_stylesheet_directory_uri() . '/assets/video/reunion developpement web.mp4'; ?>"
                    type="video/mp4">
                </video>
                <div class="titre-parallaxe" data-0="top:35%" data-550="top:76%">
                    <h1>Développeur web Front-end</h1>
                    <p>Spécialisé dans la création et le développement de sites Wordpress sur-mesure et performants.</p>
                </div>
            </section>
        </div>

        <!-- PROFIL Mes services -->
        <div class="conteneur-mes-services">
            <div class="profil-mes-services fadein animate-on-scroll">
                <div class="service">
                    <video preload="none" autoplay muted loop disablePictureInPicture poster="<?php echo get_template_directory_uri() . '/assets/images/creation-site-web-wordpress-sur-mesure.jpg'; ?> ">
                        <source src="<?= get_stylesheet_directory_uri() . "/assets/video/site-web-responsive-wordpress.mp4" ?>" type="video/mp4">
                    </video>
                    <h2>Création de site Wordpress</h2>
                    <p>
                    La moitié des sites web utilisent WordPress, un CMS gratuit open source.<br>
                    C’est le meilleur outil pour créer le site dont vous avez besoin et qui plaira à vos visiteurs.
                    Grâce à la maitrise des fonctionnalités avancées de Wordpress, je peux vous développer un site unique personnalisé à votre image, au design moderne et performant.
                    </p>
                </div>
                <div class="service SEO">
                    <video preload="none" autoplay muted loop disablePictureInPicture poster="<?php echo get_template_directory_uri() . '/assets/images/SEO-referencement-naturel-performances-web.jpg'; ?> ">
                        <source src="<?= get_stylesheet_directory_uri() . "/assets/video/seo-referencement-naturel-performance.mp4" ?>" type="video/mp4">
                    </video>
                    <h2>Référencement naturel</h2>
                    <p>
                    L’objectif ? Que votre site arrive en première page des résultats Google.
                    Pour optimiser votre SEO je vous aide à avoir les bons mots clés pour votre activité et du contenu de qualité.<br> 
                    Je construis une architecture interne optimale et je boost la vitesse de chargement pour que les robots améliore votre positionnement.
                    </p>
                </div>
                <div class="service">
                    <video preload="none" autoplay muted loop disablePictureInPicture poster="<?php echo get_template_directory_uri() . '/assets/images/maintenance-site-wordpress-cyber-securite-protection.jpg'; ?> ">
                        <source src="<?= get_stylesheet_directory_uri() . "/assets/video/maintenance-wordpress-cybersecurite.mp4" ?>" type="video/mp4">
                    </video>
                    <h2>Maintenance et sécurité</h2>
                    <p>
                    Je suis toujours disponible et réactif. Pour assurer la performance et la sécurité de votre site, je m'occupe des mises à jour Wordpress et des plugins. 
                    Je sécurise votre connexion et je vous protège des attaques de piratage.<br>
                    Je sauvegarde régulièrement votre site et la base de données pour les restaurer à tout moment si besoin.
                    </p>
                </div>
            </div>
        </div>

        <!-- PROFIL A Propos de moi -->
        <div id="profil" class="profil-container fadein animate-on-scroll section">
            <h2>À propos de moi</h2>
            <p>Bienvenue sur mon portfolio ! Je m’appelle Jérémie Berton, développeur web basé à Nantes.<br><br>
            Ma spécialité c’est de créer des sites Wordpress sur mesure, adaptés aux demandes du client et à son budget.
            Un blog, un site vitrine ou une boutique en ligne, je développe des sites Wordpress personnalisés qui s'adaptent à toutes vos exigences avec des solutions sur mesure.<br>
            Profitez d'une interface simple d'utilisation pour mettre à jour facilement le contenu de votre site sans connaître les langages de programmation web.<br><br>
            Diplômé Développeur / Intégrateur Web WordPress chez OpenClassRooms. <br>Développeur Wordpress en freelance, je peux m'appuyer sur mes 7 ans d'expériences en gestion de projets pour comprendre les besoins du client et livrer dans les temps un site web de qualité.<br><br>
            Passionnée par les nouvelles technologies et la créativité, je propose des expériences utilisateurs fluides et interactives pour faire plaisir au visiteur et répondre à ce qu’il vient chercher.
            </p>
            <a href="http://jeremieberton.fr/#portfolio" class="btn-action">Mon portfolio</a>
            <br>
        </div>

        <!-- PROFIL Projet et softs skills -->
        <div id="projet" class="profil-gestion-projet fadein animate-on-scroll section">
                <h2>Comment je mène un projet web ?</h2>

                <div class="roue-projet-container ">
                    <img id="hex1" class="hex hex1" src="<?= get_stylesheet_directory_uri() . "/assets/images/projet-wordpress-planning-cadrage.jpg" ?>" alt="Planning analyse des besoins projet site wordpress">
                    <img id="hex2" class="hex hex2" src="<?= get_stylesheet_directory_uri() . "/assets/images/projet-wordpress-webdesign.jpg" ?>" alt="Conception design création graphique maquette site internet">
                    <img id="hex3" class="hex hex3" src="<?= get_stylesheet_directory_uri() . "/assets/images/projet-wordpress-developpement-programmation-web.jpg" ?>" alt="Développement site wordpress front-end back-end programmation base de données">
                    <img id="hex4" class="hex hex4" src="<?= get_stylesheet_directory_uri() . "/assets/images/projet-wordpress-tests-recette.jpg" ?>" alt="Tests unitaires et fonctionnels phase de recette validation développements">
                    <img id="hex5" class="hex hex5" src="<?= get_stylesheet_directory_uri() . "/assets/images/projet-wordpress-livraison-mise-en-ligne-site-web.jpg" ?>" alt="Mise en ligne site web hébergement publier site wordpress">
                    <img id="hex6" class="hex hex6" src="<?= get_stylesheet_directory_uri() . "/assets/images/projet-wordpress-maintenance-securite.jpg" ?>" alt="Maintenance corrective évolutive sécurité amélioration continue">
        
                    <p id="hexp">Un site wordpress<br>
                        <span
                            class="txt-rotate"
                            data-period="2000"
                            data-rotate='[ "de qualité", "au meilleur coût", "livré à temps", "sur-mesure", "bien référencé", "performant", "sécurisé" ]'>
                        </span>
                    </p>
                </div>
        </div>

        <!-- PROFIL Projet et softs skills -->
         <div id="competences" class="fadein animate-on-scroll section">
            <h2>Mes compétences</h2>
            <div class="competences-container">
                
                <div class="competences-progressbar">
                    <!-- Front-end -->
                    <div class="competences-section">
                        <h3>FRONT-END</h3>
                        <p>HTML</p>
                        <div class="progress-container">
                            <div class="progress-container__bar animate-on-scroll" id="html-bar"></div>
                        </div>
                        <p>CSS / SCSS</p>
                        <div class="progress-container">
                            <div class="progress-container__bar animate-on-scroll" id="css-bar"></div>
                        </div>
                        <p>JAVASCRIPT / JQUERY</p>
                        <div class="progress-container">
                            <div class="progress-container__bar animate-on-scroll" id="javascript-bar"></div>
                        </div>
                        <p>Responsive Design</p>
                        <div class="progress-container">
                            <div class="progress-container__bar animate-on-scroll" id="responsive-bar"></div>
                        </div>
                        <p>Référencement naturel</p>
                        <div class="progress-container">
                            <div class="progress-container__bar animate-on-scroll" id="seo-bar"></div>
                        </div>
                    </div>
                    <!-- Back-end -->
                    <div class="competences-section">
                        <h3>BACK-END</h3>
                        <p>PHP</p>
                        <div class="progress-container">
                            <div class="progress-container__bar animate-on-scroll" id="php-bar"></div>
                        </div>
                        <p>SQL</p>
                        <div class="progress-container">
                            <div class="progress-container__bar animate-on-scroll" id="sql-bar"></div>
                        </div>
                        <p>AJAX</p>
                        <div class="progress-container">
                            <div class="progress-container__bar animate-on-scroll" id="ajax-bar"></div>
                        </div>
                    </div>
                    <!-- CMS -->
                    <div class="competences-section">
                        <h3>CMS</h3>
                        <p>Wordpress</p>
                        <div class="progress-container">
                            <div class="progress-container__bar animate-on-scroll" id="wordpress-bar"></div>
                        </div>
                    </div>
                    <!-- Projet -->
                    <div class="competences-section">
                        <h3>PROJET</h3>
                        <p>Méthode AGILE / Kanban</p>
                        <div class="progress-container">
                            <div class="progress-container__bar animate-on-scroll" id="agile-bar"></div>
                        </div>
                        <p>Git</p>
                        <div class="progress-container">
                            <div class="progress-container__bar animate-on-scroll" id="git-bar"></div>
                        </div>
                        <p>Notion</p>
                        <div class="progress-container">
                            <div class="progress-container__bar animate-on-scroll" id="notion-bar"></div>
                        </div>
                    </div>
                    
                </div>

                <div class="competences-cv">
                    <img class="mon-cv" src="<?= get_stylesheet_directory_uri() . "/assets/images/cv-jeremie-berton-developpeur-web-wordpress.jpg" ?>" alt="Etapes projet développement site web"/>
                    <a href="<?= get_stylesheet_directory_uri() . "/assets/pdf/cv-jeremie-berton-developpeur-web-wordpress.pdf" ?>" class="btn-action" target="_blanck">Télécharger CV</a>
                </div>

            </div>
        </div>

        <!-- PORTFOLIO zone de filtres + projets réalisés -->
        <div id="portfolio" class="fadein animate-on-scroll section">
            <h2>Mon portfolio</h2>

            <!-- Zone de filtres -->
            <div class="filters-container">

                <!-- Exécuter la WP Query pour récupérer les valeurs des listes déroulantes -->
                <?php $allphotos = new WP_Query(array(
                    'post_type' => 'portfolio', // Custom Post type
                    'posts_per_page'   => -1, // pour avoir tous les enregistrements
                ));?>

                <!-- Lancer la boucle pour enregistrer les catégories et les formats dans un tableau -->
                <?php if($allphotos->have_posts()) : ?>
                    <?php while($allphotos->have_posts()) : $allphotos->the_post(); ?>
                        <?php 
                            $categ = get_the_terms( get_the_ID(), 'typeprojet' );
                            $categ = join(', ', wp_list_pluck( $categ , 'name') );
                            $tableauCateg[] = $categ; // Incrémenter le tableau des catégories
                            $cms = get_the_terms( get_the_ID(), 'cms' );
                            $cms = join(', ', wp_list_pluck( $cms , 'name') );
                            $tableauCMS[] = $cms; // Incrémenter le tableau des formats
                        ?>
                    <?php endwhile; ?>
                <?php endif; ?>

                <!--  Réinitialiser à la requête principale -->
                <?php wp_reset_postdata(); ?>

                <?php 
                // Supprimer les doublons dans les tableaux
                $arrayCateg = array_unique($tableauCateg);
                $arrayCMS = array_unique($tableauCMS);
                ?>

                <div class="menu-deroulant">
                    <button id="menu-d-1" class="filtreinactif" ><span id="btncat">TYPE DE PROJET</span>
                        <img id="menu-f-1" class="flechebas" src="<?= get_stylesheet_directory_uri() . "/assets/images/icon-fleche.png" ?>" alt="Choisir un type de projet web">
                    </button>
                    <ul id="menu-class-1" class="hide">
                        <a href="#" class="clicmenu1">
                            <li
                                data-id="TYPE DE PROJET" 
                                data-postid="<?php echo get_the_ID(); ?>"
                                data-nonce="<?php echo wp_create_nonce('load_photos'); ?>"
                                data-action="load_photos"
                                data-ajaxurl="<?php echo admin_url( 'admin-ajax.php' ); ?>">
                                &ensp;
                            </li>
                        </a>
                        <?php foreach($arrayCateg as $value) { ?>
                            <a href="#" class="clicmenu1" data-value="<?php echo $value ?>"> 
                                <li 
                                    data-id="<?php echo $value ?>" 
                                    data-postid="<?php echo get_the_ID(); ?>"
                                    data-nonce="<?php echo wp_create_nonce('load_photos'); ?>"
                                    data-action="load_photos"
                                    data-ajaxurl="<?php echo admin_url( 'admin-ajax.php' ); ?>">
                                    <?php echo $value ?>
                                </li>
                            </a>
                        <?php } ?>
                    </ul>
                </div>
                <div class="menu-deroulant">
                    <button id="menu-d-2" class="filtreinactif"><span id="btncms">CMS</span>
                        <img id="menu-f-2" class="flechebas" src="<?= get_stylesheet_directory_uri() . "/assets/images/icon-fleche.png" ?>" alt="Sélectionner un CMS">
                    </button>
                    <ul id="menu-class-2" class="hide">
                        <a href="#" class="clicmenu2">
                            <li
                                data-id="CMS" 
                                data-postid="<?php echo get_the_ID(); ?>"
                                data-nonce="<?php echo wp_create_nonce('load_photos'); ?>"
                                data-action="load_photos"
                                data-ajaxurl="<?php echo admin_url( 'admin-ajax.php' ); ?>">
                                &ensp;
                            </li>
                        </a>
                        <?php foreach($arrayCMS as $value) { ?>
                            <a href="#" class="clicmenu2" data-value="<?php echo $value ?>"> 
                                <li 
                                    data-id="<?php echo $value ?>" 
                                    data-postid="<?php echo get_the_ID(); ?>"
                                    data-nonce="<?php echo wp_create_nonce('load_photos'); ?>"
                                    data-action="load_photos"
                                    data-ajaxurl="<?php echo admin_url( 'admin-ajax.php' ); ?>">
                                    <?php echo $value ?>
                                </li>
                            </a>
                            <?php } ?>
                    </ul>
                </div>
                <div class="menu-deroulant">
                    <button id="menu-d-3" class="filtreinactif"><span id="btntri">TRIER PAR DATE</span>
                        <img id="menu-f-3" class="flechebas" src="<?= get_stylesheet_directory_uri() . "/assets/images/icon-fleche.png" ?>" alt="Trier les réalisations par date">
                    </button>
                    <ul id="menu-class-3" class="hide">
                        <a href="#" class="clicmenu3">
                            <li
                                data-id="TRIER PAR" 
                                data-postid="<?php echo get_the_ID(); ?>"
                                data-nonce="<?php echo wp_create_nonce('load_photos'); ?>"
                                data-action="load_photos"
                                data-ajaxurl="<?php echo admin_url( 'admin-ajax.php' ); ?>">
                                &ensp;
                            </li>
                        </a>
                        <a href="#" class="clicmenu3" data-value="à partir des plus récents">
                            <li
                                data-id="DESC" 
                                data-postid="<?php echo get_the_ID(); ?>"
                                data-nonce="<?php echo wp_create_nonce('load_photos'); ?>"
                                data-action="load_photos"
                                data-ajaxurl="<?php echo admin_url( 'admin-ajax.php' ); ?>">
                                à partir des plus récents
                            </li>
                        </a>
                        <a href="#" class="clicmenu3" data-value="à partir des plus anciens">
                            <li
                                data-id="ASC" 
                                data-postid="<?php echo get_the_ID(); ?>"
                                data-nonce="<?php echo wp_create_nonce('load_photos'); ?>"
                                data-action="load_photos"
                                data-ajaxurl="<?php echo admin_url( 'admin-ajax.php' ); ?>">
                                à partir des plus anciens
                            </li>
                        </a>
                    </ul>
                </div>
            </div>

            <div class="home-photos">
                <!-- Exécuter la WP Query avec les arguments pour définir ce qu'on récupère -->
                <?php 
                $listephoto = new WP_Query(array(
                    'post_type' => 'portfolio', // Custom Post type
                    'posts_per_page' => 4, // Nombre de photos par page
                    'order' => 'DESC', // Ordre ASCendant ou DESCendant
                    'orderby' => 'date', // Ordre par date
                    'paged' => '1', // Current page
                    ));
                ?>
                    <?php if($listephoto->have_posts()) : ?>
                        <div class="photos-cards">
                            <?php while($listephoto->have_posts()) : $listephoto->the_post(); ?>
                                <!-- Bloc d’affichage d’une photo de la liste -->
                                <?php get_template_part( 'template-parts/photo_block', 'none' );?>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>   
            </div>
            <button
                id="chargerplus"
                class="js-load-photos"
                data-postid="<?php echo get_the_ID(); ?>"
                data-maxpage= "<?php echo ($listephoto->max_num_pages) ?>"
                data-nonce="<?php echo wp_create_nonce('load_photos'); ?>"
                data-action="load_photos"
                data-ajaxurl="<?php echo admin_url( 'admin-ajax.php' ); ?>"
            >
            Charger plus
            </button>
        </div>

        <!-- CONTACT -->
        <div id="contact" class="fadein animate-on-scroll section">
            <div class="text-contact">
                <h2>Contactez-moi</h2>
                <p>Vous avez un projet ?<br>N’hésitez pas à me contacter.</p>
            </div>
            <div class="contact-conteneur">
                <div class="contact-formulaire">
                    <?php
                    // On insère le formulaire de contact
                    echo do_shortcode('[contact-form-7 id="3517b85" title="Formulaire de contact"]');
                    ?>
                </div>
                <div class="contact-mesinfos">
                    <div class="contact-logo">
                        <img src="<?= get_stylesheet_directory_uri() . "/assets/images/logo-email.png" ?>" alt="email jeremie berton">
                        <p>contact@jeremieberton.fr</p>
                    </div>
                    <div class="contact-logo">
                        <img src="<?= get_stylesheet_directory_uri() . "/assets/images/logo-tel.png" ?>" alt="téléphone jeremie berton">
                        <p>06 81 46 96 62</p>
                    </div>
                    <div class="contact-logo brighten grow">
                    <a href="https://www.linkedin.com/in/jeremieberton" target="_blank" title="Linkedin Jérémie Berton Développeur web">
                        <img src="<?= get_stylesheet_directory_uri() . "/assets/images/Linkedin-jeremie-berton-developpeur-web.png" ?>" alt="Linkedin Jérémie Berton Développeur web">
                    </a>
                    </div>
                    <div class="contact-logo brighten grow">
                    <a href="https://github.com/jberton" target="_blank" title="GitHub Jérémie Berton Développeur web">
                        <img src="<?= get_stylesheet_directory_uri() . "/assets/images/GitHub-jeremie-berton-developpeur-web.png" ?>" alt="GitHub Jérémie Berton Développeur web">
                    </a>
                    </div>
                </div>
            </div>
        </div>

    </main>

<!-- Afficher le footer -->
<?php get_footer(); ?>