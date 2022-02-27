<?php
/*
* Template Name: Page with Sidebar
*/

get_header(); ?>
<div class="page-content">
<main class="container page text-right section with-sidebar">
<?php while(have_posts()) : the_post();   ?>

<h1><?php the_title(); ?> </h1>
<?php
if(has_post_thumbnail()):
  the_post_thumbnail();

endif;
?>
 

<div>
 <?php the_content(); ?>
 </div>
<?php endwhile; ?>
</div>
<aside>
    <h2>Sidebar Here</h2>
</aside>

</main>

<?php get_footer(); ?>