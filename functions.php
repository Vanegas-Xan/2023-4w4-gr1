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
 // git add --all
 // git status
 // git commit -m "s1c2"
 // git log -- oneline : Résume les git utilisés
 // git push 4w4
 // git branch lab1 Choisir une branche
 // git checkout : Changer de branche
 // git merge main  :Fusionner la branche main avec lab1
 // git push 4w4 lab1

  