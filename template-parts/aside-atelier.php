<?php  // Template permettant d'afficher la zone aside?>

<aside class="site__aside">
<?php $id_premiere_image = 0;
    if( has_post_thumbnail()){
        if( ($id_premiere_image == 0)){
        $id_premiere_image = get_the_ID();
     }
        the_post_thumbnail("thumbnail");
    }
?>

   
     <?php 
  
       $menu = "atelier-aside";
      
          // $menu peut prendre les valeur : "4w4" ou "cours"
            echo $menu;
            wp_nav_menu(array (             
            "menu" => $menu,                    
            "container" => "menu__side"                   

       )); ?>
</aside>
