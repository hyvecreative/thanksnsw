<?php 
	if (!defined('ABSPATH')) exit;
	get_header(); 
?>

<!-- begin content -->


<div class="container">

<!-- begin row -->

<div class="row content news-events" style="min-height: 900px">
	<div class="col-sm-8 colLeft page">

            
              
<?php if ( is_home() ) { ?>

     <h1>News and Media</h1>

<?php } else { ?>

	 <h1><?php single_cat_title(); ?></h1>

<?php } ?>

                  
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	


				<div class="feeditem">  
				<li style="list-style: none">

				<!-- add thumbnail -->
                 <div class="casethumb">
                 
								<a href="<?php the_permalink() ?>">
                        
								<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail(array());
								} else { ?>
								<img src="<?php bloginfo('template_directory'); ?>/images/default-image.jpg" alt="<?php the_title(); ?>" />
								<?php } ?>
                       
				</a></div><!-- end casethumb -->
                
                <div class="feedcont">
					
					<div class="meta clearfix">
            			<span class="date"><?php the_time('M j, Y') ?></span></span>
            		</div><!-- end meta -->
                
					<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					
					<div class="excerpthm"><p><?php the_excerpt(); ?></p></div>
              
                </li>
                
    </div><!-- END feeditem-->

					
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
                
</div><!-- end col -->


<?php get_sidebar(' '); ?>
        
</div><!-- end row -->
</div><!-- end container-->



<?php get_footer(); ?>