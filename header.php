<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<?php wp_head(); ?>
<?php
$nouvel_class = "";
if (is_front_page()){
    $nouvel_class = "no-aside";
}

?>

<body class="site <?= $nouvel_class ?>">

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

<?php 
if(! is_front_page()) 
    get_template_part("template-parts/aside");
    ?>
 
    <main class="principal">
    <h1>4W4-Création d'interface et développement <?php ?></h1>
    
    </main>
    

</html>