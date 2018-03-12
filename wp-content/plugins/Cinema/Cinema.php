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
			add_action('admin_menu', array($this, 'add_admin_menu'),20); //Ajout de l'onglet dans la barre à gauche
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

			echo "Début plug-in CINEMA";
		}

}
	//On instancie le nouveau plugin !
	new Cinema();

?>