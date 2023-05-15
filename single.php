<?php 
/**
 * single.php est le modèle par défaut qui affiche un article
 */
?>
 <?php get_header(); ?>
 <main>
<pre>Single.php</pre>
<main class="site__main">
<?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
        <article class="article__single">
        
        
        <?php the_post_thumbnail("medium");?> <h3><?php the_title(); ?></h3>
                    <?php the_content(); // Affiche le contenu des articles ?>
        </article>
        <hr>
        <?php endwhile ?>
        <?php endif ?>
</main>
<?php get_footer(); ?>