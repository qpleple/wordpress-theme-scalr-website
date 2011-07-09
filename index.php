<?php get_header(); ?>

<div id="content">
	<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
			<div class="post">
				<?php the_title(); ?>
				<?php the_content(); ?>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</div>

<?php get_footer(); ?>

</body>
</html>