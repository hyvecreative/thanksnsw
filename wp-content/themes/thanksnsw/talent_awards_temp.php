<?php
/*
Template Name: talent_awards_temp
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
			<h2 style="margin-bottom: 5px;"><span class="blue-txt">Be in with a chance</span></h2>
			<h2>To showcase your talent in</h2>
			<h2 class="blue-txt">Toronto 2020</h2>
		</div>
	</div>	
</div>
	
<div  class="row main-content mc-talent-wrap">
	
	
	
	
	
    <div class="col-sm-12 mc-talent"> 
		
		<div class="row">
			<div class="col-sm-12 rgt-heading text-center">
		
		<h3><strong>Are you a young researcher wanting to make a difference in the world?</strong></h3>
		<h3>Don’t miss your chance to enter the inaugural Research Got Talent Competition in Australia!</h3>
				
			</div>
		</div>
	
		<div class="row">
			<div class="col-sm-12 rgt-logo-strip text-center">
			<img src="<?php bloginfo('template_directory'); ?>/images/rgt-logo-sm.jpeg" alt="Research Got Talent" />
			<img src="<?php bloginfo('template_directory'); ?>/images/amsro-logo-sm.jpeg" alt="AMSRO" />
			<img src="<?php bloginfo('template_directory'); ?>/images/esomar.png" alt="ESOMAR" />
			</div>
		</div>
		
		
	<div class="row circle-row text-center" style="margin-bottom: 40px;">  
		<div class="col-md-4">
			<div class="circle">
			<h2>Research</h2>
			<p>The ESOMAR <strong>Research Got Talent</strong> Initiative started with the Associations in Hong Kong and India and is now being implemented by Associations around the word.
</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="circle rgt-blue">
			<h2>Got</h2>
			<p>AMSRO is pleased to be part of this global initiative which provides the opportunity to recognise and celebrate young researchers.
</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="circle">
			<h2>Talent</h2>
			<p>The aim is to invite, welcome and include young researchers to highlight and showcase the positive impact of research.  
</p>
			</div>
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
			<div class="col-sm-12 rgt-logo-strip text-center" style="padding-top: 0;">
			<a href="https://www.stableresearch.com.au/"><img src="<?php bloginfo('template_directory'); ?>/images/stable-logo.jpg" alt="Luma" /></a>
			</div>
	</div>
		
	</div><!-- end colleft -->
       
		<div class="col-12" style="margin-top: 40px; margin-bottom: 40px;">
		<a class="btn rgt-btn" href="/research-got-talent/enter-now/">ENTER NOW</a>
		<a class="btn rgt-btn" href="/research-got-talent/faqs/">FAQ's</a>	
		</div>
		

	
     </div><!-- end row -->
     </div><!-- end container-fluid -->  
    
	</div><!-- end content -->
    
<?php get_footer('talent'); ?>


