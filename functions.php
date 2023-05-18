<?php 
 
 function enfiler_css (){
    wp_enqueue_style(      '4w4-gr1-principal', //identificateur
                            get_template_directory_uri() . '/style.css', //adresse url
                            array(),//définir les dépendances
                            filemtime(get_template_directory() . '/style.css'), // le calcul de la version du feuille de style
                          'all'); //media
                   
                          wp_enqueue_style("google_font",
                          "https://fonts.googleapis.com/css2?family=Anton&display=swap",
                          false);     
                         
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
                      'height' => 150,
                      'width'  => 150
                  ) );
                  add_theme_support('custom-background');
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
    $sigle = substr($title,4,3);
    $title = substr($title, 7);
    $title = "<code>" .$sigle. "</code>" . "<p>" . wp_trim_words($title, 1, ' ... ') . "</p>" ; // A modifier am.liorer pour le tp1}
return $title;
}

if($args->menu == '4w4'){
 
  if(substr($title, 0,1) == '0')
  {
    $title =substr($title, 1);
  }

}

add_filter('nav_menu_item_title', 'perso_menu_item_title', 10, 3);

}
/** Description et l'image mise en avant dans la page evenement */

function add_menu_description_and_thumbnail( $item_output, $item, $depth, $args ) {
  if ( 'evenement' == $args->menu   ||
       'bloc-archive'  == $args->menu   )
         {
      $post_thumbnail_id = get_post_thumbnail_id( $item->object_id );
      if ( $post_thumbnail_id ) {
          $post_thumbnail_url = wp_get_attachment_image_src( $post_thumbnail_id, 'thumbnail' );
          $item_output = str_replace( '">' . $args->link_before . $item->title, '">' . $args->link_before . '<span class="title">' . $item->title . '</span><span class="description">' . $item->description . '</span><img src="' . esc_url( $post_thumbnail_url[0] ) . '" class="menu-thumbnail" />', $item_output );
      } else {
          $item_output = str_replace( '">' . $args->link_before . $item->title, '">' . $args->link_before . '<span class="title">' . $item->title . '</span><span class="description">' . $item->description . '</span><figure class = "img__archive"> </figure>', $item_output );
      }
  }
  return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'add_menu_description_and_thumbnail', 10, 4 );


  /**------------------------------------------------------------------ Enregistrement des widgets */
  function enregistrer_sidebar() {
    register_sidebar( array(
        'name' => __( 'Footer 1', 'nom-de-mon-theme' ),
        'id' => 'footer_1',
        'description' => __( 'Une zone de widget pour afficher des widgets dans le footer.', 'nom-de-mon-theme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );
    register_sidebar( array(
      'name' => __( 'Footer 2', 'nom-de-mon-theme' ),
      'id' => 'footer_2',
      'description' => __( 'Une zone de widget pour afficher des widgets dans le footer.', 'nom-de-mon-theme' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="widget-title">',
      'after_title' => '</h2>',
  ) );
  register_sidebar( array(
    'name' => __( 'Footer 3', 'nom-de-mon-theme' ),
    'id' => 'footer_3',
    'description' => __( 'Une zone de widget pour afficher des widgets dans le footer.', 'nom-de-mon-theme' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>',
) );
}
add_action( 'widgets_init', 'enregistrer_sidebar' );

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size (150, 150, true);