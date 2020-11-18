<?php get_header(); ?>

<!-- begin content -->

<div id="content" class="clearfix">

	<div id="colLeft" class="pagewide">	
		
                
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	

					<div class="postItem hmfeed">
                    
						<div class="posthd">
                        
                        <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                        
                        </div>

						

						<?php the_content(__('Continue reading &raquo;')); ?> 
                        
                        
                        
                        

					
</div> <!-- Postitem -->

				<?php endwhile; ?>

				

				<?php else : ?>

				

				<p>Sorry, but you are looking for something that isn't here.</p>

				

				<?php endif; ?>
                
                
			
			</div>
			<!-- end col left -->
	
            
		</div><!-- end content -->
        <?php get_footer(); ?>




