<?php
/*
Template Name: blogindex_temp_dev
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
 
  <div class="feedmeta">
  <div class="feedavatar"><?php echo get_wp_user_avatar( $id_or_email, 48, $default, $alt ); ?></div>
  <div class="feedauthor"><?php the_author_link(); ?></div>
  <div class="feeddate"><?php the_time('M j, Y') ?></div>
  </div><!-- end feedmeta -->

 
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


<!-- pagination -->

<div class="navigation">
							<div class="alignleft"><?php next_posts_link() ?></div>
							<div class="alignright"><?php previous_posts_link() ?></div>
				</div>
				<?php if (function_exists("emm_paginate")) {
					emm_paginate();
				} ?>
<!-- end pagination -->                
                
	</div><!-- end colleft -->
	<div class="aside">
        <?php include ('sidebarcase.php'); ?>
    </div>
	</div><!-- end content -->
    
<?php get_footer(); ?>
