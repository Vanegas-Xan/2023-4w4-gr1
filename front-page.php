<?php 
/**
 * Modèle par défaut du thème 4w4 gr1
 */
?>
 <?php get_header(); ?>
 <main class="principal">
<h1> Bienvenue au de cours de 4w4</h1>
<pre>front-page.php</pre>

<?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
        <article class= "contenu__article">
               <a href="<?php the_permalink(); ?>"> <h3><?php the_title(); ?></h3>
                <h6>Extrait:</h6> <?php the_excerpt(); //Affiche les extraits des articles ?>
                <h6>Le contenu:</h6> <?php the_content(); // Affiche le contenu des articles ?>
        </article>
        <hr>
        <?php endwhile ?>
        <?php endif ?>

</main>

<?php
        get_footer();
?>
