<?php
/*
Template Name: member_corona_temp
*/

?>

<?php get_header(); ?>

<div class="cv-header-wrap">
	
	<div class="cv-header"><img src="<?php bloginfo('template_directory'); ?>/images/cv-banner-hm.jpg" alt="AMSRO Trust Mark" />
	
	<div class="cv-hm-intro">
	<div><a class="btn btn-covid" href="https://www.amsro.com.au/resources-for-covid-19">COVID-19 info</a>
		 <p class="covid-link">AMSRO is committed to supporting our members with Government information, member services and relevant links.</p>
		</div>
	<div><p class="covid-link">See how AMSRO member organisations are capturing the health and economic impact of COVID-19.</p>
	</div>	

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


