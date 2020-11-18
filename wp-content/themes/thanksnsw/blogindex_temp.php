<?php
/*
Template Name: blogpage_temp
*/

?>

<?php get_header(); ?>

<!-- begin content -->


<div id="content">

<!-- begin colLeft -->
	
    <div id="colLeft" class="page">
    
    <h1>The latest from EMC</h1>
		<?php // The WordPress Loop 0- customized with query_posts
$my_query = new WP_Query("showposts=10&cat=3");

			while ($my_query->have_posts()) : $my_query->the_post();?>
            
     

    
<div class="feeditem blog">  

 <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

 
<!-- add thumbnail -->
<div class="casethumb thumbapp"> <a href="<?php the_permalink() ?>">
<?php if ( has_post_thumbnail() ) {the_post_thumbnail('news');} else { ?>
<img src="<?php bloginfo('template_directory'); ?>/images/default-image.jpg" alt="<?php the_title(); ?>" /> 								
<?php } ?> </a>
</div>
<!-- end casethumb -->  
    
    <!-- begin storypost -->
	<div class="feedcont feedapp">
 
                        
         <?php the_excerpt(__('Read More &raquo;')); ?> 
         
         </div>
         <!-- end feedcont -->
</div>  <!-- end feeditem -->
<?php endwhile;?>	
	</div><!-- end colleft -->
	<div class="aside">
        <?php include ('sidebarcase.php'); ?>
    </div>
	</div><!-- end content -->
    
<?php get_footer(); ?>
