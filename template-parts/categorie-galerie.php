<?php

/* Template-parts gabarit categorie-galerie permet d'afficher un article bloc qui s'intègre dans la galerie d'un article
Cet article contient uniquement une galerie
*/
?>
<article class="blocflex__galerie">
    <?php the_content(); ?>
    <p> <?php the_field('galerie')?></p>
</article>
</p>