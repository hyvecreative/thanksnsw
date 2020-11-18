<?php
/*
Template Name: page_corona_temp
*/

?>

<?php get_header(); ?>

<div class="cv-header-wrap">
	
	<div class="cv-header"><img src="<?php bloginfo('template_directory'); ?>/images/cv-banner-hm.jpg" alt="AMSRO Trust Mark" />
	
	<div class="cv-hm-intro">
	<p>AMSRO is committed to supporting our members with Government information, member services and relevant links.</p>
		<p>AMSRO member organisations are capturing the health and economic impact of COVID-19. <a href="https://www.amsro.com.au/covid-19-research-and-insights/">See their valuable work here.</a></p>
	</div>
		
</div>

</div> <!-- End CV header wrap -->

<!-- begin content -->

<div id="content">

<!-- begin colLeft -->
	
    <div id="colLeft" class="page pagewide">
		<h1><?php the_title(); ?></h1>	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php the_content(__('(more...)')); ?>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</div><!-- end colleft -->
    
	</div><!-- end content -->
    
<?php get_footer(); ?>


