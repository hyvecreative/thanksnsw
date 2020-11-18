<?php get_header(); ?>

<!-- begin content -->

<div class="container">

	<!-- begin row -->

		<div class="row content" style="min-height: 900px">
		<div class="col-sm-8 colLeft">

		<div class="bCrumbs" style="margin-bottom: 20px;" xmlns:v="http://rdf.data-vocabulary.org/#">
						<?php if(function_exists('bcn_display'))
						{
							bcn_display();
						}?>
	</div>

			<?php if(get_field('echo_title')):?>

			<?php else:?> 
				<h1 class="page-header-title"><?php the_title(); ?></h1> 
			<?php endif;?> 
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php the_content(__('(more...)')); ?>

			<?php endwhile; else: ?>
			<h2><?php _e('Sorry, no content matched your criteria.'); ?></h2>
			<?php endif; ?>
		</div><!-- end colleft -->

	 <?php get_sidebar(' '); ?> 

	</div><!-- end row -->

</div> <!-- end container-->
    
<?php get_footer(); ?>


