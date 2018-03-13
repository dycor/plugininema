<?php

/*
Plugin Name: Cinema
Description: Affiche de films
Author: Groupe 9 ESGI
*/

define('Cinema_url',WP_PLUGIN_URL.'/Cinema');

Class Cinema {

		public function __construct()
		{

//------TAXONOMY----



add_theme_support( 'post-thumbnails' );




add_action('init', 'my_custom_init');
function my_custom_init()
{
/* notre code PHP pour rajouter les custom post type */

    register_post_type(
  'film',
  array(
    'label' => 'Films',
    'labels' => array(
      'name' => 'Films',
      'singular_name' => 'Films',
      'all_items' => 'Tous les films',
      'add_new_item' => 'Ajouter un film',
      'edit_item' => 'Éditer le film',
      'new_item' => 'Nouveau film',
      'view_item' => 'Voir le film',
      'search_items' => 'Rechercher parmi les films',
      'not_found' => 'Pas de film trouvé',
      'not_found_in_trash'=> 'Pas de film dans la corbeille'
      ),
    'public' => true,
    'capability_type' => 'post',
    'supports' => array(
      'title',
      'editor',
      'thumbnail'
    ),
    'has_archive' => true
  )
);

    register_taxonomy(
  'genre',
  'film',
  array(
    'label' => 'Genres',
    'labels' => array(
    'name' => 'Genres',
    'singular_name' => 'Genre',
    'all_items' => 'Tous les genres',
    'edit_item' => 'Éditer le genre',
    'view_item' => 'Voir le genre',
    'update_item' => 'Mettre à jour le genre',
    'add_new_item' => 'Ajouter un genre',
    'new_item_name' => 'Nouveau genre',
    'search_items' => 'Rechercher parmi les genres',
    'popular_items' => 'Genres les plus utilisés'
  ),
  'hierarchical' => true
  )
);


register_taxonomy_for_object_type( 'genre', 'film' );

};



		}

		//Permet de créer un onglet au menu de l'administrateur(à gauche de wp coté admin)
		public function add_admin_menu()
		{
		    add_menu_page('Cinema', 'Cinema', 'manage_options', 'Cinema', array($this, 'menu_html'));
		}

		public function menu_html()
		{
			?>
			<link rel="stylesheet" href="<?php echo Cinema_url;?>/css/Cinema.css">
			<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
 			<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  			<script type="text/javascript" src="<?php echo Cinema_url;?>/js/Cinema.js"></script>
			<?php


		}




}
	//On instancie le nouveau plugin !
	new Cinema();

?>
