<?php get_header(); ?>

<!-- begin content -->

<div id="content" class="clearfix"> LLLLLLL

<!-- begin colLeft -->

		<div id="colLeft" class="blogroll">

<h1>Work</h1> 

              
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	


					<div class="postItem hmfeed">
                    
                 		<div class="posthd">
						
                        <div class="metadate"><?php the_time('M j Y') ?></div>


						<div class="titlehd">
                        
                        <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                        <div class="categs"><?php the_category(' ') ?></div>
                        
                        </div> <!-- end titlehd -->
                        
                        </div> <!-- end posthd -->
                        
                        
                        <!-- add thumbnail -->
                        
                        <?php the_post_thumbnail(array(140,100)) ?>

                       <!-- end thumbnail -->
                        
                        <?php the_excerpt(__('Read More &raquo;')); ?> 


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
                

		</div>

		<!-- end colLeft -->
        
        <?php include ('sidebar.php'); ?>


</div><!-- end content -->



<?php get_footer(); ?>