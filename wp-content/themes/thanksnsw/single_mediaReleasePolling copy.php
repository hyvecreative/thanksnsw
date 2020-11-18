<?php get_header(); ?>

<!-- begin content -->

<div id="content" class="clearfix">

	<div id="colLeft" class="blogroll">	
	
	<div class="mr-header">
		<img src="<?php bloginfo('template_directory'); ?>/images/AMSRO-Trust-Mark-comb-text-mr_rev.png" alt="AUSTRALIAN MARKET AND SOCIAL RESEARCH ORGANISATIONS" style="margin-bottom: 5px">
			<span>Media Release</span>
		</div>
		
                
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
                
<div class="mr-footer">
           
<h3>For further information contact:</h3>

<p>Sarah Campbell<br /> 
Executive Director, AMSRO <br /> 
(02) 8017 6717<br />  
<a href="mailto:sarah@amsro.com.au">sarah@amsro.com.au</a></p>
	
<p>Rochelle Burbury<br /> 
Third Avenue Consulting<br /> 
0408 774 577<br /> 
<a href="rochelle@thirdavenue.com.au">rochelle@thirdavenue.com.au</a></p>
            
                
                    
</div>    
			
			</div>
			<!-- end col left -->
	
<div class="aside">
			<?php get_sidebar(' '); ?>
            </div>
            
		</div><!-- end content -->
        <?php get_footer(); ?>




