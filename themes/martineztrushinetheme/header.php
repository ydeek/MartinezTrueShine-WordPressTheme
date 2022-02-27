<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <!--Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
