<footer class="site__footer">

    <h3>le pied de page</h3>

    <?php wp_nav_menu(array (
                   "menu" =>  "footer",    
                   "container" =>  "nav", 
                   "container_class" =>  "menu__footer"
     )); ?>
    <hr>
    <section class="lien">Copyright © 2023 - Collège de Maisonneuve. Tous droits réservés.</section>
  
</footer>

<?php 
 wp_footer();
?>