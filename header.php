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
if (is_page_template('template-atelier.php')) {
    $nouvel_class = '';
}
if  (is_front_page() || 
   (! in_category("cours") && ! in_category("4w4")) ){
     $nouvel_class = 'no-aside';
   }


?>

<body class="custom-background site <?= $nouvel_class ?>">
    <header class="site__entete">
      <section class="entete__nav">
        <div class="site__logo"><?php the_custom_logo(); ?></div>
         <div class="menu__recherche">
         <input type="checkbox" id="chkBurger">
            <?php wp_nav_menu(array (
                         "menu" =>  "entete",
                         "container" =>  "nav",
                         "container_class" =>  "menu__entete"

                    )); ?> 
                    <?= get_search_form(); ?>
                   
                    <label class="burger" for = "chkBurger"><img src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=000000" width="32" height="32"></button>
        </div>
        </section>
        <a class = "site__titre" href="<?= bloginfo('url') ?>"><h3><h1><?= bloginfo('name') ?></h1></a>
        <h2 class="site__description"><?= bloginfo('description') ?></h2>
        
    </header >

<?php 
if(! is_front_page()) 
    get_template_part("template-parts/aside");
 
    ?>

</html>