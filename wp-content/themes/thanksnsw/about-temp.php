<?php
/*
Template Name: about_temp
*/
?>
<?php get_header(); ?>

<!-- begin content -->

<div class="container">

	<!-- begin row -->

		<div class="row content" style="min-height: 900px;">
		<div class="col">


			<?php if(get_field('echo_title')):?>

			<?php else:?> 
				<h1 class="page-header-title"><?php the_title(); ?></h1> 
			<?php endif;?> 
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php the_content(__('(more...)')); ?>

			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div><!-- end colleft -->

	</div><!-- end row -->

</div> <!-- end container-->
    
<?php get_footer(); ?>


