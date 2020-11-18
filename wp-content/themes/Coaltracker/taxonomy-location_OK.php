<?php get_header(); ?>

<!-- begin content -->

<div id="content" class="contentwork clearfix">

<div id="RowA" class="indextitle">

<div class="ColA"><h1>People</h1></div>

<div class="ColB"><h2>Our talented team has the experience and the know-how to deliver results</h2></div>

</div><!-- end RowA -->

<div id="RowB" class="indexsector">

<div class="ColA">People by Location</div>
<div class="ColB">
<a href="http://essentialmedia.net.au/people/">All people</a> |
<a href="http://essentialmedia.net.au/location/melbourne/">Melbourne</a> |
<a href="http://essentialmedia.net.au/location/sydney-2/">Sydney</a> |
<a href="http://essentialmedia.net.au/location/brisbane/">Brisbane</a> |
<a href="http://essentialmedia.net.au/location/adelaide/">Adelaide</a>
</div>

</div><!-- end RowB -->


              
<div id="RowD" class="peoplefeed">

<div class="ColA">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
<div class="feeditem">    
    <!-- add thumbnail -->
<div class="casethumb">
<a href="<?php the_permalink() ?>">
                        
<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail('medium');
								} else { ?>
								<img src="<?php bloginfo('template_directory'); ?>/images/default-image.jpg" alt="<?php the_title(); ?>" />
								<?php } ?>

                       
</a></div>
<!-- end casethumb -->
    
    <!-- begin storypost -->
	<div class="feedcont">	



        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
 
                        
         <?php the_content(__('Read More &raquo;')); ?> 
         
         </div>
         <!-- end feedcont -->
</div>  <!-- end feeditem -->
<?php endwhile; else:

endif;
wp_reset_query(); // reset the query
?>	


</div>  <!-- end ColA -->

</div>
<!-- end RowD -->
        

</div><!-- end content -->



<?php get_footer(); ?>