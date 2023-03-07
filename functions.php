<?php 

    function google_fonts(){
     wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap', null);
     add_action('wp_enqueue_scripts', 'google_fonts');
                        }

     function enfiler_css (){
    wp_enqueue_style(      '4w4-gr1-principal', //identificateur
                            get_template_directory_uri() . '/style.css', //adresse url
                            array(),//définir les dépendances
                            filemtime(get_template_directory() . '/style.css'), // le calcul de la version du feuille de style
                          'all'); //media
                        }

                    add_action( 'wp_enqueue_scripts', 'enfiler_css' );
                    //ajout de add_action pour enfiler style.css dans function functions.php


                    if ( ! function_exists( 'enregistre_menu' ) ) {

                      function enregistre_menu(){
                           register_nav_menus( array(
                            'menu_entete' =>  'Menu entete', 
                            'menu_sidebar' => ' Menu sidebar', 
                        ) );
                      }
                      add_action( 'after_setup_theme', 'enregistre_menu', 0 );
                    }

                    add_theme_support( 'title-tag' );
                    add_theme_support( 'custom-logo', array(
                      'height' => 1500,
                      'width'  => 1500,
                  ) );
                  /**
 * Modifie la requete principale de Wordpress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas çi nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */


function cidweb_modifie_requete_principal( $query ) {
  if (    $query->is_home()  //  si page d'accueill
          && $query->is_main_query() // si requête principale
          && ! is_admin() ) { // si on est pas dans le tableau de bord
          // $query->set permet de modifier la requête principale
    $query->set( 'category_name', '4w4' ); //filtre les articles de categorie note4w4
    $query->set( 'orderby', 'title' ); // trier selon le champs "title"
    $query->set( 'order', 'ASC' ); // Trier en ordre ascendant
    }
   }
   add_action( 'pre_get_posts', 'cidweb_modifie_requete_principal' );

   function perso_filtre_choix_menu($obj_menu, $arg){
//echo "/////////////////  obj_menu";
// var_dump($obj_menu);
//  echo "/////////////////  arg";
//var_dump($arg);
// die();
    if ($arg->menu == "cours"){
        foreach($obj_menu as $cle => $value)
        {
            //  print_r($value);
            $value->title = substr($value->title,7);
            $value->title = wp_trim_words($value->title,3,"...");
            //echo $value->title . '<br>';
        }
    }
   return $obj_menu;
}
add_filter("wp_nav_menu_objects","perso_filtre_choix_menu", 10,2);

/**
 * Permet de personnalisé les titres du menu cours
 * @param $title : titre du menu à modifier
 *  $item : la structure «li» du menu 
 *  $args : Objet décrivant l'ensemble des menus de notre site
 *  $depth: Niveau de pronfondeur du menu (Retiré ici)
 */
function perso_menu_item_title($title, $item, $args) {
  // Remplacer 'nom_de_votre_menu' par l'identifiant de votre menu
  if($args->menu == 'cours') { //On filtre uniquement le menu «cours»
// Modifier la longueur du titre en fonction de nos besoins
$title = wp_trim_words($title, 3, ' ... ');// Modifier et améliorer pour le tp1
}
return $title;
}
add_filter('nav_menu_item_title', 'perso_menu_item_title', 10, 3);


   
 // git add --all
 // git status
 // git commit -m "s1c2"
 // git log -- oneline : Résume les git utilisés
 // git push 4w4
 // git branch lab1 Choisir une branche
 // git checkout : Changer de branche
 // git merge main  :Fusionner la branche main avec lab1
 // git push 4w4 lab1

  