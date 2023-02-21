<?php 
/**
 * category.php est le modèele par défaut pour afficher 
 * une archive d'article de catégorie spécifiques
 */
?>
 <?php get_header(); ?>
 <main class="principal">
   <h1> Bienvenue au de cours de 4w4</h1>
   <pre>category.php</pre>
    <section class="block__flex">
       

          <?php if(have_posts()): ?>
           <?php while(have_posts()): the_post(); ?>
             <article class= "contenu__article">
               <a href="<?php the_permalink(); ?>"> <h3 class="contenu__article__titre"><?php the_title(); ?></h3>
              <?php // get_the_excerpt(); //Affiche les extraits des articles ?>
              <hr>
              <?= wp_trim_words(get_the_excerpt(), 10, "...");?>
              
            </article>
        <hr>
           <?php endwhile ?>
        <?php endif ?>
    </section>

</main>

<?php
        get_footer();
?>
