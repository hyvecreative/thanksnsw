<?php get_header(); ?>

<!-- begin content -->

<div id="content" class="clearfix">

	<div id="colLeft" class="blogroll">		
		
                
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	

					<div class="postItem hmfeed">
                    
                  
						<div class="posthd">
                        
						
                        
                        <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                        
                        <div class="titlemeta">
                        <div class="metadate"><?php the_time('M j Y') ?></div>
                        

<!-- ************** Social Sharing BEGIN *************** -->

<div class="singleshare">
	

</div>

<!-- ************** Social Sharing END *************** -->
</div>
                        </div>

						

						<?php the_content(__('Continue reading &raquo;')); ?> 
                        
                        
                        
                        

					
</div> <!-- Postitem -->

				<?php endwhile; ?>

				

				<?php else : ?>

				

				<p>Sorry, but you are looking for something that isn't here.</p>

				

				<?php endif; ?>
                
                
			
			</div>
			<!-- end col left -->
	
<div class="aside">
			<?php get_sidebar(' '); ?>
            </div>
            
		</div><!-- end content -->
        <?php get_footer(); ?>




