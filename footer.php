    <div id="footer">
        <div id="footer-left"></div>
        <div id="footer-right"></div>
        <div id="footer-content">
            <?php $query = new WP_Query("name=footer"); ?>

            <?php while ($query->have_posts()) : $query->the_post(); ?>
            	<?php the_content(); ?>
            <?php endwhile; ?>

            <?php wp_reset_postdata(); // Reset Post Data ?>
        </div>
    </div>
    
    <?php wp_footer(); ?>
</div>

</body>
</html>