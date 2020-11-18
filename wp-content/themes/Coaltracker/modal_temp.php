<?php
/*
Template Name: modal_temp
*/

?>

<?php get_header('mod'); ?>

<!-- begin content -->

<div id="content">

		<h1><?php the_title(); ?></h1>	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php the_content(__('(more...)')); ?>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>

</div>

</body>

</html>


