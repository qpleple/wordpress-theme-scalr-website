<?php
/**
 * Template Name: Tour
 */
?>
<?php get_header(); ?>

<div id="page-content" class="page-tour-content">
	<?php while(have_posts()) : the_post(); ?>
			<?php the_content(); ?>
	<?php endwhile; ?>	
</div>
<div id="page-bottom"></div>

<?php get_footer(); ?>