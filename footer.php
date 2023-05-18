
<footer class="site__footer">
  <section class="sidebar__footer">
<section class="footer__col">
    <div class="sidebar">
      <?php dynamic_sidebar( 'footer_1' ); ?>
    </div>
</section>
<section class="footer__col">
    <div class="sidebar">
      <?php dynamic_sidebar( 'footer_2' ); ?>
    </div>
</section>
<section class="footer__col">
    <div class="sidebar">
      <?php dynamic_sidebar( 'footer_3' ); ?>
    </div>
</section>
</section>
   

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