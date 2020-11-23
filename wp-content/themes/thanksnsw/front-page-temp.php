<?php
/*
Template Name: front_page
*/
?>
<?php 
	if (!defined('ABSPATH')) exit;
	get_header(); 
?>

<div class="container-fluid hm-intro">	
<div class="container" style="position: relative;">
	
<div class="row about-wrap text-center" style="max-width: 1000px; margin-right: auto; margin-left: auto;">
<div class="col">
		<img src="<?php bloginfo('template_directory'); ?>/images/NSW_renewables_superpower.jpg" alt="Thank you for making NSW a renewables superpower" />
	</div>
</div>

<div class="row about-wrap text-center" style="max-width: 480px; margin-right: auto; margin-left: auto;">

	<div class="col text-center" style="margin-bottom: 30px; position: relative; z-index: 1;">


		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php the_content(__('(more...)')); ?>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>	
	
	</div>
</div>

<div class="row">
	<div class="col-12 social-links text-center" style="margin-bottom: 20px; position: relative; z-index: 1;">

		<h2><?php the_field('social_title') ?></h2>

		<a href="<?php the_field('facebook_url') ?>" style="color: #bbdaf6; margin-right: 3%;"><i class="fab fa-facebook-square fa-3x"></i></a>
		<a href="<?php the_field('twitter_url') ?>" style="color: #bbdaf6;"><i class="fab fa-twitter-square fa-3x"></i></a>	

		<p><a href="<?php the_field('social_button_link_url') ?>" class="btn"><?php the_field('social_button_link_text') ?></a></p>

	</div>

	<div class="col-12 jobs-image">
		<img src="<?php bloginfo('template_directory'); ?>/images/jobs.jpg" alt="More jobs in the renewables sector in NSW" />
	</div>

</div>

</div>

<div class="container">
	
<div class="row supporter-wrap text-center" style="background: #fff; max-width: 1200px;">
		
	 <?php if( have_rows('supporters') ): while ( have_rows('supporters') ) : the_row(); ?>
		
        <div class="col-6 col-sm-4 col-md-3 supporter-logo" style="position: relative;">
			
			<div class="logo-wrap logo-large <?php the_sub_field('logo_size'); ?>">

                <?php
                $image = get_sub_field('logo_file');

                ?>

                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

		</div>
	</div>
			
    <?php endwhile; else: endif; ?>


</div>
	
	<div class="row supporter-wrap text-center" style="background: #fff; padding-bottom: 30px; max-width: 1200px;">
		
	 <?php if( have_rows('supporters_small') ): while ( have_rows('supporters_small') ) : the_row(); ?>
		
        <div class="col-4 col-sm-3 col-md-2 supporter-logo" style="position: relative;">
			
			<div class="logo-wrap <?php the_sub_field('logo_size'); ?>">

                <?php
                $image = get_sub_field('logo_file');

                ?>

                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

		</div>
	</div>
    <?php endwhile; else: endif; ?>


</div>
	
	
</div> <!-- end .container -->

</div> <!-- end .container-fluid -->
	
<?php get_footer(); ?>