<?php
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>

<?php
$nouvel_class = "";
if (is_404()){
    $nouvel_class = "no-aside";
}

?>


 <main class="site <?= $nouvel_class ?>">
  <h3>404.php</h3>
  <h1 class="titre__404">Page introuvable, vous pouvez une recherche</h1>

      <div class="recherche_404">
         <?= get_search_form(); ?>
      </div>
                   
       <div class="cours_404">
         <h1>Les choix de cours</h1>
         <?php
          $menu = "4w4";
         wp_nav_menu(array (             
            "menu" => $menu,                    
            "container" => "menu__side"                   

       )); 
       ?>
      </div>
      <div class="notes_4w4">
        <h1>Notes de cours</h1>
        <?php
         $menu = "cours";
         wp_nav_menu(array (             
            "menu" => $menu,                    
            "container" => "menu__side"                   

       )); 
       ?>
     </div>
</main>


<?php 
if(! is_404()) 
    get_template_part("template-parts/aside");
    ?>


<?php get_footer(); ?>