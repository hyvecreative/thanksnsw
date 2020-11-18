<?php
/*
Template Name: lf_page_temp
*/
?>
<?php get_header('lf'); ?>

<div class="container">
<div class="row content microsite" style="margin-bottom: 30px;">
<div class="col lf-wide">
	<div class="page-image microsite">
		 <?php the_post_thumbnail( 'full' ); ?>
	</div>

<!-- begin colLeft -->

  <h1><?php the_title() ?></h1>     
       
 <!-- end Conditional H1-->  
		
		
		<div class="microsite-content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php the_content(__('(more...)')); ?>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
			
		</div>
		
		<div class="sponsor-wrap">
			
			<h2 style="margin-top: 20px; text-align: center;">With thanks to our sponsors</h2>
			
			<img style="width: 100%; height: auto;" src="<?php bloginfo('template_directory'); ?>/images/LF-amsro-2020-sponsors-lg.jpg" alt="Thanks to our sponsors" />
			
		</div>	
		
	</div><!-- end col -->
    </div><!-- end row -->
	</div><!-- end container -->
    
<?php get_footer(); ?>