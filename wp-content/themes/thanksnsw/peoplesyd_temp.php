<?php
/*
Template Name: peoplesyd_temp
*/

?>

<?php include ('headerhm.php'); ?>

<!-- begin content -->

<div id="content" class="contentwork clearfix">
<div id="RowA" class="indextitle">

<div class="ColA"><h1>People</h1></div>

<div class="ColB"><h2>Our talented team has the experience and the know-how to deliver results</h2></div>

</div><!-- end RowA -->

<div id="RowB" class="indexsector">

<div class="ColA">People by Location</div>
<div class="ColB">
<a href="http://essentialmedia.net.au/people/">Melbourne</a> |
<a href="http://essentialmedia.net.au/people/">Sydney</a> |
<a href="http://essentialmedia.net.au/people/">Brisbane</a> |
<a href="http://essentialmedia.net.au/people/">Adelaide</a> |
<a href="http://essentialmedia.net.au/people/">Brussels</a>
</div>

</div><!-- end RowB -->


<div id="RowC" class="indexservice">

<div class="ColA">People by Service</div>
<div class="ColB">
<ul><li id="categories">
	<form action="<?php bloginfo('url'); ?>" method="get">
	<div>
	<?php wp_dropdown_categories('show_count=1&hierarchical=1&exclude=1,3,8'); ?>
	<input type="submit" name="submit" value="go" />
	</div>
	</form>
</li></ul>
</div>

</div><!-- end RowC -->

<div id="RowD" class="peoplefeed">

<div class="ColA">

<?php // The WordPress Loop 0- customized with query_posts
query_posts('category=24&showposts=50');?> 
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
<div class="feeditem">    
    <!-- add thumbnail -->
<div class="casethumb">
                        
<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail('medium');
								} else { ?>
								<img src="<?php bloginfo('template_directory'); ?>/images/default-image.jpg" alt="<?php the_title(); ?>" />
								<?php } ?>

                       
</div>
<!-- end casethumb -->
    
    <!-- begin storypost -->
	<div class="feedcont">	



        <h2><?php the_title(); ?></h2>
 
                        
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