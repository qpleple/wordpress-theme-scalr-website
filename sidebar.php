<div id="sidebar">
	<ul>
	    <?php $query = new WP_Query("name=header"); ?>

        <?php while ($query->have_posts()) : $query->the_post(); ?>
        	<?php the_content(); ?>
        <?php endwhile; ?>

        <?php wp_reset_postdata(); // Reset Post Data ?>
	</ul>
</div>
