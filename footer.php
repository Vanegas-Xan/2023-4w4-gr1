<footer class="site__footer">

    <h3>le pied de page</h3>

    <?php wp_nav_menu(array (
                   "menu" =>  "footer",    
                   "container" =>  "nav", 
                   "container_class" =>  "menu__footer"
     )); ?>

    <section class="lien">Lien #1</section>
    <section class="lien">Lien #2</section>
    <section class="lien">Lien #3</section>
</footer>

<?php 
 wp_footer();
?>