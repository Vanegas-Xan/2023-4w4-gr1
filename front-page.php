<?php 
/**
 * Modèle par défaut du thème 4w4 gr1
 */
?>
 <?php get_header(); ?>
 <main class="site__main">
   <h1> Bienvenue au de cours de 4w4</h1>
   <pre>front-page.php</pre>
    <section class="block__flex">
       

          <?php if(have_posts()): ?>
           <?php while(have_posts()): the_post(); ?>
         <?php if (in_category('galerie')){
             get_template_part("template-parts/categorie", "galerie"); 
         } else{
           get_template_part("template-parts/categorie", "4w4"); 
         }
         
         ?>
       
       
        <hr>
           <?php endwhile ?>
        <?php endif ?>
    </section>

</main>

<?php
        get_footer();
?>
