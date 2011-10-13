<?php
/**
 * Template Name: Pricing
 */
?>
<?php get_header(); ?>

<div id="page-content" class="page-content-pricing">
	<?php while(have_posts()) : the_post(); ?>
	    <?php the_content(); ?>
	<?php endwhile; ?>	
</div>
<div id="page-bottom"></div>

<?php get_footer(); ?>