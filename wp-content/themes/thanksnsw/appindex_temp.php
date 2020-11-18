<?php
/*
Template Name: appindex_temp
*/

?>

<?php include ('headerhm.php'); ?>

<!-- begin content -->

<div id="content" class="contentwork clearfix">
<div id="RowA" class="indextitle">

<div class="ColA"><h1>Approach</h1></div>

<div class="ColB"><h2>Our research-based communication strategy will achieve your objectives on time and on budget</h2></div>

</div><!-- end RowA -->

<div id="RowB" class="app_car">

<img src="<?php bloginfo('template_url'); ?>/images/approach.jpg" alt="Our approach" />

</div><!-- end RowB -->

<div id="RowC"  class="app_intro">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php the_content(__('(more...)')); ?>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
        
</div>

<div id="RowD" class="workfeed workfeed_app">

<div class="ColA">

<?php // The WordPress Loop 0- customized with query_posts
$my_query = new WP_Query("showposts=4&cat=20");

			while ($my_query->have_posts()) : $my_query->the_post();?>
    
<div class="feeditem">    
    <!-- add thumbnail -->
<div class="casethumb thumbapp">
                        
<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail(array());
								} else { ?>
								<img src="<?php bloginfo('template_directory'); ?>/images/default-image.jpg" alt="<?php the_title(); ?>" />
								<?php } ?>

                       
</div>
<!-- end casethumb -->
    
    <!-- begin storypost -->
	<div class="feedcont feedapp">	



        <h2><?php the_title(); ?></h2>
 
                        
         <?php the_content(__('Read More &raquo;')); ?> 
         
         </div>
         <!-- end feedcont -->
</div>  <!-- end feeditem -->
<?php endwhile;?>	

</div>  <!-- end ColA -->

</div>
<!-- end RowD -->

</div><!-- end content -->

<?php get_footer(); ?>