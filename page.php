<?php get_header(); ?>

<div id="page-content">
	<?php while(have_posts()) : the_post(); ?>
			<div id="content-title"><?php the_title(); ?></div>
			<?php the_content(); ?>
	<?php endwhile; ?>
</div>
<div id="page-bottom"></div>

<?php get_footer(); ?>