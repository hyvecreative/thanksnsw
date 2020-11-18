<?php
/*
Template Name: tm_directory_new_temp
*/
?>
<?php get_header(); ?>

<div class="row no-gutters page-header-image">
	<div class="directory-header-wrap">
	<div class="directory-header">
		<a href="/trust-mark/"><img src="<?php bloginfo('template_directory'); ?>/images/tm-dir-banner.jpg" alt="AMSRO Trust Mark" /></a>
	</div>
    </div>
</div>

<!-- begin content -->

<div class="container">

<!-- begin row -->
<!-- begin row -->

    <div class="row content" style="min-height: 900px;">
    <div class="col-sm-12 colLeft directory">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(__('(more...)')); ?>
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>

	</div><!-- end col -->
	</div><!-- end row -->

</div>
    
<?php get_footer(); ?>


