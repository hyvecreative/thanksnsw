<?php
/*
Template Name: talent_awards_finalists_temp
*/

?>

<?php get_header('talent'); ?>

<!-- begin content -->

<div id="content" class="talent-content">
    
<div class="container-fluid intro-band">
		
	
<div class="row hero-image" style="position: relative;">   

    <div class="page-image">
				 <?php the_post_thumbnail( 'full' ); ?>
	</div>
	
	<div class="hero-circle">
	<img src="<?php bloginfo('template_directory'); ?>/images/rgt_logo.png" alt="" />
	</div>
</div>
	
<div class="row intro-band">
	
	<div class="col-sm intro-text text-center">
		<div class="" style="background: #fff; padding: 0;">
			<h2 style="margin-bottom: 5px;"><span class="blue-txt">Winner announced</span></h2>
			<h2>Research Got Talent</h2>
			<h2 class="blue-txt">2020</h2>
		</div>
	</div>	
</div>
	
<div  class="row main-content mc-talent-wrap">
	
	
	
	
	
    <div class="col-sm-12 mc-talent"> 
		
		<div class="row">
			<div class="col-sm-12 rgt-logo-strip text-center">
			<img src="<?php bloginfo('template_directory'); ?>/images/rgt-logo-sm.jpeg" alt="Research Got Talent" />
			<img src="<?php bloginfo('template_directory'); ?>/images/amsro-logo-sm.jpeg" alt="AMSRO" />
			<img src="<?php bloginfo('template_directory'); ?>/images/esomar.png" alt="ESOMAR" />
			</div>
		</div>
		
       
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php the_content(__('(more...)')); ?>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
        
	<div class="row sponsors">
			<div class="col-sm-12 rgt-logo-strip text-center">
				<h3 style="margin-bottom: 20px;">With special thanks to our sponsors</h3>
			<a href="https://www.lumaresearch.com/"><img src="<?php bloginfo('template_directory'); ?>/images/luma-logo.jpg" alt="Luma" /></a>
			<a href="https://www.lewers.com.au/"><img src="<?php bloginfo('template_directory'); ?>/images/lewers-logo.jpg" alt="Lewers" /></a>
			<a href="https://luc.id/"><img src="<?php bloginfo('template_directory'); ?>/images/lucid-logo.jpg" alt="lucid" /></a>
			</div>
	</div>
		
	</div><!-- end colleft -->
       
		<div class="col-12" style="margin-top: 40px; margin-bottom: 40px;">
		<a class="btn rgt-btn" href="/research-got-talent/faqs/">FAQ's</a>	
		</div>
		

	
     </div><!-- end row -->
     </div><!-- end container-fluid -->  
    
	</div><!-- end content -->
    
<?php get_footer('talent'); ?>


