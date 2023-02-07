<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php wp_head(); ?>
<?php the_custom_logo(); ?>
<body <?php body_class("site");?>>
<header class="site__entete">
<a class = "site__titre" href="<?= bloginfo('url') ?>"><h3><h1><?= bloginfo('name') ?></h1></a>
<h2 class="site__description"><?= bloginfo('description') ?></h2>
</header >
  <?php wp_nav_menu(array (
                         "menu" =>  "entete",
                         "container" =>  "nav",
                         "container_class" =>  "menu__entete"

)); ?>



<?php add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo', array(
    'height' => 480,
    'width'  => 720,
) );
?>
    <main class="principal">
    <h1>4W4-Création d'interface et développement <?php ?></h1>
    
    </main>
    <header >
    </header>
</body>
</html>