<?php
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>

<?php
$nouvel_class = "";
if (is_front_page()){
    $nouvel_class = "no-aside";
}

?>
 <main>
  <h3>404.php</h3>
  <h1 class="titre__404">Page introuvable, vous pouvez une recherche</h1>
   <div class="cours_404">
     <h1>Les choix de cours</h1>
   </div>
    <div class="notes_4w4">
    <h1>Notes de cours</h1>
    </div>
</main>

<?php get_footer(); ?>