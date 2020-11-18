<?php
/*
Template Name: join_temp
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
	
        <?php get_sidebar('join'); ?>
    
	</div><!-- end content -->
    
<?php get_footer(); ?>


