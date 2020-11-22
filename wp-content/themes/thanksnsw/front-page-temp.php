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
<div class="container">
	
<div class="row about-wrap text-center" style="max-width: 1000px; margin-right: auto; margin-left: auto;">
<div class="col">
		<img src="<?php bloginfo('template_directory'); ?>/images/NSW_renewables_superpower.jpg" alt="Thank you for making NSW a renewables superpower" />
	</div>
</div>

<div class="row about-wrap text-center" style="max-width: 480px; margin-right: auto; margin-left: auto;">

	<div class="col text-center" style="margin-bottom: 30px;">


		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php the_content(__('(more...)')); ?>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>	
	
	</div>
</div>

<div class="row">
	<div class="col text-center" style="margin-bottom: 30px;">

		<h2>Share here</h2>

		<a style="margin-right: 3%;" href="#"><i class="fab fa-facebook-square fa-3x"></i></a>
		<a href="#"><i class="fab fa-twitter-square fa-3x"></i></a>	

		<p><a href="#" class="btn">read the media statement button</a></p>

	</div>

</div>
	
<div class="row supporter-wrap text-center" style="background: #fff; margin-top: 30px;">
		
	 <?php if( have_rows('supporters') ): while ( have_rows('supporters') ) : the_row(); ?>
		
        <div class="col-xs-6 col-sm-3 supporter-logo" style="position: relative;">
			
			<div class="logo-wrap logo-large <?php the_sub_field('logo_size'); ?>">

                <?php
                $image = get_sub_field('logo_file');

                ?>

                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

		</div>
	</div>
			
    <?php endwhile; else: endif; ?>


</div>
	
	<div class="row supporter-wrap text-center" style="background: #fff; padding-bottom: 30px;">
		
	 <?php if( have_rows('supporters_small') ): while ( have_rows('supporters_small') ) : the_row(); ?>
		
        <div class="col-xs-4 col-sm-2 supporter-logo" style="position: relative;">
			
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