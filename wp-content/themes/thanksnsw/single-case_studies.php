<?php get_header(); ?>

<!-- begin content -->

<div id="content" class="clearfix">

	<div id="colLeft" class="blogroll">
		
                
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	

	<div class="postItem">
                    
    <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

	<?php the_content(__('Continue reading &raquo;')); ?> 
                        

					
	</div> <!-- Postitem -->
	
    <?php endwhile; ?>

	<?php else : ?>

	<p>Sorry, where's that service gone?.</p>

	<?php endif; ?>
			
	</div>
	<!-- end col left -->
	
    <?php include ('sidebarcase.php'); ?>
            
	</div><!-- end content -->
    <?php get_footer(); ?>




