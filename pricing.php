<?php
/**
 * Template Name: Pricing
 */
?>
<?php get_header(); ?>

<div id="page-content" class="page-content-pricing">
	<?php while(have_posts()) : the_post(); ?>
	    <?php the_content(); ?>
	    
        
        <div id="top-table-pricing"></div>
        <div style="clear:both"></div>
        <table id="table-pricing">
            <tr class="servers">
                <td class="first">Scale up to...</td>
                <td class="server"><div class="number"><span class="infin">&infin;</span></div>servers</td>
                <td class="server"><div class="number">80</div>servers</td>
                <td class="server"><div class="number">40</div>servers</td>
                <td class="server"><div class="number">20</div>servers</td>
                <td class="server hilight"><div class="number">10</div>servers</td>
                <td class="server"><div class="number">5</div>servers</td>
            </tr>
            <tr>
                <td class="first">Environments <sup>1</sup></td>
                <td><span class="infin">&infin;</span></td>
                <td>4</td>
                <td>3</td>
                <td>2</td>
                <td class="hilight">1</td>
                <td>1</td>
            </tr>
            <tr>
                <td class="first">User accounts <sup>2</sup></td>
                <td><span class="infin">&infin;</span></td>
                <td>4</td>
                <td>3</td>
                <td>2</td>
                <td class="hilight">1</td>
                <td>1</td>
            </tr>
            <tr>
                <td class="first two-lines">Multi-cloud<br>support <sup>3</sup></td>
                <td class="yes"></td>
                <td class="yes"></td>
                <td class="yes"></td>
                <td class="yes"></td>
                <td class="yes hilight"></td>
                <td class="yes"></td>
            </tr>
            <tr>
                <td class="first">Scripting interface</td>
                <td class="yes"></td>
                <td class="yes"></td>
                <td class="yes"></td>
                <td class="yes"></td>
                <td class="yes hilight"></td>
                <td class="no"></td>
            </tr>
            <tr>
                <td class="first two-lines">Custom scaling<br>metrics</td>
                <td class="yes"></td>
                <td class="yes"></td>
                <td class="yes"></td>
                <td class="yes"></td>
                <td class="no hilight"></td>
                <td class="no"></td>
            </tr>
            <tr>
                <td class="first">API access</td>
                <td class="yes"></td>
                <td class="yes"></td>
                <td class="yes"></td>
                <td class="yes"></td>
                <td class="hilight">Limited</td>
                <td>Limited</td>
            </tr>
            <tr>
                <td class="first two-lines">Emergency<br>support</td>
                <td class="yes"></td>
                <td class="yes"></td>
                <td>$300</td>
                <td>$300</td>
                <td class="hilight">$300</td>
                <td>$300</td>
            </tr>
            <tr>
                <td class="first">24x7 Support <sup>4</sup></td>
                <td class="yes"></td>
                <td class="yes"></td>
                <td class="no"></td>
                <td class="no"></td>
                <td class="no hilight"></td>
                <td class="no"></td>
            </tr>
        </table>
        
        <div id="princing-text">
            <ul>
                <li><sup>1</sup> Public clouds ...</li>
                <li><sup>2</sup> Public clouds ...</li>
                <li><sup>3</sup> Public clouds ...</li>
                <li><sup>4</sup> Public clouds ...</li>
            </ul>
            
            <h3>Scalr consulting</h3>
            Get blsd kmsldj flkdsj lkd jflkd jsfksdj flkdsf

            <h3>Scalr consulting</h3>
            Get blsd kmsldj flkdsj lkd jflkd jsfksdj flkdsf
        </div>
        
	<?php endwhile; ?>	
</div>
<div id="page-bottom"></div>

<?php get_footer(); ?>