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
      function my_custom_init(){
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
            add_action('add_meta_boxes','initialisation_metaboxes');
function initialisation_metaboxes(){
    add_meta_box('film_real', 'Réalisateur', 'meta_real', 'film', 'normal');
    add_meta_box('film_duree', 'Durée', 'meta_duree', 'film', 'normal');
}
            function meta_real(){
  echo '<label for="realisateur">Nom : </label>';
  echo '<input id="realisateur" type="text" name="realisateur" placeholder="Entrez le nom du réalisateur" required/>';
}
               function meta_duree(){
  echo '<label for="duree">Durée : </label>';
  echo '<input id="duree" type="text" name="duree" placeholder="Entrer la duree du film" required/>';

               }
		}
}
	//On instancie le nouveau plugin !
	new Cinema();

?>
