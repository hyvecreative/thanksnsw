<?php
/*
Template Name: page_corona_temp
*/
?>
<?php get_header(); ?>

<div class="row no-gutters page-header-image cv-header-wrap">
	<div class="cv-header"><img src="<?php bloginfo('template_directory'); ?>/images/cv-banner-hm.jpg" alt="AMSRO Trust Mark" />

		<div class="cv-hm-intro">
			<div><p class="covid-link">AMSRO is committed to supporting our members with Government information, member services and relevant links.</p></div>
			<div><a class="btn btn-covid" href="/covid-19-research-and-insights/">Member Research</a>
			 <p class="covid-link">See how AMSRO member organisations are capturing the health and economic impact of COVID-19.</p>
			</div>	
		</div>

	</div>
</div>

<!-- begin content -->

<div class="container">

<!-- begin row -->
<!-- begin row -->

    <div class="row content" style="min-height: 900px;">
    <div class="col-sm-12 colLeft">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(__('(more...)')); ?>
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>

	</div><!-- end col -->
	</div><!-- end row -->

</div>
    
<?php get_footer(); ?>


