<?php 
/**
 * 
 * Template name: Atelier
 * 
 */

 

?> 

<?php get_header(); ?>
<main class="site__main">
<?php
if ( have_posts() ) : the_post(); ?>
<?php the_post_thumbnail('medium'); ?>
<h1><?= get_the_title(); ?></h1>
<?php the_content();?>
<table>
    <tr>
       <td>Date</td> 
       <td><?php the_field('date');?></td>
    </tr>
    <tr>
       <td>Heure</td> 
       <td><?php the_field('heure');?></td>
    </tr>
    <tr>
       <td>Durée</td> 
       <td><?php the_field('duree');?></td>
    </tr>
    <tr>
       <td>Local</td> 
       <td><?php the_field('local');?></td>
    </tr>
    <tr>
       <td>Formateur</td> 
       <td><?php the_field('formateur');?></td>
    </tr>
</table>
<p>L'adresse de l'evénement<?php the_field('adresse'); ?></p>
<p>La date et l'heure de l'événement<?php the_field('date_et_heure_de_levenement'); ?></p>     
<?php endif;?>
</main><!-- #main -->
<?php
get_footer();
?> 