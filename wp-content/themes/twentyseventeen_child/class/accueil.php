<?php

class Accueil
{
    public function __construct()
    {
        add_shortcode('accueil', array($this, 'recent_html'));
    }

    public function recent_html($atts, $content)
	{
		?>
			<link rel="stylesheet" href="<?php echo WP_PLUGIN_URL;?>/../themes/twentyseventeen_child/assets/css/grille.css">
  			<script type="text/javascript" src="<?php echo WP_PLUGIN_URL;?>/../themes/twentyseventeen_child/assets/js/accueil.js"></script>
  		<?php

		$args = array( 'post_type' => 'film', 'posts_per_page' => 18 );

		$loop = new WP_Query( $args );

		?><div id="accueil"><?php

			// while ( $loop->have_posts() ) : $loop->the_post();
			    
			//     echo '</br>';
			//     the_title();
			//     echo '<div class="entry-content">';
			//     the_content();
			//     echo "Durée :". get_post_meta(get_the_ID(),'duree',true)."</br>";
			//     echo "Réalisateur :". get_post_meta(get_the_ID(),'realisateur',true)."</br>";
			//     // URL de l'image
			//     $imageData = wp_get_attachment_image_src(get_post_thumbnail_id ( get_the_ID()));
			//     echo "IMAGE : <img src='".$imageData[0]."' />";

			//      echo '</div>';
			//     echo '</br>';

			// endwhile;

		?><div class="container"><?php

			$parcourir_film = 0;

			?><div class="row"><?php
				while ( $loop->have_posts() ) : $loop->the_post();

					if($parcourir_film%6 == 0){
						?></div><div class="row"><?php
					}

					$imageData = wp_get_attachment_image_src(get_post_thumbnail_id ( get_the_ID()));
					?><div class="affiche_film col-2"><?php
						echo "<BR><img class='image-affiche-film' src='".$imageData[0]."'/>";
						echo "<span class='titre-affiche-film'>";
						echo the_title() . "<BR>";
						echo "<span class='date-affiche-film'>";
						echo get_post_meta(get_the_ID(),'date',true);
						echo "2017</span>";
						echo "</span>";
						// echo the_title();
					?></div><?php

					$parcourir_film++;
				endwhile;
			?></div><?php

		?></div><?php

		?></div><?php
	}

}

new Accueil();