<?php get_header(); ?>

<div id="ribbon">
    <div id="ribbon-left"></div>
    <div id="ribbon-right">hi !</div>
    <div id="ribbon-content"></div>
</div>

<div id="page-content">
	<?php while(have_posts()) : the_post(); ?>
			<div id="content-title"><?php the_title(); ?></div>
			<?php the_content(); ?>
	<?php endwhile; ?>
</div>
<div id="page-bottom"></div>

<?php get_footer(); ?>