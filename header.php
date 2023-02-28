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
    <section class="entete__nav">
<a class = "site__titre" href="<?= bloginfo('url') ?>"><h3><h1><?= bloginfo('name') ?></h1></a>
<h2 class="site__description"><?= bloginfo('description') ?></h2>
<div class="site__logo"><?php the_custom_logo(); ?></div>
<?php wp_nav_menu(array (
                         "menu" =>  "entete",
                         "container" =>  "nav",
                         "container_class" =>  "menu__entete"

)); ?>
<?= get_search_form(); ?>
</section>
</header >

<aside class="site__aside">
    <h3>Menu secondaire</h3>
    <?php 
        $category = get_queried_object();
        if (isset($category)){
             $menu = $category->slug;
        }
        else {
            $menu = "4w4";
        }
       
        echo $menu;
        wp_nav_menu(array (             
        "menu" =>  $menu,                    
        "container" =>  "nav"                   

)); ?>
</aside>
 
    <main class="principal">
    <h1>4W4-Création d'interface et développement <?php ?></h1>
    
    </main>
    

</html>