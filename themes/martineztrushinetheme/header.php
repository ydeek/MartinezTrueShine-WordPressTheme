<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    
    <!--Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url');?>/css/bootstrap.css" rel="stylesheet">
    
    <!--Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    
</head>
<body>
    
 <!-- navigation bar-->
<<nav class="navbar navbar-expand-lg navbar-light">
 <!-- site logo -->
  <a class="navbar-brand" href="<?php echo home_url(); ?>">
  <img src="<?php echo get_template_directory_uri() . "/img/Logo.png" ?>" alt="site logo" />
</a>  
</nav>
       
<!--Rendering menu -->
<?php 
$args = array(
'theme_location' => 'main-menu',
'container'=> 'nave',
'container_class' => 'main-menu'
);
wp_nav_menu( $args);
?>
