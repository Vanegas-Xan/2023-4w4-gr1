<?php

/* Template-parts gabarit categorie-4w4 permet d'afficher un article bloc qui s'intègre dans la liste des notes-4w4 qu'on accède 
* avec categorie-4w4
*/
$titre = get_the_title();
if(substr($titre, 0,1) == '0'){
    $titre = substr($titre, 1);
}
// retirer le premier zéro du titre d'article de catégorie note-4w4
if(substr($titre,0,1) == '0'){
   $titre = substr($titre, 1);
}
$sigle = substr($titre,0,7);
$grand_titre = substr($titre, 7,-5);
$duree = "90h";

?>

<article class="blocflex__article">
    <figure class="blocflex__figure">
  
    <?php
    $id_premiere_image = 0;
    if( has_post_thumbnail()){
        if( ($id_premiere_image == 0)){
        $id_premiere_image = get_the_ID();
     }
        the_post_thumbnail("thumbnail");
    }
    else{
        echo get_the_post_thumbnail(74, "thumbnail");
    }
    
    ?></figure>
    <?php echo get_the_ID() ?>
    <h5><a href="<?php the_permalink(); ?>"> <?= $titre; ?></a></h5>
    <p><?= wp_trim_words(get_the_excerpt(), 15, "...") ?></p>
</article>

<?php 
    // the_excerpt //  echo Le resumé du post
    // the_content //  echo L'ensemble du contune d'un article

    /*
     Question possible :
     Amélioration du search bar
     Ajout d'un template part
     Ajout d'un menu

    */



?>