<?php
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>

 <main class="site__404"  >
 
  <h1 class="titre__404">Erreur 404</h1>
  <h2 >Page introuvable, vous pouvez une recherche</h2>

      <div class="recherche__404">
         <?= get_search_form(); ?>
      </div>
                   
       <div class="cours__404">
         <h2 >Les choix de cours</h2>
         <?php
          $menu = "cours";
         wp_nav_menu(array (             
            "menu" => $menu,                    
            "container" => "menu__side"                   

       )); 
       ?>
      </div>
      <div class="notes_4w4">
        <h2 >Notes de cours</h2>
        <?php
         $menu = "4w4" ;
         wp_nav_menu(array (             
            "menu" => $menu,                    
            "container" => "menu__side"                   

       )); 
       
       ?>

       
     </div>
</main>

<?php get_footer(); ?>