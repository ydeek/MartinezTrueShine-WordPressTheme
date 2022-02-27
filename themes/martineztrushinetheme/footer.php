<footer class="site-footer container">

<div class="footer-content">
<?php 
$args = array(
'theme_location' => 'main-menu',
'container'=> 'nave',
'container_class' => 'footer-menu'
);
wp_nav_menu( $args);
?>

<p class="copyright"> All Rights Reserved. <?php echo get_bloginfo('name')  . " " . date('Y'); ?>
</div>


</footer>



</body>
</html>