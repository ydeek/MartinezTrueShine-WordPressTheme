<?php get_header(); ?>

<main class="container">
<?php while(have_posts()) : the_post();   ?>

<h1><?php the_title(); ?> </h1>
<?php
if(has_post_thumbnail()):
  the_post_thumbnail();
else:
     echo "<p> not image</p>";
endif;
?>
 

<div>
 <?php the_content(); ?>
 </div>
<?php endwhile; ?>

</main>

<?php get_footer(); ?>