<?php 
/**
 * Modèle par défaut du thème 4w4 gr1
 */
?>
 <?php get_header(); ?>
<h1> Bienvenue au de cours de 4w4</h1>
<pre>front-page.php</pre>

<?php if (have_posts()): // Deux point valable, si endif et mit en place
        while(have_posts()): //Vérifie si il y'a un post qui a été mit, parcoure l'ensemble des posts avec while
        the_post(); // extrait un objet «post»?>
 <article> 
        <h3><?php the_title();// affiche le titre du post?></h3>
        <h6> Extrait: </h6><?php get_the_excerpt(); //Affiche les extraits des articles ?>
        <h6>Le contenu:</h6> <?php the_content(); // Affiche le contenu des articles ?>
      </article>
       
   <?php endwhile; ?>
   <?php  endif ;?>


<?php
        get_footer();
?>
