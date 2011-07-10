<?php
/**
 * Template Name: Home
 */
?>
<?php get_header(); ?>

<div id="ribbon">
    <div id="ribbon-left"></div>
    <div id="ribbon-right"></div>
    <div id="ribbon-content">
        <div id="ribbon-graph">
            <img src="/wp-content/themes/public-website/images/graph.png" width="458" height="355" alt="Graph">
        </div>
        <div id="ribbon-description"></div>
        <a href="#" id="get-a-free-account"></a>
    </div>
</div>

<div id="page-content">
	<?php while(have_posts()) : the_post(); ?>
			<?php the_content(); ?>
	<?php endwhile; ?>
</div>
<div id="page-bottom"></div>

<?php get_footer(); ?>