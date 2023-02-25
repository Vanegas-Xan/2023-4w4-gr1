<?php 
/**
 * category.php est le modèele par défaut pour afficher 
 * une archive d'article de catégorie spécifiques
 */
?>
 <?php get_header(); ?>
 <main class="site__main">
   <h1> Bienvenue au de cours de 4w4</h1>
   <pre>category.php</pre>
  


////////////////////////

   <section class="block__flex">
      <?php
      $category = get_queried_object();
      // Permet de défénir la nouvelle requête
      $args = array(
         'category_name' => $category->slug,
         'orderby' => 'title',
         'order' => 'ASC'
      );
      //Création d'une nouvelle requête
      $query = new WP_Query( $args );
      //Tout le reste de l'extraction de données est basé 
      //sur la nouvelle requête contenu dans $query 
      if ( $query->have_posts() ) :
         while ( $query->have_posts() ) : $query->the_post(); ?>
            <article>
               <h2><a href="<?php the_permalink(); ?>"> <?= substr(get_the_title(), 8); ?></a></h2>
               <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
            </article>
         <?php endwhile; ?>
      <?php endif;
      wp_reset_postdata();?>
   </section>
</main>


<?php
        get_footer();
?>