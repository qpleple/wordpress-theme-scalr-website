<?php get_header(); ?>

<div id="page-content">
	<?php while(have_posts()) : the_post(); ?>
		<div id="content-title"><?php the_title(); ?></div>
		<?php the_content(); ?>
        
        <table id="table-pricing">
            <tr id="row-chars">
                <td id="char-0"></td>
                <td id="char-1"></td>
                <td id="char-2"></td>
                <td id="char-3"></td>
                <td id="char-4"></td>
                <td id="char-5"></td>
                <td id="char-6"></td>
            </tr>
            <tr id="row-head">
                <td id="green-arrow"></td>
                <td id="head-1">World<br>domination <span class="head-price">Call us</span></td>
                <td id="head-2">Monopoly            <span class="head-price">$2,399 </span></td>
                <td id="head-3">IPO                 <span class="head-price">$999   </span></td>
                <td id="head-4">VC                  <span class="head-price">$399   </span></td>
                <td id="head-5">Angel               <span class="head-price">$199   </span></td>
                <td id="head-6">Seed                <span class="head-price">$99    </span></td>
            </tr>
        </table>
			
	<?php endwhile; ?>
</div>
<div id="page-bottom"></div>

<?php get_footer(); ?>