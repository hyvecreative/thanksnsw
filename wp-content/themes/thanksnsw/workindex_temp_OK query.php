<?php
/*
Template Name: workindex_temp
*/

?>

<?php include ('headerhm.php'); ?>

<!-- begin content -->

<div id="content" class="contentwork clearfix">
<div id="hmrowA" class="indextitle">

<h1>Our Work</h1>

<h2>Text a two line introduction to EMC as an organisation leading in to the our services carousel</h2>

</div>


<div id="hmrowB" class="indexsector">

<div class="hmcolumnA">Work by Industry Sector</div>
<div class="hmcolumnB">
<a href="category/environmental/">Environmental</a> |
<a href="category/environmental/">Union</a> |
<a href="category/environmental/">Progressive</a> |
<a href="category/environmental/">Political</a>
</div>

</div><!-- end hmrowB -->


<div id="hmrowC" class="indexservice">

<div class="hmcolumnA">Work by Service</div>
<div class="hmcolumnB">
<li id="categories">
	<form action="<?php bloginfo('url'); ?>" method="get">
	<div>
	<?php wp_dropdown_categories('show_count=1&hierarchical=1&exclude=1,3,8'); ?>
	<input type="submit" name="submit" value="view" />
	</div>
	</form>
</li>
</div>

</div><!-- begin hmrowC -->

<div id="hmrowD" class="workfeed">

<div class="hmcolumnA">

<?php query_posts('post_type=case_studies&showposts=10'); ?>
<?php while (have_posts()) : the_post(); ?>
         <!-- begin storypost -->
	<div class="storypost">	
<!-- add thumbnail -->
<div class="storyimg">
                        
         
                        <?php if ( has_post_thumbnail() ) {
								the_post_thumbnail(array(200,130));
								} else { ?>
								<img src="<?php bloginfo('template_directory'); ?>/images/default-image.jpg" alt="<?php the_title(); ?>" />
								<?php } ?>

                       
</div>
<!-- end thumbnail -->


        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
 
                        
         <?php the_excerpt(__('Read More &raquo;')); ?> 
         
         <div class="categs"><?php the_category(', ') ?></div> 
         
         
         </div>
         <!-- end storypost -->

<?php endwhile;?>		

</div>  <!-- end hmcolumnA -->

</div>
<!-- begin hmrowD -->

</div><!-- end content -->

<?php get_footer(); ?>