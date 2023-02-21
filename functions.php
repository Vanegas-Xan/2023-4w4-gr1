<?php 
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
 // git add --all
 // git status
 // git commit -m "s1c2"
 // git log -- oneline : Résume les git utilisés
 // git push 4w4
 // git branch lab1 Choisir une branche
 // git checkout : Changer de branche
 // git merge main  :Fusionner la branche main avec lab1
 // git push 4w4 lab1

  