<?php
/*
Template Name: page_lf2015_temp
*/

?>
<?php get_header(); ?>

<!-- begin content -->

<div id="content">

<!-- begin colLeft -->
	
    <div id="colLeft" class="page">
		<h1><?php the_title(); ?></h1>	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php the_content(__('(more...)')); ?>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</div><!-- end colleft -->
	
    <?php if (is_page(43) || $post->post_parent=="43")  { ?>

    <?php get_sidebar('privacy'); ?>
    
    <?php } elseif (is_page(16) || $post->post_parent=="16")  { ?>

    <?php get_sidebar('workplace'); ?> 
    
    <?php } elseif (is_page(1052))  { ?>

    <?php get_sidebar('mship'); ?> 
    
    <?php } elseif (is_page(10) || $post->post_parent=="10")  { ?>

    <?php get_sidebar('join'); ?> 
    
    <?php } elseif (is_page(3517) || $post->post_parent=="3517")  { ?>

    <?php get_sidebar('lf2015'); ?> 

<?php } else { ?>

 <?php get_sidebar(' '); ?> 

<?php } ?>  
    
	</div><!-- end content -->
    
<?php get_footer(); ?>


