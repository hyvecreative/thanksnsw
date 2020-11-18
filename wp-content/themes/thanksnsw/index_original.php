<?php 
	if (!defined('ABSPATH')) exit;
	get_header(); 
?>

<!-- begin content -->

<div id="content" class="clearfix">

<div id="colLeft" class="page">
              
<?php if ( is_category( '4' ) ) { ?>

    <h1>Events</h1>

<?php } elseif ( is_category( '5' ) ) { ?>

    <h1>News and Media</h1>

<?php } else { ?>

	  <h1>News and Media</h1>

<?php } ?>

                  
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	


					<div class="postItem">

                        <div class="metadate"><?php the_time('j M Y') ?></div>
                        
                       	<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>  

					</div>

					
<?php endwhile; ?>

				

				<?php else : ?>

				<p>Sorry, but you are looking for something that isn't here.</p>

				<?php endif; ?>


<!--<div class="navigation">

							<div class="alignleft"><?php next_posts_link() ?></div>

							<div class="alignright"><?php previous_posts_link() ?></div>

</div>-->

				<?php if (function_exists("emm_paginate")) {

					emm_paginate();

				} ?>
                
</div><!-- end colleft -->

<?php get_sidebar(' '); ?>
        

</div><!-- end content -->



<?php get_footer(); ?>