<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<?php wp_head(); ?>

<body <?php body_class("site");?>>

<header class="site__entete">
<a class = "site__titre" href="<?= bloginfo('url') ?>"><h3><h1><?= bloginfo('name') ?></h1></a>
<h2 class="site__description"><?= bloginfo('description') ?></h2>
<?php the_custom_logo(); ?>
<?php wp_nav_menu(array (
                         "menu" =>  "entete",
                         "container" =>  "nav",
                         "container_class" =>  "menu__entete"

)); ?>
</header >
 


    <main class="principal">
    <h1>4W4-Création d'interface et développement <?php ?></h1>
    
    </main>
    

</html>