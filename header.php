<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php wp_head(); ?>

<header class="entete">
<a class = "site__titre" href="<?= bloginfo('url') ?>"><h3><h1><?= bloginfo('name') ?></h1></a>
<h2 class="site__description"><?= bloginfo('description') ?></h2>
</header >
<body <?php body_class("site");?>>
    <main class="principal">
    <h1>4W4-Création d'interface et développement <?php ?></h1>
    
    </main>
    <header >
    </header>
</body>
</html>